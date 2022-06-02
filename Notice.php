<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/notice.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->


</head>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>
    <section style="width:100%;height: 10em;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('essentials/db.php'); ?>

    <section id="noticeSec" style="z-index: 0;">
        <h1>Notices</h1>
        <div class="container-fluid" id="noticeBody">
            <div class="row" id="noticeRow">
                <div class="col-md-6" id="noticeCol">
                    <div id="lists">
                        <?php
                            function getTableDataFromDB($s)
                            {
                                include('essentials/db.php');
                                $res1 = mysqli_query($conn, $s)or die();
                                $ar=array();
                                while($r = mysqli_fetch_assoc($res1)) {
                                    $ar[]=$r;
                                }
                                return json_encode($ar);
                            }

                            $s1=" SELECT * FROM `notices`";
                            $jn1=getTableDataFromDB($s1);
                            $jr1=json_decode($jn1);

                            foreach($jr1 as $n)
                            {
                                if($n->priority == "emergency" && $n->status == '1'){
                                    $name = $n->name;
                                }
                            }
                            echo "<h3 id='title'>".$name."</h3>";
                            foreach($jr1 as $list)
                            {
                                if($list->priority == "emergency" && $list->status == '1'){
                                    echo "<li id='li'>".$list->description."</li>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6" id="noticeCol">
                    <div id="lists1">
                        <?php
                            $s2=" SELECT * FROM `notices`";
                            $jn1=getTableDataFromDB($s1);
                            $jr1=json_decode($jn1);
                            
                            
                            foreach($jr1 as $list)
                            {
                                if($list->priority != "emergency" && $list->status == '1'){
                                    echo "<li id='li'>".$list->description."</li>";
                                }
                            }
                        ?>
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