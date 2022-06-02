<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Spinning Section</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/spin.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section id="upNavBreak" style="width:100%;background-color: rgba(0, 0, 0, 0);"></section>
    
    
    <section class="spinSec" id="spinSec" style="z-index: 0;">
        <div class="container-fluid" id="spin-body">
            <h1>Our Advancement in Spinning Sector</h1>
            <div class="row justify-content-center align-content-center" id="spin-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3"  id="wrapCol">
                    <div class="wrapCol" id="KSML" onclick="window.location='./Korotoya_fibers_mills'">
                        <div class="image-container text-center p-2">
                            <img onclick="window.location='./Korotoya_fibers_mills'" src="./assets/imgs/spin/KSML.png" alt="">      
                            <h5 class="text-white pt-4 pb-5">Since: 1995</h5>                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" id="wrapCol">
                    <div class="wrapCol" id="ESML" onclick="window.location='./Enaytpur_mills'">
                        <div class="image-container text-center p-2">
                            <img onclick="window.location='./Enaytpur_mills'" src="./assets/imgs/spin/ESML.png" alt="">    
                            <h5 class="text-white pt-4 pb-5">Since: 1999</h5>                             
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" id="wrapCol">
                    <div class="wrapCol" id="TSML" onclick="window.location='./Tara_companyprofile'">
                        <div class="image-container text-center p-2">
                            <img onclick="window.location='./Tara_companyprofile'" src="./assets/imgs/spin/TSML.png" alt="">
                            <h5 class="text-white pt-5 pb-5">Since: 2003</h5>     
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" id="wrapCol">
                    <div class="wrapCol" id="KGSML" onclick="window.location='./Karotoa_Green_Spinning'">
                        <div class="image-container text-center p-2">
                            <img onclick="window.location='./Karotoa_Green_Spinning'" src="./assets/imgs/spin/KGSML.png" alt="">  
                            <h5 class="text-white pt-4 pb-5">Since: 2021</h5>     
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="upFooterBreak" style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>

    
    <?php require('./essentials/header_scripts.php'); ?>


</body>
</html>