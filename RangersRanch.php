<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro | Ranger’s Ranch</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/csr.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

</head>
<style>
@media (min-width:320px){

    #csrSec{
        height: 70em;
    }
    .details{
        position: relative;
        left: 17.5% !important;
        top: 0 !important;
        width: 80%;
        height: 100%;
        text-align: center;
    }
    
    .agro_gallery{
        top: 30% !important;
    }
    .agro-social{
        text-decoration: none;
        text-transform: uppercase;
        color: #ab9257;
        font-weight: bold;
        letter-spacing: 2px;
        border-bottom: 2px solid #ab9257;
        cursor: pointer;
    }
    .agro-social-col{
        position: relative;
        margin-top: 20px !important;
    }

}

@media (min-width:481px) {
    
    #csrSec{
        height: 70em;
    }
    .details{
        position: relative;
        left: 12.5% !important;
        top: 0 !important;
        width: 85%;
        height: 100%;
        text-align: center;
    }
    
    .agro_gallery{
        top: 20% !important;
    }
    .agro-social{
        text-decoration: none;
        text-transform: uppercase;
        color: #ab9257;
        font-weight: bold;
        letter-spacing: 2px;
        border-bottom: 2px solid #ab9257;
        cursor: pointer;
    }
    .agro-social-col{
        position: relative;
        margin-top: 20px !important;
    }
}

@media (min-width:641px){
    #csrSec{
        height: 60em;
    }
    .agro_gallery{
        top: 10% !important;
    }
}

@media (min-width:961px){
    .agro_gallery{
        top: 5% !important;
    }
    .agro-social-col{
        position: relative;
        margin-top: 60px !important;
    }
}

@media (min-width:1025px){
    
    #csrSec{
        height: 60em;
    }
}

@media (min-width:1281px){
    
    #csrSec{
        height: 60em;
    }
}
</style>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>
    
    <!-- CSR Section -->

    <section class="csrSec" id="csrSec">
        <div class="container-fluid" id="csr-container">
            <div class="row d-flex justify-content-center align-content-center text-center" id="csr-title">
                <div class="col-sm-12 col-md-12 col-lg-10 text-center" id="csr-title-col">
                    <div class="title">
                        <h1>Ranger’s Ranch</h1>
                    </div>
                    <div class="pt-1 details">
                        <p class="text-justify">
                            Ranger’s Ranch is a quality agro product-based farm in BD. At present, we have been raising more than
                            150 cows in our own 10 acres of area behind TSML in Narayanganj near Baktabali Ferryghat. We sell
                            organic meat, milk and cows all around the year. Our cows’ milk is completely organic &amp; no chemicals
                            are added to the milk. None of our cows are given any illicit steroids or growth hormones.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-5 agro_gallery" id="csr-gallery">
                <div class="col-md-12 pt-5">
                    <div id="imgGallery" class="imgGallery">
                        <div class="dot-matrix"></div>
                        <img id="slideImg" src="assets/imgs/agro/RR (2).webp" alt="Ranger's Ranch">
                        <script src="assets/js/agro.js"></script>
                    </div>
                </div>
            </div>
            <div class="row pt-5 d-flex justify-content-center align-content-center">
                <div class="col-sm-12 col-md-8 col-lg-8 pt-5 agro-social-col">
                    <p class="p-5">
                        <a class="agro-social" href="https://www.facebook.com/Rangers-Ranch-107772001547692/">Visit Our Facebook Page</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
        
    
    
    
    <section  id="upFooterBreak" style="width:100%;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>

    

    <?php require('./essentials/header_scripts.php'); ?>

</body>
</html>