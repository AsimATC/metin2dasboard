<?php include "section/header.php" ?>
<?php

if (isset($_SESSION['giris_tamam'])) {
} else {
    header('Location: index.php');
}

if ($_GET['bos'] == "true") {
?>

    <script>
        Swal.fire({
            title: 'Form cannot be empty!',
            text: ' Fill in the form completely !',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    </script>

<?php
} else {
}

?>

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

                <?php

                $uID = $_SESSION['giris_tamam'];

                $bilgilersor = $db->prepare("SELECT * FROM memberinfo WHERE uID = ? ");
                $bilgilersor->execute([$uID]);

                foreach ($bilgilersor as $bilgiler) {
                    $kullanici_adi = $bilgiler['uID'];
                    $mail_adresi = $bilgiler['email'];
                }
                ?>
                <form action="paytr.php" method="POST" class="page_form">
                    <input type="text" name="Kullanici_adi" placeholder="Your User Name" value="<?php echo  $kullanici_adi ?>">
                    <br>
                    <br>
                    <input type="text" name="mail_adres" placeholder="Your Email Address" value="<?php echo $mail_adresi ?>">
                    <br>
                    <br>
                    <input type="text" name="adres" placeholder="Your address">
                    <br>
                    <br>
                    <input type="text" name="phone" maxlength="10" placeholder="555-555-55-55" />
                    <br>
                    <br>
                    <select name="packet" class="select-box">
                        <option value="Paket1" selected>100₺ : - Buy Now 200 gp</option>
                        <option value="Paket2">200₺ : - Buy Now 500 gp</option>
                        <option value="Paket3">500₺ : - Buy Now 1350 gp</option>
                        <option value="Paket4">1000₺ : - Buy Now 2600 gp</option>
                        <option value="Paket5">2000₺ : - Buy Now 5500 gp</option>
                        <option value="Paket6">5000₺ : - Buy Now 14000 gp</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="BUY NOW">
                    <br>
                    <small>
                        The under construction
                    </small>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include "section/footer.php" ?>