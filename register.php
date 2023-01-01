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
                            <h3>Register</h3>
                        </div>
                        <div class="update-available-inner">
                            <?php


                            /// Formu post etti kontrolü
                            if ($_POST) {

                                $sifre = $_POST['password'];
                                $sifre2 = $_POST['password2'];
                                $mail_adresi = $_POST['email'];
                                $kullanici_adi = $_POST['user_name'];


                                $kullanicikontrol = $db->prepare("SELECT * FROM memberinfo WHERE uID = ?");
                                $kullanicikontrol->execute([$kullanici_adi]);
                                $kullanicikontrolsayisi = $kullanicikontrol->rowCount();

                                // Kullanıcı var mı yok mu kontrol
                                if ($kullanicikontrolsayisi == 0) {

                                    // Şifre Kontrol
                                    if ($sifre ==  $sifre2) {

                                        // Veri tabanına kaydetme
                                        $ekle = $db->prepare("INSERT INTO memberinfo SET
                                        uID = :uID,
                                        email = :email,
                                        uPassword = :uPassword
                                        ");

                                        echo "var ";

                                        $kontrol = $ekle->execute(array(
                                            "uID" => $kullanici_adi,
                                            "email" =>   $mail_adresi,
                                            "uPassword" =>   $sifre,
                                        ));

                                        // Veri tabanına kaydettimi kontrol ediliyor
                                        if ($kontrol) {
                            ?>
                                            <script>
                                                Swal.fire({
                                                    title: 'Registered',
                                                    text: 'Membership added successfully. Automatically signed in !',
                                                    icon: 'success',
                                                    confirmButtonText: 'OK'
                                                })
                                            </script>
                                        <?php

                                            $_SESSION['giris_tamam'] = $kullanici_adi;
                                        } else {
                                        ?>
                                            <script>
                                                Swal.fire({
                                                    title: 'Error ',
                                                    text: 'There was a problem adding a membership',
                                                    icon: 'error',
                                                    confirmButtonText: 'OK'
                                                })
                                            </script>
                                        <?php
                                        }
                                    } else {   // Şifre Kontrol
                                        ?>
                                        <script>
                                            Swal.fire({
                                                title: 'Passwords ',
                                                text: ' Passwords Do Not Match Please Check !',
                                                icon: 'error',
                                                confirmButtonText: 'OK'
                                            })
                                        </script>
                                    <?php
                                    }
                                } else { //Kullanıcı var mı yok mu kontrol
                                    ?>
                                    <script>
                                        Swal.fire({
                                            title: 'available ',
                                            text: ' Registered User available !',
                                            icon: 'info',
                                            confirmButtonText: 'OK'
                                        })
                                    </script>
                            <?php
                                }
                            } else { // Formu post etti kontrolü
                            }

                            ?>
                            <form action="" method="POST" class="page_form" autocomplete="off">
                                <table border="0" align="center" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <label>User Name<br>
                                                    <input type="text" name="user_name" id="login" required maxlength="16" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Password <br>
                                                    <input type="password" name="password" id="pass" required maxlength="30" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Password Repeat <br>
                                                    <input type="password" name="password2" id="pass2" required maxlength="30" />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Email Address <br>
                                                    <input type="email" name="email" id="email" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Name surname <br>
                                                    <input id="name" type="text" name="name" maxlength="60" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Address <br>
                                                    <input id="ksk" type="text" name="ksk" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label>Telephone <br>
                                                    <input type="text" id="phone" name="phone" maxlength="10" placeholder="555-555-55-55" required />
                                                </label>
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <td align="center">
                                                <label>Where did you find us?
                                                    <br>
                                                    <select name="findme" class="select-box">
                                                        <option value="yok" selected>Please choose...</option>
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
                                                    <span>By registration <a href="" target="_blank">I accept the membership </a> agreement.</span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <br>
                                                <input type="submit" value="Register">
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