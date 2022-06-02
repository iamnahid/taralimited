<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enayetpur Spinning Mills Ltd.</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/spin/ksml.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->


</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <section class="container-fluid" id="profile-body">
        <h1>Enayetpur Spinning Mills Ltd</h1>
        <div class="container-fluid" id="profile">
            <div class="row" id="profile-row">
                <div class="col-md-12" id="img">
                    <div id="imgGallery" class="imgGallery">
                        <div class="dot-matrix"></div>
                        <img id="slideImg" src="assets/imgs/spin/ESML/E.JPG">                        
                        <script src="assets/js/ESML.js"></script>
                    </div>
                </div>               
            </div>

            <div class="row" id="profile-row1">
                <div class="profile-table" id="profile-table">
                    <table class="tabContainer" id="tabContainer">
                        <thead>
                            <tr id="tabContainer-tr">
                                <th><h1>Mills</h1></th>
                                <th><h1>No Of Spindles</h1></th>
                                <th><h1>Factory Area</h1></th>
                                <th><h1>Yearly Production</h1></th>
                                <th><h1>Staffs & Workers</h1></th>
                                <th><h1>Yarn Type</h1></th>
                                <th><h1>Turnover</h1></th>
                                <th><h1>Transportation</h1></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tabContainer-tr">
                                <td rowspan="6">ESML</td>
                                <td rowspan="6">64,080</td>
                                <td rowspan="6">4,12,000 sq.ft</td>
                                <td rowspan="6">67,50,000 KG</td>
                                <td rowspan="6">2,200</td>
                                <td>Export Quality Melange Yarn</td>
                                <td rowspan="6">210,00,00,000</td>
                                <td rowspan="6">9</td>
                            </tr>
                            
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Polyster Yarn</td>
                            </tr>
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Organic Yarn</td>
                            </tr>
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Cotton Yarn</td>
                            </tr>
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">BCI Melange</td>
                            </tr>
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">SLUB Yarn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>

            <div class="row" id="profile-row2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="m1">
                                <h4>Total Production(Tons) Growth Throughout The Years</h4>
                                <script src="./assets/js/amcharts.js"></script>
                                <script src="./assets/js/serial.js"></script>
                                <div id="chartdiv"></div>
                                <script src="./assets/js/ESML_m1.js"></script>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m2" id="m2">
                                <h4>Turn Over of Last 5 Years</h4>
                                <div class="line-chart">
                                    <div class="aspect-ratio">
                                        <canvas id="chart"></canvas>
                                    </div>
                                </div>
                                <script src='assets/js/chart-g2.js'></script>
                                <script src="assets/js/ESML_m2.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="profile-row3">
                <div class="container-fluid" id="address">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="det">
                                    <h1>Where are We?</h1>
                                </div>
                                <br>
                                <div class="loc" id="loc">
                                    <div class="gmap_canvas">
                                        <iframe class="gmap_iframe" id="gmap_canvas" src="https://maps.google.com/maps?q=enayetpur%20Spinning%20Mills%2C%20fatu&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="container-fluid mt-5 p-5" >
                    <div class="row d-flex justify-content-center align-content-center">
                        <div class="col-12 text-center">
                            <p><span>Factory Location: </span>Baktabali Road, Enayetnagar, Fatullah, Naryanganj, 1421</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="upFooterBreak" style="width:100%;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>

    
    <?php require('./essentials/header_scripts.php'); ?>

</body>
</html>