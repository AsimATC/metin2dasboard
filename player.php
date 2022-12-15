<?php include "section/header.php" ?>

<!-- content start -->
<div class="content clearfix">
    <div class="container">
        <div class="content-main">
        <?php include "section/giris.php" ?>
            <div class="middle-part">
                <div class="top-banner-middle">
                    <img src="../app/public/client/ares/asset/images/top-banner-img.png" alt="top-banner-img">
                </div>
                <div class="update-available">
                    <div class="update-inner">
                        <div class="update-label">
                            <h3>Oyuncu Sıralaması</h3>
                        </div>
                        <div class="update-available-inner">
                            <div style="margin-left:10px;margin-bottom:20px;text-align: center;">
                                <a href="javascript:void(0);"><button class="account-btn">Oyuncu Sıralaması</button></a>
                                <a href="guild.html"><button class="account-btn">Lonca Sıralaması</button></a>
                                <div class="ucp_divider"></div>
                            </div>
                            <table id="large" cellspacing="0" class="sidebar_rank">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>İsim</th>
                                        <th>Seviye</th>
                                        <th>Bayrak</th>
                                        <th>Lonca</th>
                                        <th>Karakter</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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