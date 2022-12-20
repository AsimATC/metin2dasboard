<?php 
if (isset($_SESSION['giris_tamam'])) {

} else {
   header("refresh:0, url=index.php");
}
?>

<?php include "section/header.php" ?>
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
<div class="middle-part" style="margin:  0 auto;">
    <div class="top-banner-middle">
        <img src="app/public/client/ares/asset/images/top-banner-img.png" alt="top-banner-img">
    </div>
    <div class="update-available">
        <div class="update-inner">
            <div class="update-label">
                <h3>MARKET </h3>
            </div>
            <div class="update-available-inner">

                <form action="paytr.php" class="page_form">
                    <input type="text" placeholder="Kullanıcı Adınız">
                    <br>
                    <br>
                    <input type="text" placeholder="Mail Adresiniz">
                    <br>
                    <br>
                    <select name="price" class="select-box">
                        <option value="yok" selected="">paket seçiniz...</option>
                        <option value="Paket1">Paket 1</option>
                        <option value="Paket2">Paket 2</option>
                        <option value="Paket3">Paket 3</option>
                        <option value="Paket4">Paket 4</option>
                        <option value="Paket5">Paket 5</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="SATIN AL">
                </form>
            </div>
        </div>
    </div>

</div>

<?php include "section/footer.php" ?>