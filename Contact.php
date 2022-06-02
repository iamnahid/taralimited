<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/cont.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <!-- Contact Section -->
    <div class="contSec" id="contSec">
        <div class="title" id="title">
            <h1>Contact Us</h1>
        </div>
        <div class="container-fluid mb-5" id="maparea">
            <div class="row d-flex justify-content-center align-content-center">
                <div class="col-sm-10 col-md-6 col-lg-6 d-flex justify-content-center align-content-center">                
                    <div class="mapouter" id="mapouter">
                        <div class="gmap_canvas" id="gmap_canvas">
                            <iframe class="mapRowIframe" id="gmap_canvas" src="https://maps.google.com/maps?q=Tara%20Limited&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://www.pureblack.de"></a>
                        </div>
                    </div>          
                </div>
                <div class="col-sm-10 col-md-6 col-lg-6 pl-5 pr-5 text-right" id="form-section">
                    <h1>How Can We Help You?</h1>
                    <?php
                        if(isset($_GET['status']))
                        {

                            if($_GET['status'] == 'success')
                            {
                                echo '
                                <div class="row d-flex justify-content-end mb-4">
                                    <div class="col-sm-10 col-md-10 col-lg-8 text-right">
                                        <div class="text-success border border-success p-2 rounded" role="alert">
                                            <strong>Thank You!</strong> Email has sent successfully.
                                        </div>
                                    </div>                                
                                </div>
                                ';
                            }
                            else if($_GET['status'] == 'error')
                            {
                                echo '
                                <div class="row d-flex justify-content-end mb-4">
                                    <div class="col-sm-10 col-md-10 col-lg-8 text-right">    
                                        <div class="text-danger border border-danger p-2 rounded" role="alert">
                                            Email sending failed.
                                        </div>
                                    </div>                                
                                </div>
                                ';
                            }
                        }
                    ?>
                    <form action="./essentials/mailer" method="POST" id="contact_form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">*Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ex: John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">*Email address</label>
                            <input type="email" name="email" class="form-control text-center" placeholder="john@doe.com" id="email" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="phone">*Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="017********" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">*Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group mb-5">
                            <label for="message">*Your Message</label>
                            <textarea name="message" class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <input class="btn" type="submit" name="submit_contact" id="customButton" value="Submit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5" id="appointment">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" id="form-section">
                    <h1>Schedule an Appointment</h1>
                    <button type="submit" id="customButton" data-toggle="modal" data-target="#exampleModalCenter"><h4>Take Appointment</h4></button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background: #070707;">
                                <div class="modal-header" style="border: none;color: #ab9257;">
                                    <h3 class="modal-title" id="modalTitle">Schedule your Appointment</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ab9257;">
                                        <span aria-hidden="true">&times;</span>
                                    </button> 
                                </div>
                                <div class="modal-body text-justify" style="border: none;">
                                    <form action="./essentials/appointment" method="POST" id="contact_form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">*Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Ex: John Doe" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">*Email address</label>
                                            <input type="email" name="email" class="form-control text-center" placeholder="john@doe.com" id="email" aria-describedby="emailHelp" required>
                                            <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">*Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="017********" id="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">*Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="message">*Appointment Purpose</label>
                                            <textarea name="message" class="form-control" id="message" rows="5" required></textarea>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="message">*Expected Appointment Time</label>
                                            <input type="text" name="time" id="input">
                                            <script>
                                                $('#input').datetimepicker({
                                                    uiLibrary: 'bootstrap4',
                                                    modal: true,
                                                    footer: true
                                                });
                                            </script>
                                        </div>
                                        <div class="text-center">
                                            <input class="btn" type="submit" name="submit_appointment" id="customButton" value="Submit"></input>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="container-fluid" id="factories">
            <div class="row" id="con-row1">
                <div class="col-md-6 mb-5" id="con-row1-col">
                    <h1>Corporate Headquarters</h1>
                    <br>
                    <p>Tara Limited Corporate Headquarters, 311, Progoti Sarani, Vatara Baridhara, Dhaka-1229, Bangladesh</p>
                    <p>Contact No: <pre id="pr">+8801867256121</pre class="pr"></p>
                    <p>Email: <pre id="pr">info@taralimited.co</pre></p>
                </div>
                <div class="col-md-6" id="con-row1-col1">
                    <h1>Factory Details</h1>
                    <br>
                    <div class="container-fluid" id="con-row1-col1-grid">
                        <div class="row d-flex justify-content-around align-content-center" id="con-row1-col1-grid-row">
                            <div class="col-md-12">
                                <h5>Tara Spinning Mills Ltd.</h5>
                                <p>Nobinagar, Enayetnagar, Fatullah, Naryanganj, 1421</p>
                                <a href="./Tara_companyprofile">Have a Look At our Factory</a>
                                <p>Contact: +8801937992116</p>
                            </div>
                        </div>
                        <div class="row" id="con-row1-col1-grid-row">
                            <div class="col-md-12">
                                <h5>Karotoa Spinning Mills Ltd.</h5>
                                <p>Shafipur, Kaliakair, Gazipur, 1750</p>
                                <a href="./Korotoya_fibers_mills">Have a Look At our Factory</a>
                                <p>Contact: +8801987834806</p>
                            </div>
                        </div>
                        <div class="row" id="con-row1-col1-grid-row">
                            <div class="col-md-12">
                                <h5>Enayetpur Spinning Mills Ltd.</h5>
                                <p>Baktabali Road, Enayetnagar, Fatullah, Naryanganj, 1421</p>
                                <a href="./Enaytpur_mills">Have a Look At our Factory</a>
                                <p>Contact: +8801926689728</p>
                            </div>
                        </div>
                        <div class="row" id="con-row1-col1-grid-row">
                            <div class="col-md-12">
                                <h5>Karotoa Green Spinning Mills Ltd.</h5>
                                <p>Vill.- North Laskarchala,  P.O- Haturiachala, P.S.- Kaliakair Dist- Gazipur, Bangladesh</p>
                                <a href="./Karotoa_Green_Spinning">Have a Look At our Factory</a>
                                <p>Contact: +8801716257652</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <section id="upFooterBreak" style="width:100%;height:10em;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
    <!-- Footer-->
    <?php include('./essentials/footer.php'); ?>
    <?php require('./essentials/header_scripts.php'); ?>

    

</body>
</html>