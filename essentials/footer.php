<section class="footer" id="footer">
    <div class="container-fluid" id="footer-section">
        <div class="row" id="footer-row">
            <div class="col-md-6" id="footer-col">
                <h3>Company</h3>
                <ul>
                    <li><a href="Tara_companyprofile">Tsml |</a></li>
                    <li><a href="Korotoya_fibers_mills">Ksml |</a></li>
                    <li><a href="Enaytpur_mills">Esml |</a></li>
                    <li><a href="Karotoa_Green_Spinning">Kgsml |</a></li>
                    <li><a href="index#a-Sec">History |</a></li>
                    <li><a href="index#tLtd">Bod |</a></li>
                    <li><a href="index#overviewSec">At A Glance |</a></li>
                    <li><a href="Notice">Notices |</a></li>
                    <li><a href="Construction">Career</a></li>
                </ul>
            </div>
            <div class="col-md-6" id="footer-col">
                <h3>Products</h3>
                <ul>
                    <li><a href="./Spin">Spinning |</a></li>
                    <li><a href="https://www.facebook.com/ABCIS.Office/">Non Profit Org |</a></li>
                    <li><a href="AmusementPark">Amusement |</a></li>
                    <li><a href="https://www.lend.com.bd/">Fashion |</a></li>
                    <li><a href="Construction">IT |</a></li>
                    <li><a href="Resort">Resort |</a></li>
                    <li><a href="RangersRanch.php">Agro</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="row" id="footer-row1">
            <div class="col-md-12" id="footer-col1">
                <h3>Our Certifications</h3>
                <div class="container-fluid" id="footer-col1-row">
                    <div class="row">
                        <div class="col-md" id="cert">
                            <img src="assets/imgs/common/footer/cert/CU.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img src="assets/imgs/common/footer/cert/OCS.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img src="assets/imgs/common/footer/cert/O100.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img src="assets/imgs/common/footer/cert/GOTS.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img id="urs" src="assets/imgs/common/footer/cert/URS.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img id="bci" src="assets/imgs/common/footer/cert/BCI.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img id="bsci" src="assets/imgs/common/footer/cert/BSCI.png" alt="">
                        </div>
                        <div class="col-md" id="cert">
                            <img id="cit" src="assets/imgs/common/footer/cert/CIT.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row" id="footer-row2">
            <div class="col-md-12" id="footer-col2">
                <?php
                    include('db.php');
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $getAllData = "SELECT * from visitor where ip='".$ip."'";
                    $getResult = mysqli_query($conn, $getAllData);                    
                    $getVisitorCount = mysqli_num_rows($getResult);

                    if($getVisitorCount < 1)
                    {
                        // New visitors Add
                        $sql = "INSERT INTO visitor(ip) VALUES('$ip')";

                        $Check=$DBH->prepare($sql);
                        $Check->execute();
                        $CheckIp = $Check->rowCount();

                        if ($CheckIp == 0)
                        {
                            $insertIp = $DBH->prepare($sql);
                            $insertIp->execute();
                        }
                    }
                    
                    // Showing All Count
                    $allDataSQL = "SELECT * FROM visitor";
                    $number = $DBH->prepare($allDataSQL);
                    $number->execute();
                    $count = $number->rowCount();

                    echo "<p id='visitor'>Total Visitors: ". $count."</p>";
                ?>
                <p>&copy;<?php echo date("Y"); ?> <a id="nahid" style="color: #967937; text-shadow: 0 25px 75px #ab9257, 0 0 35px #e0af3c;" href="/index">Tara Spinning Mills Ltd.</a> All Rights Reserved</p>
                <p>developed by <a id="nahid" style="color: #967937; text-shadow: 0 25px 75px #ab9257, 0 0 35px #e0af3c;" href="https://iamnahid.github.io">iamnahid</a></p>
                <br>
                <div class="container-fluid" id="footer-col2-row">
                    <div class="row" id="footer-col2-row-row">
                        <div class="col-md" id="footer-col2-col">
                            <img onclick="window.location='https://www.facebook.com/taralimited/'" src="assets/imgs/common/footer/Fb.png" alt="TARA LIMITED Facebook">
                            <!-- <a href="https://www.facebook.com/taralimited/"></a> -->
                        </div>
                        <div class="col-md" id="footer-col2-col">
                            <img onclick="window.location='https://www.linkedin.com/company/taralimitedbd'" src="assets/imgs/common/footer/linked.png" alt="TARA LIMITED LinkedIn">
                            <!-- <a href="https://www.linkedin.com/company/taralimitedbd"></a> -->
                        </div>
                        <div class="col-md" id="footer-col2-col">
                            <img onclick="window.location='https://www.twitter.com/taralimited'" src="assets/imgs/common/footer/twitter.png" alt="TARA LIMITED Twitter">
                            <!-- <a href="https://www.twitter.com"></a> -->
                        </div>
                        <div class="col-md" id="footer-col2-col">
                            <img onclick="window.location='https://www.instagram.com/taralimited/'" src="assets/imgs/common/footer/insta.png" alt="TARA LIMITED Instagram">
                            <!-- <a href="https://www.instagram.com"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>