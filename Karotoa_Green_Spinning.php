<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karotoa Green Spinning Mills Ltd.</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/const.css?ver=55.0">
    <link type="text/css" rel="stylesheet" href="assets/css/kgsml.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->


</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>


    <!-- --------------SECTION-------------------- -->
    <div id="KGSML-section">
        <section class="container-fluid mt-5 pt-3" id="KGSML-body">
            <div class="row d-flex justify-content-center align-content-center mt-5" id="KGSML-row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="wrapCol">
                    <h1 class="KGSML-title">Karotoa Green Spinning Mills Ltd. </h1>
                    <div class="text-center mt-5" id="KGSML-pic">
                        <img onclick="window.location='./Karotoa_Green_Spinning'" src="./assets/imgs/spin/KGSML.png" alt="Karotoa Green Spinning Mills Ltd.">
                    </div>
                    <div class="mt-5" id="KGSML-caption">
                        <h5>Address</h5>
                        <p>Corporate Headquarters: 311, Progoti Shoroni, Vatara, Baridhara, Dhaka-1229.</p>
                        <br>
                        <h5>Factory Address</h5>
                        <p>Vill.- North Laskarchala,  P.O- Haturiachala, P.S.- Kaliakair Dist- Gazipur, Bangladesh</p>
                        <br>
                        <h5>Contact</h5>
                        <p>+8801716257652</p>
                    </div>
                </div> 
                
            </div>
        </section>
    </div>


    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>


    <?php require('./essentials/header_scripts.php'); ?>
</body>
</html>