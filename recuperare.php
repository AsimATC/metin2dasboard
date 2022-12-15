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
                <div class="update-available">
                    <div class="update-inner">
                        <div class="update-label">
                            <h3>Şifremi Unuttum</h3>
                        </div>
                        <div class="update-available-inner">
                            <form id="forgetPasswordForm" action="https://demo.metin2panel.com/ares/recuperare/control" method="post" accept-charset="utf-8" class="page_form" autocomplete="off">
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
                                                    <input type="text" name="email" id="email" placeholder="Mail Adresi">
                                                </label>
                                            </td>
                                        </tr>
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
                                                <br>
                                                <input type="submit" value="Mail Gönder">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    $("#forgetPasswordForm").on("submit", function(event) {
                        event.preventDefault();

                        var url = $(this).attr("action");
                        var data = $(this).serialize();

                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: data,
                            dataType: 'json',
                            success: function(response) {
                                grecaptcha.reset();
                                if (response.result)
                                    successNotify(response.message);
                                else
                                    errorNotify(response.message);
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