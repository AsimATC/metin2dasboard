<?php
include "section/db.php";
## 2. ADIM için örnek kodlar ##

## ÖNEMLİ UYARILAR ##
## 1) Bu sayfaya oturum (SESSION) ile veri taşıyamazsınız. Çünkü bu sayfa müşterilerin yönlendirildiği bir sayfa değildir.
## 2) Entegrasyonun 1. ADIM'ında gönderdiğniz merchant_oid değeri bu sayfaya POST ile gelir. Bu değeri kullanarak
## veri tabanınızdan ilgili siparişi tespit edip onaylamalı veya iptal etmelisiniz.
## 3) Aynı sipariş için birden fazla bildirim ulaşabilir (Ağ bağlantı sorunları vb. nedeniyle). Bu nedenle öncelikle
## siparişin durumunu veri tabanınızdan kontrol edin, eğer onaylandıysa tekrar işlem yapmayın. Örneği aşağıda bulunmaktadır.
$post = $_POST;

####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
#
## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
$merchant_key     = 'RJBCnze5kp16rF4H';
$merchant_salt    = '6BWDys2ZAf5szm79';
###########################################################################

####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
#
## POST değerleri ile hash oluştur.
$hash = base64_encode(hash_hmac('sha256', $post['merchant_oid'] . $merchant_salt . $post['status'] . $post['total_amount'], $merchant_key, true));
#
## Oluşturulan hash'i, paytr'dan gelen post içindeki hash ile karşılaştır (isteğin paytr'dan geldiğine ve değişmediğine emin olmak için)
## Bu işlemi yapmazsanız maddi zarara uğramanız olasıdır.
if ($hash != $post['hash'])
    die('PAYTR notification failed: bad hash');
###########################################################################

## BURADA YAPILMASI GEREKENLER
## 1) Siparişin durumunu $post['merchant_oid'] değerini kullanarak veri tabanınızdan sorgulayın.
## 2) Eğer sipariş zaten daha önceden onaylandıysa veya iptal edildiyse  echo "OK"; exit; yaparak sonlandırın.

/* Sipariş durum sorgulama örnek
 	   $durum = SQL
	   if($durum == "onay" || $durum == "iptal"){
			echo "OK";
			exit;
		}
	 */

if ($post['status'] == 'success') { ## Ödeme Onaylandı
    // sipariş id aldırıyoruz.
    $siparis_id =  $post['merchant_oid'];

    // Local veri tabanından siparişi seçiyoruz
    $siparissor = $db_siparis->prepare("SELECT * FROM siparisler WHERE siparis_no = ?");
    $siparissor->execute([$siparis_id]);
    $siparis_yaz = $siparissor->fetch(PDO::FETCH_ASSOC);

    // Kullanıcı için gerekli sipariş bilgilerini değişkenlere aktarıyoruz
    $kullanici_adi = $siparis_yaz['kullanici_adi'];
    $fiyat = $siparis_yaz['uCash'];


    // Server oyun sunucusunda sipariş ait kullanıcı seçiyoruz
    $kullanicikontrol = $db->prepare("SELECT * FROM memberinfo WHERE uID = ?");
    $kullanicikontrol->execute([$kullanici_adi]);

    $kullanici = $kullanicikontrol->fetch(PDO::FETCH_ASSOC);


    // Satın alınan fiyat burada oyun için nakite çevirilyor
    switch ($fiyat) {
        case 100:
            $price_gp = 200;
            break;
        case 200:
            $price_gp = 500;
            break;
        case 500:
            $price_gp = 1350;
            break;
        case 1000:
            $price_gp = 2600;
            break;
        case 2000:
            $price_gp = 5500;
            break;
        case 5000:
            $price_gp = 14000;
            break;

        default:
            echo "Belirtilen ücret Tespit Edilemedi !!";
            break;
    }

    $toplam_bg = $kullanici['uCash'] + $price_gp;

    // Sipariş Oyun sunucusuna kaydediliyor
    $ekle = $db->prepare("UPDATE memberinfo SET
    uCash = :uCash
    WHERE 
    uID = :uID
    ");

    $kontrol = $ekle->execute(array(
        "uCash" =>   $toplam_bg,
        "uID" => $kullanici_adi,
    ));

    // Ödmee alındıkdan sonra kontrol ediyoruz eğer ödeme alındı ise işlem tamam notu vt'ye ekletiyoruz
    if ($kontrol) {

        // Siparişde sorun yoksa vt'e işletiyoruz
        $ekle = $db_siparis->prepare("UPDATE siparisler SET
           siparis_durumu = :siparis_durumu
            WHERE 
            siparis_no = :siparis_no
            ");

        $siparis_durumu = "Sipariş Tamam";

        $kontrol = $ekle->execute(array(
            "siparis_no" => $siparis_id,
            "siparis_durumu" =>   $siparis_durumu,
        ));
    } else {
        echo "Güncellemede Bir Sorun Yaşandı !! Anaysayfa destek alanından discord üzerinden iletişime geçip admine bilgi veriniz.";
    }
    ## BURADA YAPILMASI GEREKENLER
    ## 1) Siparişi onaylayın.
    ## 2) Eğer müşterinize mesaj / SMS / e-posta gibi bilgilendirme yapacaksanız bu aşamada yapmalısınız.
    ## 3) 1. ADIM'da gönderilen payment_amount sipariş tutarı taksitli alışveriş yapılması durumunda
    ## değişebilir. Güncel tutarı $post['total_amount'] değerinden alarak muhasebe işlemlerinizde kullanabilirsiniz.

} else { ## Ödemeye Onay Verilmedi
    echo "Ödemeye Onay Verilmedi";
    ## BURADA YAPILMASI GEREKENLER
    ## 1) Siparişi iptal edin.
    ## 2) Eğer ödemenin onaylanmama sebebini kayıt edecekseniz aşağıdaki değerleri kullanabilirsiniz.
    ## $post['failed_reason_code'] - başarısız hata kodu
    ## $post['failed_reason_msg'] - başarısız hata mesajı

}

## Bildirimin alındığını PayTR sistemine bildir.
echo "OK";
exit;
