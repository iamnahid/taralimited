<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSR & Events</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/csr.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>
    
    <!-- CSR Section -->

    <section class="csrSec" id="csrSec">
        <div class="container-fluid" id="csr-container">
            <div class="row" id="csr-title">
                <div class="col-md-12" id="csr-title-col">
                    <div class="title">
                        <h1>Csr & Events</h1>
                    </div>
                </div>
            </div>
            <div class="row" id="csr-gallery">
                <div class="col-md-12">
                    <div id="imgGallery" class="imgGallery">
                        <div class="dot-matrix"></div>
                        <img id="slideImg" src="assets/imgs/CSR/TARA1.jpg" alt="">
                        <script src="assets/js/csr.js"></script>
                    </div>
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