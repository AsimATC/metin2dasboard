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
                            <h3>Haberler&Duyurular</h3>
                        </div>
                        <div class="update-available-inner">
                            <br>
                        </div>
                    </div>

                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="../../connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v3.2&appId=762916164068770&autoLogAppEvents=1"></script>
                    <script>
                        window.fbAsyncInit = function() {
                            FB.init({
                                xfbml: true,
                                version: 'v3.2'
                            });
                        };

                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = '../../connect.facebook.net/tr_TR/sdk/xfbml.customerchat.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="update-inner">
                        <div class="update-label">
                            <h3>Facebook</h3>
                        </div>
                        <div class="update-available-inner">
                            <div id="fb" class="facebook">
                                <img src="app/public/client/ares/static/images/loaders/brighter.gif" alt="" id="fbLoading" style="display:block; margin-left: auto;margin-right: auto; margin-top: 224px;margin-bottom: 224px;">
                                <div id="fbContent" class="fb-page" data-href="https://www.facebook.com/metinpanel" data-tabs="timeline" data-width="462" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" style="display: none;margin-left: 65px;"></div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            if ($(window).width() < 540) {
                                document.getElementById('fb').style.display = 'none';
                            } else {
                                setTimeout(function() {
                                    document.getElementById('fbLoading').style.display = "none";
                                    $('#fbContent').fadeIn();
                                }, 3500)
                            }

                        });
                    </script>
                </div>

                <div class="fbBoard fbBoard2" id="facebookLike">
                    <center>

                        <a href="https://www.facebook.com/people/Twelve-sky-2-Reloaded-/100088134660860/?mibextid=ZbWKwL" target="_blank">
                            <div class="facebook-like">
                                <img src="app/public/client/ares/main/images/face.png" alt="">
                                <a href="javascript:void(0)" onclick="document.getElementById('facebookLike').style.display='none';" style="display:block;width:23px;height:23px;margin:0px;padding:0px;border:none;background-color:transparent;position:absolute;top:23px;right:70px;-webkit-border-radius: 12px;border-radius: 12px;"></a>

                                <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/metinpanel&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=segoe+ui&amp;height=30&amp;appId=515295435153698" scrolling="no" frameborder="0" style="position:absolute;bottom:82px;right:104px;border:none; overflow:hidden; width:98px; height:21px;" allowtransparency="true"></iframe>


                            </div>
                        </a>
                    </center>
                </div>
                <script>
                    var isMobile = {
                        Android: function() {
                            return navigator.userAgent.match(/Android/i);
                        },
                        BlackBerry: function() {
                            return navigator.userAgent.match(/BlackBerry/i);
                        },
                        iOS: function() {
                            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                        },
                        Opera: function() {
                            return navigator.userAgent.match(/Opera Mini/i);
                        },
                        Windows: function() {
                            return navigator.userAgent.match(/IEMobile/i);
                        },
                        any: function() {
                            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                        }
                    };
                    if (isMobile.any()) {
                        document.getElementById('facebookLike').style.display = 'none';
                    }
                </script>
            </div>
           <?php include "section/market.php" ?>
        </div>
    </div>
</div>
<!-- content end -->

<?php include "section/footer.php" ?>