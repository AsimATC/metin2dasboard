<?php include "section/header.php" ?>
<!-- content start -->
<div class="content clearfix">
    <div class="container">
        <div class="content-main">
            <?php include "section/giris.php" ?>
            <div class="middle-part">
                <div class="top-banner-middle">
                    <img src="app/public/client/ares/asset/images/top-banner-img.png" alt="top-banner-img">
                </div>
                <style>
                    .select-box {
                        background-color: #321c11;
                        color: #d8a960;
                        padding: 8px 10px;
                        font-size: 12px;
                        position: relative;
                        border-radius: 3px;
                        transition: all 0.5s ease;
                        width: 100%;
                        width: 300px;
                    }
                </style>
                <div class="update-available">
                    <div class="update-inner">
                        <div class="update-label">
                            <h3>Kayıt Ol</h3>
                        </div>
                        <div class="update-available-inner">
                            <?php

                            # ekleme işlemi olackatır 
                            if ($_POST) {
                                $sifre = $_POST["password"];
                                $sifre2 = $_POST["password2"];

                                if ($sifre == $sifre2) {

                                    $kullanici_adi = $_POST["login"];
                                    $mail_adresi = $_POST["email"];
                                    $isim_soyisim = $_POST["name"];
                                    $adres = $_POST["ksk"];
                                    $telefon = $_POST["phone"];
                                    $nerden_buldun = $_POST["findme"];

                                    $ekle = $db->prepare("INSERT INTO kullanicilar SET
                                    kullanici_adi = :kullanici_adi,
                                    sifre = :sifre,
                                    mail_adresi = :mail_adresi,
                                    isim_soyisim = :isim_soyisim,
                                    adres = :adres,
                                    telefon = :telefon,
                                    nerden_buldun = :nerden_buldun
                                    ");

                                    $kontrol = $ekle->execute(array(

                                        "kullanici_adi" =>   $kullanici_adi,
                                        "sifre" =>   $sifre,
                                        "mail_adresi" =>   $mail_adresi,
                                        "isim_soyisim" =>   $isim_soyisim,
                                        "adres" =>   $adres,
                                        "telefon" =>   $telefon,
                                        "nerden_buldun" =>   $nerden_buldun,

                                    ));

                                    if ($kontrol) {
                                    ?>
                                        <div class="alert alert-success mx-auto adres" role="alert" style="font-size: 13px; max-width:760px;">
                                            <b>Üyelik</b> başarılı bir şekilde eklendi
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="alert alert-danger mx-auto adres" role="alert" style="font-size: 13px; max-width:760px;">
                                            <b>Üyelik</b> eklerken bir sorun yaşandı
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="alert alert-danger mx-auto adres" role="alert" style="font-size: 13px; max-width:760px;">
                                        Şifreler Eşleşmiyor Lütfen Kontrol Ediniz
                                    </div>
                            <?php
                                }
                            } else {
                            }

                            ?>
                            <form action="" method="POST" class="page_form" autocomplete="off">
                                <table border="0" align="center" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <label>Kullanıcı Adı <br>
                                                    <input type="text" name="login" id="login" required maxlength="16" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Şifre <br>
                                                    <input type="password" name="password" id="pass" required maxlength="30" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Şifre Tekrar <br>
                                                    <input type="password" name="password2" id="pass2" required maxlength="30" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Mail Adresi <br>
                                                    <input type="email" name="email" id="email" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>İsim Soyisim <br>
                                                    <input id="name" type="text" name="name" maxlength="60" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Adres <br>
                                                    <input id="ksk" type="text" name="ksk"  required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Telefon <br>
                                                    <input type="text" id="phone" name="phone" maxlength="10" placeholder="555-555-55-55" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <td align="center">
                                                <label>Bizi nerden buldunuz?
                                                    <br>
                                                    <select name="findme" class="select-box">
                                                        <option value="yok" selected>Lütfen seçiniz...</option>
                                                        <option value="google">Google</option>
                                                        <option value="facebook">Facebook</option>
                                                        <option value="youtube">Youtube</option>
                                                        <option value="instagram">Instagram</option>
                                                        <option value="discord">Discord</option>
                                                    </select>
                                                </label>
                                            </td>
                                        </div>
                                        <tr>
                                            <td align="center">
                                                <label>
                                                    <span style="color:darkred;text-shadow:none;"></span>
                                                    <br>
                                                    <script src='../../www.google.com/recaptcha/api.js'></script>
                                                    <div class="g-recaptcha" data-sitekey="6Lf4keQiAAAAAJfoEoYCbC5qM2OorPUtwP7QHMqe"></div>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>
                                                    <span>Kayıt olarak <a href="privacy/index.php" target="_blank">üyelik sözleşmesini</a> kabul ederim.</span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <br>
                                                <input type="submit" value="Kayıt Ol">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    $('#pass2').change(function() {
                        var pass = $('#pass').val();
                        var pass2 = $(this).val();
                        if (pass != pass2) {
                            $('#pass2').notify(
                                "Şifreler uyuşmuyor !", {
                                    position: "right"
                                }
                            );
                        }
                    });

                    $("#registerForm").on("submit", function(event) {
                        event.preventDefault();

                        var url = $(this).attr("action");
                        var data = $(this).serialize();

                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: data,
                            dataType: 'json',
                            success: function(response) {
                                if (response.result) {
                                    successNotify(response.message);
                                    setTimeout(function() {
                                        window.location.href = response.redirect;
                                    }, 2000)
                                } else {
                                    errorNotify(response.message);
                                    grecaptcha.reset();
                                }
                            }
                        });
                    });
                </script>
            </div>
            <?php include "section/market.php" ?>
        </div>
    </div>
</div>
<!-- content end -->

<?php include "section/footer.php" ?>