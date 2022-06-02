<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tara Spinning Mills Ltd.</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/spin/tsml.css?ver=56.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

    <?php require('./essentials/header_scripts.php'); ?>

</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <section class="container-fluid" id="profile-body">
        <h1>Tara Spinning Mills Ltd</h1>
        <div class="container-fluid" id="profile">
            <div class="row align-content-center" id="profile-row">                
                <div class="col-md-6" id="md_sec">
                    <div id="md_img">
                        <img src="assets/imgs/BOD/MDSIR.jpg" alt="">
                    </div>
                    <br>
                    <div id="md_img_caption">
                        <h3>Md. Sadekur Rahman Monir</h3>
                        <h5>Managing Director</h5>
                    </div>
                </div>    
                <div class="col-md-6" id="mdPara">
                    <h2>Our Managing Director</h2>
                    <div class="pl-3 pr-3 pt-3 text-white text-justify">
                        <span class="font-weight-bold" style="color: #ab9257;font-size: 1.2em; font-family: 'Alegreya Sans SC', sans-serif;">Md. Sadekur Rahman Monir</span> is the Managing Director of:
                        <ul class="pl-5 pt-3" style="letter-spacing: 1px;font-family: 'Alegreya Sans SC', sans-serif;">
                            <li>Tara Spinning Mills Ltd.</li>
                            <li>Naquib Spinning Mills Ltd.</li>
                            <li>ABC International School</li>
                        </ul>    
                        He completed his Honors & Master's from DU. He is one of the individuals, who led the path in Garment's sector. In various kinds of social activities, his footsteps are uncountable. To conclude, he is also the founder of <span class="font-weight-bold text-uppercase" style="color: #ab9257;">Firoz Knitting</span>.
                    </div>
                </div>            
            </div>
            <div class="row" id="profile-row1">
                <div class="profile-table" id="profile-table">
                    <table class="tabContainer" id="tabContainer">
                        <thead>
                            <tr id="tabContainer-tr">
                                <th><h1>Mill</h1></th>
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
                                <td rowspan="8">TSML</td>
                                <td rowspan="8">63,160</td>
                                <td rowspan="8">4,75,000 sq.ft</td>
                                <td rowspan="8">67,50,000 KG</td>
                                <td rowspan="8">2,200</td>
                                <td>Export Quality Melange Yarn</td>
                                <td rowspan="8">210,00,00,000</td>
                                <td rowspan="8">12</td>
                            </tr>
                            
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Polyster Yarn</td>
                            </tr>
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Compact Yarn</td>
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
                            <tr id="tabContainer-tr">
                                <td style="font-weight: normal;">Rotor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" id="profile-row2">
                <div class="container-fluid" id="m-profile">
                    <div class="row" id="m-row">
                        <div class="col-md-6" id="m-col">
                            <div class="m1">
                                <h4>Total Production(Tons) Growth Throughout The Years</h4>
                                <script src="./assets/js/amcharts.js"></script>
                                <script src="./assets/js/serial.js"></script>
                                <div id="chartdiv"></div>
                                <script src="./assets/js/TSML_m1.js"></script>
                            </div>
                        </div>
                        <div class="col-md-6" id="m-col">
                            <div class="m2" id="m2">
                                <h4>Turn Over of Last 5 Years</h4>
                                <div class="line-chart">
                                    <div class="aspect-ratio">
                                        <canvas id="chart"></canvas>
                                    </div>
                                </div>
                                <script src='assets/js/chart-g2.js'></script>
                                <script src="assets/js/TSML_m2.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="profile-row3">
                <div class="container-fluid mb-5" id="address">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="det">
                                    <h1>Where are We?</h1>
                                </div>
                                <br>
                                <div class="loc" id="loc">
                                    <div class="gmap_canvas">
                                        <iframe class="gmap_iframe" id="gmap_canvas" src="https://maps.google.com/maps?q=Tara%20Spinning%20Mills%2C%20fatu&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="container-fluid" >
                    <div class="row d-flex justify-content-center align-content-center">
                        <div class="col-12 text-center">
                            <p><span>Factory Location: </span>Nobinagar, Enayetnagar, Fatullah, Naryanganj, 1421</p>
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

</body>
</html>