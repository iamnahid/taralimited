<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainability</title>

    <?php require('./essentials/header_styles.php'); ?>

    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/sustain.css?ver=55.0">

    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="assets/css/res/resIndex.css?ver=10.1"> -->

</head>
<script>
    $(document).ready(function()
    {
        $('#green').show();

        $('#cs').click(function(){
            $('.sustain_body').hide();
            $('#corporate').show(2000);
        });
        $('#gi').click(function(){
            $('.sustain_body').hide();
            $('#green').show(2000);
        });
        $('#af').click(function(){
            $('.sustain_body').hide();
            $('#affiliations').show(2000);
        });
        $('#ep').click(function(){
            $('.sustain_body').hide();
            $('#environment').show(2000);
        });
        $('#tech').click(function(){
            $('.sustain_body').hide();
            $('#technology').show(2000);
        });
    })
</script>
<body>
    
    <!-- Nav Bar-->
    <?php include('./essentials/nav.php'); ?>

    <section class="container-fluid p-5" id="sustain">
        <h1 class="mb-5">Sustainability</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-5 justify-content-center text-center rounded-pill">
                <div class="btn-group mt-3 bg-transparent rounded-pill row justify-content-center" role="group" id="sustainButton">
                    <button class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="gi">Green Initiatives</button>
                    <button class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="cs">Corporate</button>
                    <button class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="ep">Environment Policy</button>
                    <button class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="tech">Technology</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center sustain_body" id="green">
            <div class="col-lg-10 p-3 justify-content-center text-center">
                <ul>
                    <li><h3 class="text-left">Green Initiatives</h3></li>
                </ul>
                <p class="text-justify pt-3 pl-5 pr-5">Our resposibility for ensuring clean environment has led us to reduce using harmful by-products and more focused on reusing and recycling. This consists reusing utility water, using solar panel in factories, harvesting natural water, recycling organic waste and decomposit commercial waste, recovering heat through gas genarator etc. The eco-friendly process also saves resources of the country meanwhile cost effective.

                </p>
                <p class="text-justify pt-3 pl-5 pr-5"> some of the initiatives include: </p>
                <br><br>
                <ul id="corporate_list">
                    <li>Re-using treated water</li>
                    <li>Harvesting rain-water</li>
                    <li>Re-using utility water</li>
                    <li>Recovering heat</li>
                    <li>Re-cycling organic waste</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center sustain_body" id="corporate">
            <div class="col-lg-10 p-3">
                <ul>
                    <li><h3 class="text-left text-capitalize">Corporate Sustainability</h3></li>
                </ul>
                <p class="text-justify pt-3 pl-5 pr-5">Our companies sustainability is practiced around social considerations. The key areas of focus are Health and Education. 
                </p>
                <ul id="corporate_list">
                    <li>Donated blood centrifuge machine and dialysis machine to the local hospital</li>
                    <li>Donated to CRP for its pediatric unit, extending the facility to 05 beds</li>
                </ul>
                <p class="text-left pl-5 pr-5">Our aim is to co-operate beneficiaries to contribute in long run goal achievement.</p>
                <br>
            </div>
        </div>
        <div class="row justify-content-center sustain_body" id="environment">
            <div class="col-lg-10 p-3">
                <ul>
                    <li><h3 class="text-left text-capitalize">Environment Policy</h3></li>
                </ul>

                <p class="text-justify pl-5 pr-5">The organization commits to prevention of pollution and continual improvement. The organization seeks to minimize waste arising, promote recycling, reduce energy consumption, reduce harmful emissions and, where possible, to work with suppliers who themselves have sound environmental policies.</p>

                <p class="text-justify pl-5 pr-5">In order to ensure the achievement of the above commitments, the organization has implemented an environmental management system, which satisfies the requirements of ISO 14001:2004.</p>

                <p class="text-justify pl-5 pr-5">The organization's committed to prevent environmental pollution. TARA Limited ensures all its commercial activities are strictly following the regulations of <span style="color: #ab9257">Directorate of environment, Ministry of Environment and Forest, Government of Bangladesh</span> as well as meeting the requirements of ISO 14001:2004.</p>
                
            </div>
        </div>

        <div class="row justify-content-center sustain_body" id="technology">
            <div class="col-lg-10 p-3">
                <ul>
                    <li><h3 class="text-left text-capitalize">Technology</h3></li>
                </ul>
                <p class="text-justify pl-5 pr-5">TARA Limited uses state-of-the-art technology in its lines.  It has also integrated Information Technology with its business process with the use of global software solutions such as “Systems, Applications and Products” (SAP) Enterprise Resource Planning (ERP) etc.</p>

                <p class="text-justify pl-5 pr-5">Our goal is to setting up modern machinery in factories as well as in corporate office, Tara Limited effectively reducing power wastage, improving efficiency. Introducing integrated Information Technology, consumer communication access to company profits have improved our collaboration to customers.</p>
                
            </div>
        </div>
    </section>

    <section style="width:100%;height: 5em;background-color: rgba(0, 0, 0, 0);"></section>


    <!-- --------------SECTION-------------------- -->
    


    <section id="upFooterBreak" style="width:100%;background-color: rgba(0, 0, 0, 0);"></section>

    <?php include('./essentials/backToTop.php');?>
<!-- Footer-->
<?php include('./essentials/footer.php'); ?>


<?php require('./essentials/header_scripts.php'); ?>


</body>
</html>