<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/index.css?ver=56.0">
    <link type="text/css" rel="stylesheet" href="assets/css/essentials/sidebar.css?ver=56.0">

    
    <?php include('./essentials/header_scripts.php'); ?>

</head>
<script>
    $(document).ready(function()
    {
        $('#partner_details').hide();

        $('#partnersButton').click(function()
        {
            $('#partner_details').toggle(1000);
        });

        $('[data-toggle="tooltip"]').tooltip();

        // Initialize popover component
        $('[data-toggle="popover"]').popover();
        

        $('.popover-dismiss').popover({
            trigger: 'focus'
        })
    })
</script>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <!-- HOME SECTION -->
    <section class="homeSec"><div style="width:100%;height:80px;background-color: rgba(0, 0, 0, 0);overflow: hidden;"></div>
        <div class="container-fluid p-0" id="sidebar">
            <div class="row p-0" id="sidebar_row">
                <div class="col-lg-12" id="sidebar_col">
                    <div class="side-menu">
                        <ul>
                            <li style="color: lightgreen;text-shadow: 0 0 10px lightgreen"><a style="text-decoration: none !important; " href="./Sustainability"><i class="fab fa-envira" style="color: lightgreen;text-shadow: 0 0 10px lightgreen"></i><span>Sustainability</span></a></li>
                            <li style="color: #fff;text-shadow: 0 0 10px #ab9257" ><a style="text-decoration: none !important;" href="./Construction"><i class="fas fa-marker" style="color: #fff;text-shadow: 0 0 10px #ab9257" ></i><span>Career</span></a></li>
                        </ul>
                    </div>
                    <!-- <div id="side_body">
                        <div class="dotstyle dotstyle-tooltip">
                            <ul class="text-center justify-content-end text-right">
                                <li class="justify-content-end text-right">
                                    <a href="#">Sustainibility</a>
                                </li>
                                <li class="justify-content-end text-right">
                                    <a href="#">Career</a>
                                </li>
                            </ul>
                        </div>
                    </div>  -->
                    
                </div>
            </div>
        </div>
        
        <div class="carousel slide" data-ride="carousel" id="demo" >
            
            <!-- The slideshow -->
            <div class="carousel-inner" id="carousel-inner">
                <div class="carousel-item active" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/1.jpg" alt="TARA CORPORATE HEADQUARTERS">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/2.jpg"  alt="KAROTOA SPINNING MILLS LTD.">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/teresa.jpg" alt="INTERNATIONAL MOTHER TERESA AWARD">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/3.jpg" alt="EXCELLENCY AWARD">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/4.jpg" alt="EXCELLENCY AWARD EVENT">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/5.jpg" alt="THE GREEN AIR AMUSEMENT PARK AWARD EVENT">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/6.jpg" alt="TARA CORPORATE HEADQUARTERS">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/7.webp" alt="LEND">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
                <div class="carousel-item" id="carousel-item" alt="GATAIL GOLF CLUB EVENT">
                    <div id="dot"></div>
                    <img src="./assets/imgs/carousel_images/8.jpg">
                    <div id="carousel_caption">
                        <a href="./Celebrations">
                            <button id="partnersButton1" class="celebrations"><p>Celebrations</p></button>
                        <!-- <button id="celebration_button"><p>Celebrations</p></button> -->
                        </a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        
    </section>

    <section style="width:100%;height:80px;background-color: rgba(0, 0, 0, 0);"></section>

    <section style="width:100%;height:80px;background-color: rgba(0, 0, 0, 0);"></section>


    <!-- ---------------------------------------INVESTMENT SECTION--------------------------- -->

    <section class="investSec" id="investSec">
        <br>
        <div class="intro" >
            <h1 style="text-align: center;color: #ab9257;">Who We Are</h1>
            <p>         Tara Limited is involved in Spinning Sector, The Fashion Industry, Power Generation Plant, Amusement Park, Educational Institutions and various social activities. We have started our first spinning in 1991. Quality Product, Strong Commitment and Determination in our work, We have made a remarkable stance in spinning sector of Bangladesh.</p>
        </div>
        
        <div class="invTitle" id="invest">
            <h1 style="text-align: center;color: #ab9257;">Our Investments</h1><br>
        </div>

        <div class="investGrid" id="investGrid">
            <div class="container-fluid" id="inv_grids">
                <div class="row" id="inv_rows">
                    <div class="col-md-4 mb-2">
                        <div  id="amuseId" class="container" onclick="window.location='Construction'">
                            <img src="assets/imgs/invest/amuse.png" alt="">
                            <a class="amuseHide" href="AmusementPark">Amusement Park</a>
                            <a class="green"  href="AmusementPark">The Green Air Amusement Park Ltd.</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div  id="fashionId" class="container" onclick="window.location='https://lend.com.bd/'">
                            <img class="fImg" src="assets/imgs/invest/fashion.png" alt="">
                            <a class="fLink" id="fLink" href="https://lend.com.bd/">Fashion</a>
                            <img class="lImg" src="assets/imgs/invest/lend.png" alt="lend.com.bd">
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div  id="nonProId" class="container" onclick="window.location='https://www.facebook.com/ABCIS.Office/'">
                            <img src="assets/imgs/invest/non.png" alt="">
                            <a class="npoLink" id="npoLink" href="https://www.facebook.com/ABCIS.Office/">Non Profit Organization</a>
                            <a class="ABC"  href="https://www.facebook.com/ABCIS.Office/">ABC International School</a>
                        </div>
                    </div>
                </div>
                <div class="row" id="inv_rows1">
                    <div class="col-md-6 col-lg-6 mb-2">
                        <div id="spin" class="container1" onclick="window.location='./Spin'">
                            <img src="assets/imgs/invest/spin.png" alt="">
                            <a href="./Spin">Spinning</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-2">
                        <div id="textile" class="container1" onclick="window.location='./Karotoa_Green_Spinning'">
                            <img src="assets/imgs/invest/textile2.png" alt="">
                            <a href="./Karotoa_Green_Spinning">Karotoa Green Spinning</a>
                        </div>
                    </div>
                </div>
                <div class="row" id="inv_rows">
                    <div class="col-md-4 mb-2">
                        <div  id="powerId"  class="container" onclick="window.location='./Construction'">
                            <img src="assets/imgs/invest/IT.png" alt="">
                            <a href="./Construction">IT</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2" >
                        <div  id="resort" class="container" onclick="window.location='./Resort'">
                            <img src="assets/imgs/invest/res.png" alt="">
                            <a href="./Resort">Resort</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div  id="agroId" class="container" onclick="window.location='./RangersRanch'">
                            <img src="assets/imgs/invest/agro.png" alt="">
                            <a href="./RangersRanch">Agro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="break" id="aSec_break" style="width:100%;height:10em;background-color: rgba(0, 0, 0, 0);"></section>
    <!-- ---------------------------------------ABOUT SECTION--------------------------- -->

    <section class="a-Sec" id="a-Sec">
        <br><div class="his-title"><h1>History</h1></div><br>
        <div class="container-fluid" id="his-body">
            <div class="row">
                <div class="col-md-6 pt-5 justify-content-center">
                    <div>
                        <div class="cmImg" id="cmImg">
                            <img src="assets/imgs/BOD/Md_AbdulBaten.jpg" alt="Md.Abdul Baten">
                        </div><br>
                        <div class="caption justify-content-center">                
                            <h3 class="justify-content-center text-center">
                                Md. Abdul Baten
                            </h3>
                            <h6>                
                                Masters in Marketing (DU)
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div id="cmText" class="cmText">
                            <p>
                                <span id="bigFont">T</span>he story began after the liberation war in 1971. He started his career as a professor. At the same time, he used to work in a spinning mills as an employee. Henceforth, he started off a trading business with only 50 kg yarn. In 1992, he led off Shohagpur Textile Mills Ltd as a director. In 1996, he commenced Karotoa Spinning Mills Ltd, later in 1998, he established Enayetpur Spinning Mills Ltd and in 2004, he inaugurated Tara Spinning Mills Ltd. Now he is administering the RMG sector, fashion industry, amusement park and various social activities like school, college and university.
                            </p><br>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="break" style="max-width:100%;height:180px;background-color: rgba(0, 0, 0, 0);"></section>

    <!-- -------------OVERVIEW------------------- -->
    <section class="overviewSec" id="overviewSec">
        <div class="overTitle">
            <h1>At A Glance</h1>
        </div>    
        <br>
        <div class="container-fluid mb-5" id="over-section">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <table class="tabContainer" id="tabContainer">
                        <tr>
                            <th>No Of Spindles</th>
                            <td>1,95,000</td>
                        </tr>
                        <tr>
                            <th>Yearly Production</th>
                            <td>20,574,000 KG per Year</td>
                        </tr>
                        <tr>
                            <th>Annual Turnover</th>
                            <td>$120 Million <label>(One Thousand Two Hundred Crore Taka)</label></td>
                        </tr>
                        <tr>
                            <th>Staffs & Workers Turnover</th>
                            <td>6500</td>
                        </tr>
                        <tr>
                            <th>Factory Area</th>
                            <td>12,47,000 SQ.Ft</span></td>
                        </tr>
                        <tr>
                            <th>Transportation</th>
                            <td>25 Covered Vans</td>
                        </tr>
                        <tr>
                            <th rowspan="7">Yarn Type</th>
                            <td style="color: #caa857;">Export Quality Melange Yarn</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality Organic Melange Yarn</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality Combed Cotton Yarn</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality Cotton Yarn</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality BCI Melange</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality SLUB Melange Yarn</td>
                        </tr>
                        <tr>
                            <td style="font-weight: normal;">Export Quality Rotor Yarn</td>
                        </tr>
                        <tr>
                            <th>Trees</th>
                            <td>1 Million</td>
                        </tr>
                        <tr>
                            <th>Number of Customers</th>
                            <td>850</td>
                        </tr>
                        <tr>
                            <th>Mobile Payment</th>
                            <td>60%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br><br>
            <div class="row justify-content-center mt-5 mb-5">
                
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 justify-content-center text-center">
                    <button id="partnersButton" class="mb-5"><p>Our Partners</p><span id="click-me"><i class="fas fa-arrow-circle-up"></i> Click Here</span></button>
                    <div class="container-fluid mt-5" id="partner_details">
                        <div class="row justify-content-start text-left">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mb-5 text-left">
                                <h2 style="color: #ab9257; border-bottom: 2px solid #ab9257;">Banking Partners</h2>
                            </div>
                            <div class="container-fluid">
                                <div class="row d-flex justify-content-center align-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                                        <table class="tabContainer" id="tabContainer">
                                            <tr>
                                                <td>Islami Bank Bangladesh Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Standard Chartered Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Shahjalal Islami Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Dutch Bangla Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>South East Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Eastern Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Dhaka Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Dhaka Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>Bank Asia Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>One Bank Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td>HSBC</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- <div class="row justify-content-center text-center mb-5">
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Standard Chartered Bank Ltd.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Shahjalal Islami Bank Ltd.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Dutch Bangla Bank Ltd.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center mb-5">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>South East Bank Ltd.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Eastern Bank Ltd.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Dhaka Bank Ltd.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center mb-3">
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>Bank Asia Ltd.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>One Bank Ltd.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 partner-name ml-3 mb-3">
                                        <p>HSBC</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-5 mb-5">
                <div class="col-md-12" id="g2">
                    <p>Customer Growth Throughout the years</p> <br> <br>
                    <div class="line-chart" id="line">
                        <div class="aspect-ratio">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>

                    <script src="assets/js/chart-g2.js"></script>
                    <script src="assets/js/displayChartGraph.js"></script>
                    
                </div>
            </div>
        </div>
        <br>
    </section> 
    <section class="break" style="max-width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <!-- ---------------------------------- BOD ------------------------- -->
    <section class="tLtd pt-5 pb-5" id="tLtd">
        <h1>Board of Directors</h1>
        <div class="container-fluid mt-5 border-0 p-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg1" src="./assets/imgs/BOD/MdAbdulBaten.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">                          
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="MD. ABDUL BATEN"
                                    data-content="The story began after the liberation war in 1971. He started his career as a professor. At the same time, he used to work in a spinning mills as an employee. Henceforth, he started off a trading business with only 50 kg yarn. In 1992, he led off Shohagpur Textile Mills Ltd as a director. In 1996, he commenced Karotoa Spinning Mills Ltd, later in 1998, he established Enayetpur Spinning Mills Ltd and in 2004, he inaugurated Tara Spinning Mills Ltd. Now he is administering the RMG sector, fashion industry, amusement park and various social activities like school, college and university."
                                >
                                Md. Abdul Baten
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Managing Director</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                            <p class="bodCompany">Enayetpur Spinning Mills Ltd</p>
                            <h5 class="bodDesignation">Chairman </h5>
                            <p class="bodCompany">Tara Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg1"  src="./assets/imgs/BOD/MdAbdulAhadAkil.jpg" alt="Md. Abdul Ahad Akil">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">
                                <a id="aaa" href="https://akilahad.com">Md. Abdul Ahad Akil</a>
                            </h3>
                            <h5 class="bodDesignation">Chairman</h5>
                            <p class="bodCompany">TARA Limited</p>
                            <h5 class="bodDesignation">CEO & Director</h5>
                            <p class="bodCompany">Karotoa Green Spinning Mills Ltd.</p>
                            <h5 class="bodDesignation">Director</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                            <h5 class="bodDesignation">Deputy Managing Director</h5>
                            <p class="bodCompany">Enayetpur Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg1" src="./assets/imgs/BOD/woman.png" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">Begum Hosneara</h3>
                            <h5 class="bodDesignation">Chairman</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center" id="tlChairman">
                <div class="col-md-12 justify-content-center text-center" style="position: relative;width: 100%; height: 100%;">
                    <div class="row justify-content-center text-center" id="tlImgRow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-5 pb-5 justify-content-center text-center" style="overflow: hidden;text-align: center;">
                            <img class="bodImg justify-content-center text-center" id="tlImg" src="./assets/imgs/BOD/MdAbdulAhadAkil.jpg" alt="Md. Abdul Ahad Akil">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center" id="tlDetRow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName" style="font-weight: normal; letter-spacing: 3px;font-size: 2.5em;">Md. Abdul Ahad Akil</h3>
                            <h5 class="bodDesignation">Chairman</h5>
                            <p class="bodCompany">TARA Limited</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row d-flex justify-content-around align-content-center">
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg" src="./assets/imgs/BOD/MdSadekMonir_ TaraSpinning.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                            
                            <h3 class="bodName">
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="MD. SADEKUR RAHMAN MONIR"
                                    data-content="He completed his Honors & Master's from DU. He is one of the individuals, who led the path in Garment's sector. In various kinds of social activities, his footsteps are uncountable. To conclude, he is also the founder of Firoz Knitting."
                                >
                                    Md. Sadekur Rahman Monir
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Managing Director</h5>
                            <p class="bodCompany">Tara Spinning Mills Ltd.</p>
                            <p class="bodCompany">Naquib Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg" src="./assets/imgs/BOD/KhadizaMonir_TaraSpinning.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">                                
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="KHADIZA SADEK"
                                    data-content="She completed her Honors & Master's  from DU. In addition, She was also a lecturer of Royal University. Furthermore, She is one of the ex-vice principals of ABC International School."
                                >
                                    Khadiza Sadek
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Director</h5>
                            <p class="bodCompany">Tara Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg" src="./assets/imgs/BOD/ZamilaAhmed_KarotoaSpinning.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="ZAMILA AHMED"
                                    data-content="She completed her Honors & Master's from DU. She is the founder of ZN Enterprise."
                                >
                                Zamila Ahmed
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Director</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg" src="./assets/imgs/BOD/ArifaAfrin_KarotoaSpinning.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bodName">
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="ARIFA AFRIN"
                                    data-content="She completed her graduation from AIUB. She is the founder of Ameerah Enterprise."
                                >
                                Arifa Afrin
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Director</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 justify-content-center text-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rounded-pill p-3 pt-5" style="overflow: hidden;">
                            <img class="bodImg" src="./assets/imgs/BOD/AyeshaSiddika_KarotoaSpinning.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                   
                            <h3 class="bodName">
                                <a
                                    tabindex="0"
                                    class="text-center"
                                    role="button"
                                    data-placement="bottom"
                                    data-toggle="popover"
                                    data-trigger="focus"
                                    title="AYESHA SIDDIKA"
                                    data-content="She completed her graduation from North South University. Now she works with the NZ TEX Group."
                                >
                                Ayesha Siddika
                                </a>
                            </h3>
                            <h5 class="bodDesignation">Director</h5>
                            <p class="bodCompany">Karotoa Spinning Mills Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="break" style="max-width:100%;height:180px;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>

    
    <?php include('./essentials/header_scripts.php'); ?>
</body>
</html>