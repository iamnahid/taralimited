<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturing Process</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/manf.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

</head>

<script src="assets/js/modalScripts.js"></script>

<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>


    <section class="manuSlide-Sec" id="manuSlide-Sec" >
        <h1  style="z-index:1;">Manufacturing Process</h1>
        <div class="container-fluid" id="manf-bod"  style="z-index:1;">
            <div class="row" id="manf-row">
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Cotton.JPG" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Blowroom-1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Curding-1.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Curding-2.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara AutoLeveler-1.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Simplex-1.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Simplex-2.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Ring-1.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara AutoCone-1.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara AutoCone-2.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Melange Yarn.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Roster.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Generator.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
                </div>
                <div class="col-md-2" id="manf-col">
                    <img src="assets/imgs/manu/Tara Transport.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
                </div>
            </div>
        </div>
        <div class="container-fluid" id="modalBody"  style="z-index:3;">
            <!-- <span class="close" id="close" style="z-index:5;">
                <i class="fas fa-times-circle" ></i>
            </span> -->
            
            <div class="row" id="myModal" onkeydown="changeImage()">
                
                <div class="modal-content" id="modal-content" style="z-index:2;">
                    <i class="fas fa-times-circle" id="close" onclick="closeModal()" ></i>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">1/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Cotton.JPG" style="width:100%" alt="Cotton" onclick="currentSlide(1)">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">2/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Blowroom-1.jpg" style="width:100%" onclick="currentSlide(2)"  alt="Blowroom">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">3/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Curding-1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Carding">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">4/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Curding-2.jpg" style="width:100%" onclick="currentSlide(4)" alt="Carding">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">5/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara AutoLeveler-1.jpg" style="width:100%" onclick="currentSlide(5)" alt="Draw Frame">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">6/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Simplex-1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Simplex">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">7/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Simplex-2.jpg" style="width:100%" onclick="currentSlide(7)" alt="Simplex">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">8/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic"  src="assets/imgs/manu/Tara Ring-1.jpg" style="width:100%" onclick="currentSlide(8)" alt="Ring Frame">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">9/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara AutoCone-1.jpg" style="width:100%" onclick="currentSlide(9)" alt="Auto Coner">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">10/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara AutoCone-2.jpg" style="width:100%" onclick="currentSlide(10)" alt="Auto Coner">>
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">11/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Melange Yarn.jpg" style="width:100%" onclick="currentSlide(11)" alt="Finished Yarn">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">12/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Roster.jpg" style="width:100%" onclick="currentSlide(12)" alt="Uster">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">13/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Generator.jpg" style="width:100%" onclick="currentSlide(13)" alt="Generator">
                    </div>
                    <div class="mySlides" id="mySlides">
                        <div class="numbertext">14/ 14</div>
                        <div class="dot-matrix"></div>
                        <img class="sliPic" src="assets/imgs/manu/Tara Transport.jpg" style="width:100%" onclick="currentSlide(14)" alt="Transportation">
                    </div>
                    <span class="prev" id="prev" onclick="plusSlides(-1)">
                        <i class="fas fa-arrow-circle-left"></i>
                    </span>
                    <span class="next" id="next" onclick="plusSlides(1)">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>

                    <div class="col-class">
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(1)" alt="Cotton">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(2)" alt="Blowroom">
                        </div>
                        <div class="column1">
                            <img class="demo cursor"  style="width:100%" onclick="currentSlide(3)" alt="Carding">
                        </div>
                        <div class="column1">
                            <img class="demo cursor"  style="width:100%" onclick="currentSlide(4)" alt="Carding">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(5)" alt="Draw Frame">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(6)" alt="Simplex">
                        </div>
                        <div class="column1">
                            <img class="demo cursor"  style="width:100%" onclick="currentSlide(7)" alt="Simplex">
                        </div>
                        <div class="column1">
                            <img class="demo cursor"  style="width:100%" onclick="currentSlide(8)" alt="Ring Frame">
                        </div>
                        <div class="column1">
                            <img class="demo cursor"  style="width:100%" onclick="currentSlide(9)" alt="Auto Coner">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(10)" alt="Auto Coner">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(11)" alt="Finished Yarn">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(12)" alt="Uster">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(13)" alt="Generator">
                        </div>
                        <div class="column1">
                            <img class="demo cursor" style="width:100%" onclick="currentSlide(14)" alt="Transportation">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="caption-row">
                <div id="caption-container" style="z-index:1;">
                    <p id="caption"></p>
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