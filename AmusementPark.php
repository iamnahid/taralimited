<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Amusement Park </title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/amuse.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->


</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>


    <!-- --------------SECTION-------------------- -->
    <section class="cons-container1">
        <h1> The Green Air Amusement Park</h1>
        <div class="cons-header1" id="cons-header1">
            <img src="assets/imgs/common/greenair.webp" alt="The Green Air Amusement Park">
        </div>
        <div id="cons-container-text">            
            <p id="parkTitle">Bangladesh Air Force Museum (Green Air Amusement Park)</p>
            <!-- <p>Address: BAF Base Bashar, Dhaka, Bangladesh. Opposite of IDB Bhaban.</p> -->
        </div>
    </section>


    <section id="upFooterBreak" style="width:100%;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>

    
    <?php require('./essentials/header_scripts.php'); ?>

</body>
</html>