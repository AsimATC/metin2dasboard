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
                            <h3>404 Error</h3>
                        </div>
                        <div class="update-available-inner">
                            <style>
                                .main404 {
                                    position: relative;
                                    height: 500px;
                                    margin: 10px;
                                    font-weight: bold;
                                    text-align: center;
                                }

                                .sub404 {
                                    position: absolute;
                                    left: 50%;
                                    top: 30%;
                                    transform: translate(-50%, -30%);
                                    color: #bfb3a9;

                                }
                            </style>

                            <div class="main404">
                                <div class="sub404">
                                    <h1 style="font-size:52px;font-weight:bold">404</h1>
                                    Aradığınız Sayfa Bulunamadı!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "section/market.php" ?>
        </div>
    </div>
</div>
<!-- content end -->

<?php include "section/footer.php" ?>