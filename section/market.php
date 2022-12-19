<div class="right-part">
    <a href="download.php">
        <div class="download-game">
            <div class="top">
                <img src="app/public/client/ares/asset/images/top-flower.png" alt="flower" class="img-fluid">
            </div>
            <button class="btn btn-download">
                <span>DOWNLOAD</span>
                Free!
            </button>
            <div class="bottom">
                <img src="app/public/client/ares/asset/images/bottom-flower.png" alt="flower" class="img-fluid">
            </div>
        </div>
    </a>

    <div class="vote-btns">
        <div class="vote-btn-bg">
            <a href="https://www.facebook.com/people/Twelve-sky-2-Reloaded-/100088134660860/?mibextid=ZbWKwL" target="_blank">
                <div class="btn btn-vote">
                    <img src="app/public/client/ares/asset/images/vote-icon.png" alt="icon" class="img-fluid">
                    Facebook Page
                </div>
            </a>
        </div>
        <div class="vote-btn-bg">
            <a href="https://discord.gg/ATQWDbqkRz" target="_blank">
                <div class="btn btn-coin">
                    <img src="app/public/client/ares/asset/images/nitemstone.png" alt="icon" class="img-fluid">
                    Discord Address
                </div>
            </a>
        </div>
    </div>

    <?php
    if (isset($_SESSION['giris_tamam'])) {
    ?>
        <div class="shop-item">
            <img src="app/public/client/ares/asset/images/shop-image.jpg" alt="shop" class="img-fluid">
            <a href="paketler.php" class=""><button class="btn btn-shop disable-btn">Market</button></a>
        </div>
    <?php
    } else {
    ?>
        <div class="shop-item">
            <img src="app/public/client/ares/asset/images/shop-image.jpg" alt="shop" class="img-fluid">
            <a href="" class=""><button class="btn btn-shop disable-btn">Sign in for the market</button></a>
        </div>
    <?php
    }
    ?>


    <div class="bottom-table">
        <div class="c-panel-header">
            <h2>EVENT TAKVİMİ</h2>
        </div>
        <div id="ranking_side_player">
        </div>
    </div>


</div>