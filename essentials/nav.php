<section class="navSec" id="navSec" style="z-index: 100;">

    <div class="container-fluid" id="nav-whole" style="z-index: 5">
        <div class="row" id="nav" style="z-index: 2;">
            <div class="col-md-3" id="slider" onclick="window.location='./index#home'">
                <div id="slider-box">
                    <div class="slide1" onclick="window.location='./index#home'"></div>
                    <div class="slide2" onclick="window.location='./index#home'"></div>
                    <div class="slide3" onclick="window.location='./index#home'"></div>
                    <div class="slide4" onclick="window.location='./index#home'"></div>
                    <div class="slide5" onclick="window.location='./index#home'"></div>
                </div>
            </div>
            <div class="col-md-9" id="nav-pro">
                <ul id="ulShow">
                    <li><a href="./index">Home</a></li>
                    <li><a href="./index#investSec">Who We Are</a></li>
                    <li><a href="./Manufacturing">Gallery</a></li>
                    <li><a href="./CSR">Csr & Events</a></li>
                    <li><a href="./Contact"><i class="fas fa-user"></i></a></li>
                </ul>
                <!-- <ul id="nav-menu">
                    <li onclick='navShow()'><a onclick='navShow()' href="#"><i class="fas fa-bars" onclick='navShow()'></i></a></li>
                </ul> -->
                <script type="text/javascript">
                    function navShow() {
                        var x = document.getElementById('ulShow');
                        var y = document.getElementById('nav-menu');
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>

        <div class="stars" id="stars" class="z-index: 1;">
            <script src='assets/js/twinmax.js'></script>
            <script src='assets/js/stars.js'></script>
        </div>
    </div>

</section>