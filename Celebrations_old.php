<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Celebrations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Title Image -->
    <link rel="shortcut icon" href="assets/imgs/common/logo_thumb.png" type="image/x-icon">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">

    
    <link rel="shortcut icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
    <link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
    <link rel="apple-touch-icon-precomposed" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Bungee+Outline&family=Lancelot&family=Macondo+Swash+Caps&family=Tourney&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/celebrations/style.css">
    <link rel="stylesheet" href="./assets/css/celebrations/textanimate1.css">
    <link rel="stylesheet" href="./assets/css/celebrations/custom.css">

</head>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'>
    <script  src="./assets/js/textAnimate.js"></script>

<body>
    <div class="container">
        <div class="loading-init">
            <div class="loading-init__header">Loading</div>
            <div class="loading-init__status"></div>
        </div>
        <div class="stage-container remove">
            <div class="canvas-container">
                <canvas id="trails-canvas"></canvas>
                <canvas id="main-canvas"></canvas>
            </div>
            <div class="controls" id="texts">
                <div id="text-container">
                    <h1 class="gradient-header" id="title-header">~ Happy BirthDay ~</h1>
                    <div id="img-sec">
                        <img id="main-img" src="./assets/imgs/BOD/MdAbdulAhadAkil.jpg" alt="">
                    </div>
                    <div class="typed_wrap">
                        <h2 class="gradient-header" id="title-body">Our Honourable</h2>
                        <h2><span class="typed"></span></h2>
                    </div>
                    <h1 class="gradient-heading">Md. Abdul Ahad Akil</h1>
                </div>
            </div>
            <div class="menu hide">
                <div class="menu__inner-wrap">
                    <div class="btn btn--bright close-menu-btn">
                        <svg fill="white" width="24" height="24"><use href="#icon-close" xlink:href="#icon-close"></use></svg>
                    </div>
                    <div class="menu__header">Settings</div>
                    <div class="menu__subheader">For more info, click any label.</div>
                    <form>
                        <div class="form-option form-option--select">
                            <label class="shell-type-label">Shell Type</label>
                            <select class="shell-type"></select>
                        </div>
                        <div class="form-option form-option--select">
                            <label class="shell-size-label">Shell Size</label>
                            <select class="shell-size"></select>
                        </div>
                        <div class="form-option form-option--select">
                            <label class="quality-ui-label">Quality</label>
                            <select class="quality-ui"></select>
                        </div>
                        <div class="form-option form-option--select">
                            <label class="sky-lighting-label">Sky Lighting</label>
                            <select class="sky-lighting"></select>
                        </div>
                        <div class="form-option form-option--select">
                            <label class="scaleFactor-label">Scale</label>
                            <select class="scaleFactor"></select>
                        </div>
                        <div class="form-option form-option--checkbox">
                            <label class="auto-launch-label">Auto Fire</label>
                            <input class="auto-launch" type="checkbox" />
                        </div>
                        <div class="form-option form-option--checkbox form-option--finale-mode">
                            <label class="finale-mode-label">Finale Mode</label>
                            <input class="finale-mode" type="checkbox" />
                        </div>
                        <div class="form-option form-option--checkbox">
                            <label class="hide-controls-label">Hide Controls</label>
                            <input class="hide-controls" type="checkbox" />
                        </div>
                        <div class="form-option form-option--checkbox form-option--fullscreen">
                            <label class="fullscreen-label">Fullscreen</label>
                            <input class="fullscreen" type="checkbox" />
                        </div>
                        <div class="form-option form-option--checkbox">
                            <label class="long-exposure-label">Open Shutter</label>
                            <input class="long-exposure" type="checkbox" />
                        </div>
                    </form>
                    <div class="credits">
                        Passionately built by <a href="https://cmiller.tech/" target="_blank">Caleb Miller</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="help-modal">
            <div class="help-modal__overlay"></div>
            <div class="help-modal__dialog">
                <div class="help-modal__header"></div>
                <div class="help-modal__body"></div>
                <button type="button" class="help-modal__close-btn">Close</button>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/fscreen%401.0.1.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/Stage%400.1.4.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/MyMath.js'></script>
    <script  src="./assets/js/celebrations.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>
    <script  src="./assets/js/textAnimate.js"></script>
    

</body>
</html>
