<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Development</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/const.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->


</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>


    <!-- --------------SECTION-------------------- -->
    <section class="cons-container">
        <div class="cons-header" id="cons-header">
            <img src="assets/imgs/common/cons.png" alt="Tara under Construction">
        </div>
    </section>


    <section style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>


    <?php require('./essentials/header_scripts.php'); ?>

</body>
</html>