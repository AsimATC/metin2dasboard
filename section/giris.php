<div class="left-part">
    <div class="login">
        <h2>Giriş Yap</h2>
        <form method="post" action="https://demo.metin2panel.com/ares/login/control" id="loginForm" accept-charset="utf-8" onkeypress="return event.keyCode != 13;" autocomplete="off">
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
            <button type="submit" class="btn login-btn">Giriş Yap</button>
            <a href="register.php">
                <div class="btn account-btn">Kaydol</div>
            </a>
        </form>
        <script>
            $("#loginForm").on('submit', function(event) {
                event.preventDefault();

                var url = $(this).attr("action");
                var data = $(this).serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        if (response.result)
                            window.location.href = response.redirect;
                        else {
                            errorNotify(response.message);
                            grecaptcha.reset();
                        }
                    }
                });
            });
        </script>
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