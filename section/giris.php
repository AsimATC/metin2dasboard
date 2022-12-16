<div class="left-part">
    <div class="login">
        <h2>Giriş Yap</h2>
        <form method="post" action="index.php" accept-charset="utf-8" autocomplete="off">
            <div class="form-group">
                <input id="login_input" type="text" class="form-control" name="login" placeholder="Kullanıcı Adı" maxlength="16" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Şifre" id="password_input" maxlength="20" autocomplete="off">
            </div>
            <div class="g-recaptcha rc-anchor-blue" data-theme="dark" style="transform:scale(0.81);-webkit-transform:scale(0.81);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lf4keQiAAAAAJfoEoYCbC5qM2OorPUtwP7QHMqe"></div>
            <div class="form-group">
                <a href="recuperare.php" class="forgot">Şifremi Unuttum</a>
            </div>
            <input type="submit" value="Giriş Yap" name="giris" class="btn login-btn"></input>
            <a href="register.php">
                <div class="btn account-btn">Kaydol</div>
            </a>
        </form>
        <?php
        // Çerezde giriş var ise anasayfaya gidiyor
        if (isset($_SESSION['giris_tamam'])) {
            // header("refresh:1, url=admin_paneli.php");
        } else {
            //Giriş yapılmadı boş
        }

        // Gelen Post var mı varsa bunları değişkene aktar yapılıyor
        if (isset($_POST['giris'])) {

            $mail = $_POST['login'];
            $sifre = $_POST['password'];

            // Mail ile şifre boşmu dolu ise bu şekilde bir kullanıcı var mı 
            if ($mail == "" or $sifre == "") { ?>
                <div class="alert alert-danger" role="alert">
                    Lütfen boş geçmeyin !
                </div>
                <?php
            } else {
                $kullanicikontrol = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = ? and sifre = ?");
                $kullanicikontrol->execute([$mail, $sifre]);
                $kullanicikontrolsayisi = $kullanicikontrol->rowCount();

                // Kullanıcı var mı varsa vt de var mı 
                if ($kullanicikontrolsayisi > 0) {

                    $_SESSION['giris_tamam'] = $mail;

                ?>
                    <div class="alert alert-success" role="alert">
                        Başarı ile giriş yapıldı, <b><!--yönlendiriliyorsunuz--></b>
                    </div>
                <?php

                    //header("refresh:1, url=admin_paneli.php");
                } else {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Kullanıcı bulunamadı !
                    </div>
        <?php
                }
            }
        } else {
        }
        ?>
    </div>

    <div class="bottom-table">
        <div class="c-panel-header">
            <h2>Sunucu İstatistikleri</h2>
        </div>
        <div id="ranking_side_player">
            <table class="table">
                <center>
                    <tr class="c1">
                        <td class="pname"><i><b>Toplam Online:</i></b></td>
                        <td class="score">
                            <font id="online_oyuncu" class="">400</font><br>
                        </td>
                    </tr>
                    <tr class="c1">
                        <td class="pname"><i><b>Aktif Pazar:</i></b></td>
                        <td class="score">
                            <font id="online_oyuncu" class="">0</font><br>
                        </td>
                    </tr>
                    <tr class="c1">
                        <td class="pname"><i><b>Aktif Pazar:</i></b></td>
                        <td class="score">
                            <font id="online_oyuncu" class="">11</font><br>
                        </td>
                    </tr>
                    <tr class="c1">
                        <td class="pname"><i><b>Aktif Pazar:</i></b></td>
                        <td class="score">
                            <font id="online_oyuncu" class="">0</font><br>
                        </td>
                    </tr>
                </center>
            </table>
        </div>
    </div>

    <div class="bottom-table">
        <div class="c-panel-header">
            <h2>Oyuncu Sıralaması</h2>
        </div>
        <div id="ranking_side_player">
            <table class="table">
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bottom-table">
        <div class="c-panel-header">
            <h2>Lonca Sıralaması</h2>
        </div>
        <div id="ranking_side_player">
            <table class="table">
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
    .bg-color {
        padding: 10px;
    }
</style>

<div class="bg-color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>