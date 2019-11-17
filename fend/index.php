<?php 

include "connect.php";
$sql ="select * from journal limit 0,3";
$result = mysqli_query($con,$sql);


$sql2 = "select * from articals limit 0,3";
$result2 = mysqli_query($con,$sql2);

$sql3 = "select * from journal limit 0,1";
$result3 = mysqli_query($con,$sql3);
$data3 = mysqli_fetch_array($result3);
$sql4 = "select * from journal limit 2,4";
$result4 = mysqli_query($con,$sql4);
if(isset($_POST['submit'])){
    header('Location:journal.php');
}

?>


<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edelweiss Publications</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
  
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  




    <style>
        #wrapper {
            padding-top: 20px;
        }

        #wrapper:after {
            content: '';
            display: block;
            clear: both;
        }

        section {
            width: 100%;
            height: auto;

        }

        section:nth-child(2) {
            margin-top: 30px;

        }

        section:nth-child(3) {
            margin-top: 30px;
        }

        section:nth-child(4) {
            margin-top: 30px;
        }

        .navtab {
            width: 100%;
            height: 50px;
            line-height: 24px;
            padding-top: 12px;
            z-index: 9999999;
            background: #fff;

        }

        .navtab .artical-tab li {
            display: inline-block;
            margin-right: 20px;
        }

        .navtab .artical-tab li:last-child {
            margin-right: 0px;
        }

        .navtab .artical-tab li a {
            text-decoration: none;
            padding: 4px 10px;
            transition: all 0.15s ease-in-out;
        }

        .navtab .artical-tab li a.active,
        .navtab li a:hover {
            border-bottom: 2px solid #009edd;
            padding: 4px 10px;
        }

        .fixed {
            position: fixed;
            top: 0;
            //height: 70px;
            z-index: 1;
        }

        .u-display-inline {
            display: inline !important;
        }

        .u-text-center {
            text-align: center !important;
        }

        .text-l {
            line-height: 1.33;
            color: #505050;
        }

        .u-display-inline-block {
            display: inline-block !important;
        }

        .u-margin-xs-right {
            margin-right: 8px !important;
        }

        .u-padding-xs-hor {
            padding-right: 8px !important;
            padding-left: 8px !important;
        }

        .branded a,
        .branded a:link,
        .branded a:visited {
            color: #007398;
            border-bottom: 2px solid transparent;
        }

        .artical-head {
            padding: 10px 0px;
        }

        .journal-list li {
            margin-bottom: 10px;
            box-shadow: 0 1px 0 #fff inset;

        }

        .journal-list li a span {
            font-size: 16px;
            color: #009edd;
        }



        .indexing-img {
            padding: 10px;
        }

        .indexing-img img {
            margin-bottom: 10px;
        }

        .journal-list li a span:hover {
            border-bottom: 2px solid #009edd;
        }

        .index-alfa {
            padding: 30px 0px;
        }

        input[type="checkbox"] {
            display: none;

        }

        input[type="checkbox"]+label {
            color: #000;
        }

        input[type="checkbox"]+label span {
            display: inline-block;
            width: 19px;
            height: 19px;
            margin: -2px 10px 0 0;
            vertical-align: middle;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) left top no-repeat;
            cursor: pointer;
        }

        input[type="checkbox"]:checked+label span {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -19px top no-repeat;
        }

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]+label {
            color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        input[type="radio"]+label span {
            display: inline-block;
            width: 19px;
            height: 19px;
            margin: -2px 10px 0 0;
            vertical-align: middle;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -38px top no-repeat;
            cursor: pointer;
        }

        input[type="radio"]:checked+label span {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -57px top no-repeat;
        }

        input[type="checkbox"]+label {
            float: left;
            display: block;
            padding-left: 20px;
            color: #fff;
        }

        .subscribe {
            background-color: #009edd;
            color: #fff;
        }

        .news-latter-box h4 {
            color: #fff !important;
        }

        .single-sidebar-widget .news-latter-box input {
            background-color: #fff;
        }
        .card, .btn-primary{
            border-radius: 30px;
        }
        .call-to-action {
            width: 75%;
    margin: 0 auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    background-color: #fafafa;
    padding: 35px 60px;
    position: relative;
    overflow: hidden;
    -webkit-box-shadow: 0px 2px 8px rgba(1, 1, 1, 0.2);
    box-shadow: 0px 2px 8px rgba(1, 1, 1, 0.2);
}
       .call-to-action::before {
    content: "";
    background-image: url(assets/images/icons/call-to-action.png);
    position: absolute;
    left: 30px;
    top: 20px;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
}
        .call-to-action h3 {
    font-size: 28px;
    line-height: 32px;
    font-weight: 300;
    color: #009edd;
    margin: 0 auto;
}
        .call-to-action .df-btn{
           background-color: #009edd;
    -webkit-box-shadow: 0 1px 10px rgba(0, 166, 155, 0.4);
    box-shadow: 0 1px 10px rgba(0, 166, 155, 0.4);
        }
        .journal-list li p a:hover{
            color:#e9711c;
            text-decoration: underline
        }
        .uii{
            background-color:#eee;
            cursor:pointer;
        }
        .lii{
            padding:12px;
        }
    </style>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header>
            <div class="default-header-area header">
                <div class="container-fluid container-1370">
                    <div class="row align-items-center">

                        <div class="col-lg-4">
                            <nav class="main-menu" style="float: left">
                                <ul>
                                    <li><a href="/edelweissfrontend/fend/journal-book-list.php">Journals List</a>
                                    </li>
                                    <li><a href="/edelweissfrontend/fend/article.php">Articles</a>
                                    </li>
                                    <li><a href="/edelweissfrontend/fend/contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Logo start-->
                        <div class="col-lg-4 ">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <!--Logo end-->
                        <!--Menu start-->
                        <div class="col-lg-4 ">
                        <form class="card card-sm" method="post" action="journal.php">
                                <div class="card-body1 row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                    
                                        <input  id="journalSearch" type="text" name="jtitle" class="form-control form-control-lg form-control-borderless"   placeholder="Search topics or keywords">
                                         <div id="journalList" style="
                                         position: absolute;
                                         z-index: 999;
                                         margin-top: 10px;
                                         ">

                                         </div>

                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button id="submit" class="btn btn-lg btn-primary" type="submit">Search</button>
                                    </div>
                                    
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--Menu end-->
                        <!--Search start-->

                        <!--Search end-->


                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--slider section start-->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="background-image:url(/assets/images/banner.jpg)">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <div class="carousel_caption">
                                        <h1 style="color:black"><?php echo $data3['journal_title']; ?></h1>
                                        <h2 style="color:black"><?php echo  $data3['journal_short_name'];?></h2>
                                        <p style="color:black"><?php echo $data3['journal_meta_desc']; ?></p>

                                    </div>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="../edelweiss/upload/journal_logos/<?php echo $data3['journal_img']; ?>" class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <div class="carousel_caption">
                                        <h1 style="color:black">Design</h1>
                                        <h2 style="color:black">Pixel Event on Digital Design</h2>
                                        <p style="color:black">It is a long established fact that a reader will be happy</p>

                                    </div>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="../edelweiss/upload/journal_logos/AIDS_jounral_head.jpg" class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php while($row2 = mysqli_fetch_array($result4)){?>
                <div class="carousel-item">
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <div class="carousel_caption">
                                        <h1 style="color:black"><?php echo $row2['journal_title']; ?></h1>
                                        <h2 style="color:black"><?php echo $row2['journal_short_name']; ?></h2>
                                        <p style="color:black"><?php echo $row2['journal_meta_desc']; ?></p>

                                    </div>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="../edelweiss/upload/journal_logos/<?php echo $row2['journal_img']; ?>" class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--slider section end-->


        <!--All Information Area Start-->
        <div class="all-information-area section pt-80 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-80 pb-lg-60 pb-md-55">
            <div class="container container-1370">
                <h1 style="margin-bottom: 30px">Explore Scientific, Technical, and Medical Research & Review </h1>
                <div class="row row-20">

                    <div class="col-lg-9">
                        <nav id="myHeader" class="navtab" role='navigation'>
                            <ul class="artical-tab">
                                <li><a href="#home" class="active">Medical Science</a></li>
                                <li><a href="#about">Applied Sciences</a></li>
                                <li><a href="#clients">Health Sciences</a></li>
                                <li><a href="#contact">Chemical Science</a></li>
                            </ul>
                        </nav>
                        <div id="wrapper">
                            <section id="home" style="box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3); margin-bottom: 20px">
                                <div>
                                    <!--Article Area Start-->
                                    <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                        <div class="container container-1370">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--Support Section Title Start-->
                                                    <div class="article-section-title text-left">
                                                        <h3>Medical Science</h3>
                                                    </div>
                                                    <!--Support Section Title End-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="artical-list">
                                                        <li><a href="#">Nursing and Health Professions</a></li>
                                                        <li><a href="#">Medicine</a></li>
                                                        <li><a href="#">Cardiology</a></li>
                                                        <li><a href="#">Cancer</a></li>
                                                        <li><a href="#">Obesity</a></li>
                                                        <li><a href="#">Rheumatic Diseases</a></li>
                                                        <li><a href="#">Dentistry</a></li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p>From foundational science to new and novel research, discover our large collection of Physical Sciences and Engineering publications, covering a range of disciplines, from the theoretical to the applied.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h4 class="artical-head">Popular Articles</h4>
                                                            <ul class="journal-list">
                                                                <?php while($row = mysqli_fetch_array($result2)){ ?>
                                                                <li>

                                                                    <a href="article.php?artical_id=<?php echo $row['artical_id'];?>"><span><?php echo $row['artical_short_name']; ?></span></a>
                                                                    <?php $jid = $row['journal_id'];
                                                                    $jname = "select journal_title from journal where id = '$jid'";
                                                                    $jresult = mysqli_query($con,$jname);
                                                                    $jnameres = mysqli_fetch_array($jresult);
                                                                    $vartitle = $jnameres['journal_title'];
                                                                    $r = str_replace(" ","-",$vartitle);
                                                                    ?>
                                                                    <p><a href="journals/<?php echo $jid; ?>/<?php echo $r; ?>"> <?php echo $jnameres['journal_title']; ?> </a></p>

                                                                </li>
                                                                <?php } ?>
                                                                <!-- <li>

                                                                    <a href="article.php"><span>Earth system impacts of the European arrival and Great Dying in the Americas after 1492</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="article.php"><span>School performance, social networking effects, and learning of school children: Evidence of reciprocal relationships in Abu Dhabi</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <h4 class="artical-head">Recent Publications</h4>
                                                            <ul class="journal-list">
                                                                <?php while($row1 = mysqli_fetch_array($result)){ ?>
                                                                <li><a href="journal.php?journal_id=<?php echo $row1['id']; ?>"><span><?php echo $row1['journal_title']; ?></span></a>
                                                                    <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <?php } ?>
                                                                <!-- <li><a href="#"><span>Gondwana Research</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Nuclear Engineering and Design</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li> -->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Article Area End-->
                                </div>
                            </section>

                            <section id="about" style="box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3); margin-bottom: 20px">
                                <div>
                                    <!--Article Area Start-->
                                    <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                        <div class="container container-1370">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--Support Section Title Start-->
                                                    <div class="article-section-title text-left">
                                                        <h3>Applied Sciences</h3>
                                                    </div>
                                                    <!--Support Section Title End-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="artical-list">
                                                        <li><a href="#">Nanotechnology</a></li>
                                                        <li><a href="#">Applied Science</a></li>
                                                        <li><a href="#">Biomedical Science</a></li>
                                                        <li><a href="#">Food Science</a></li>
                                                        <li><a href="#">Physical Science</a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p>From foundational science to new and novel research, discover our large collection of Physical Sciences and Engineering publications, covering a range of disciplines, from the theoretical to the applied.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h4 class="artical-head">Popular Articles</h4>
                                                            <ul class="journal-list">
                                                            <?php 
                                                            $applied = 'applied';
                                                             $sql6 = "select * from journal where categorie = '$applied'";
                                                             $result6 = mysqli_query($con,$sql6);
                                                             while($row = mysqli_fetch_array($result6)){

                                                             
                                                            
                                                            ?>
                                                                <li>

                                                                    <a href="#"><span>Nanoparticles: Properties, applications and toxicities</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                             <?php } ?>
                                                                <!-- <li>

                                                                    <a href="#"><span>Earth system impacts of the European arrival and Great Dying in the Americas after 1492</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="#"><span>School performance, social networking effects, and learning of school children: Evidence of reciprocal relationships in Abu Dhabi</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <h4 class="artical-head">Recent Publications</h4>
                                                            <ul class="journal-list">
                                                                <li><a href="#"><span>Geomechanics for Energy and the Environment</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Gondwana Research</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Nuclear Engineering and Design</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Article Area End-->
                                </div>
                            </section>

                            <section id="clients" style="box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3); margin-bottom: 20px">
                                <div>
                                    <!--Article Area Start-->
                                    <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                        <div class="container container-1370">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--Support Section Title Start-->
                                                    <div class="article-section-title text-left">
                                                        <h3>Health Sciences </h3>
                                                    </div>
                                                    <!--Support Section Title End-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="artical-list">
                                                        <li><a href="#">Biological Science</a></li>
                                                        <li><a href="#">Biochemistry And Molecular Biology</a></li>
                                                        <li><a href="#">Neuroscience</a></li>
                                                        <li><a href="#">Genetics</a></li>
                                                        <li><a href="#">Health Care</a></li>
                                                        <li><a href="#">Pyschology</a></li>
                                                        <li><a href="#">Diabetics</a></li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p>From foundational science to new and novel research, discover our large collection of Physical Sciences and Engineering publications, covering a range of disciplines, from the theoretical to the applied.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h4 class="artical-head">Popular Articles</h4>
                                                            <ul class="journal-list">
                                                                <li>

                                                                    <a href="#"><span>Nanoparticles: Properties, applications and toxicities</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="#"><span>Earth system impacts of the European arrival and Great Dying in the Americas after 1492</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="#"><span>School performance, social networking effects, and learning of school children: Evidence of reciprocal relationships in Abu Dhabi</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <h4 class="artical-head">Recent Publications</h4>
                                                            <ul class="journal-list">
                                                                <li><a href="#"><span>Geomechanics for Energy and the Environment</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Gondwana Research</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Nuclear Engineering and Design</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Article Area End-->
                                </div>
                            </section>

                            <section id="contact" style="box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3); margin-bottom: 20px">
                                <div>
                                    <!--Article Area Start-->
                                    <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                        <div class="container container-1370">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--Support Section Title Start-->
                                                    <div class="article-section-title text-left">
                                                        <h3>Chemical Science</h3>
                                                    </div>
                                                    <!--Support Section Title End-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="artical-list">
                                                        <li><a href="#">Pharmaceuticals</a></li>
                                                        <li><a href="#">Organic Chemistry</a></li>
                                                        <li><a href="#">Pharmacology,Toxicology and Pharmaceutical Science</a></li>
                                                        <li><a href="#">Pharmcovigilance</a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p>From foundational science to new and novel research, discover our large collection of Physical Sciences and Engineering publications, covering a range of disciplines, from the theoretical to the applied.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h4 class="artical-head">Popular Articles</h4>
                                                            <ul class="journal-list">
                                                                <li>

                                                                    <a href="#"><span>Nanoparticles: Properties, applications and toxicities</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="#"><span>Earth system impacts of the European arrival and Great Dying in the Americas after 1492</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                                <li>

                                                                    <a href="#"><span>School performance, social networking effects, and learning of school children: Evidence of reciprocal relationships in Abu Dhabi</span></a>
                                                                    <p><a href="#"> Arabian Journal of Chemistry </a></p>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <h4 class="artical-head">Recent Publications</h4>
                                                            <ul class="journal-list">
                                                                <li><a href="#"><span>Geomechanics for Energy and the Environment</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Gondwana Research</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                                <li><a href="#"><span>Nuclear Engineering and Design</span></a>
                                                                     <p> <a href="#">Volume 20</a></p>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Article Area End-->
                                </div>

                            </section>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-right-sidebar">
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20 subscribe">
                                <div class="news-latter-box">
                                <?php 
                                if(isset($_POST['ssubmit'])){
                                   $name = $_POST['sname'];
                                   $email = $_POST['semail'];
                                   $l = (isset($_POST['l']) ? 1 : 0 );
                                   $c = (isset($_POST['c']) ? 1 : 0 );
                                   $h = (isset($_POST['h']) ? 1 : 0 );
                                   $sql8 = "insert into subscribe(name,email,life_science,health_science,chemical_science,subscribe_time) values('$name','$email','$l','$c','$h',NOW())";
                                   $result8 = mysqli_query($con,$sql8);
                                   $to = "skshanawa21@gmail.com";
                                   $from = $email;
                                   $message = "PHP mail works fine";
                                   $headers = "From ".$from;
                                   mail($to,$from,$message,$headers);

                                }
                                
                                ?>
                                    <p>To get latest update and news regularly</p>
                                    <h4><span>Subscribe</span> <br> our Newsletter now</h4>
                                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" " novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" name="sname" type="text" autocomplete="off" placeholder="Enter your name" required />
                                                <input id="mc-email" name="semail" type="text" autocomplete="off" placeholder="Enter your email" required />
                                                <input type="checkbox" id="c1" name="l" value="1" />
                                                <label for="c1"><span></span>Life Science</label>
                                                <br />
                                                <input type="checkbox" id="c2" name="h" value="1" />
                                                <label for="c2"><span></span>Health Science</label>
                                                <br />
                                                <input type="checkbox" id="c3" name="c" value="1" />
                                                <label for="c3"><span></span>Chemical Science</label>
                                                <br />
                                                <button type="submit" name="ssubmit" id="mc-submit" class="df-btn">Subscribe</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Single Sidebar Widget End-->

                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Scholar Citations</h4>
                                <div class="indexing-img">
                                    <div class="row">
                                        <div class="col-lg-12"><a href="https://scholar.google.co.in/citations?hl=en&user=9IhKAtUAAAAJ"><img src="assets/images/indexing/google-scholar.jpg"></a></div>
                                        <div class="col-lg-12"><a href="https://scholar.google.co.in/citations?hl=en&user=9IhKAtUAAAAJ"><img src="assets/images/indexing/google-scholar-citations-graph-1-Aug.jpg"></a></div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Sidebar Widget End-->
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Indexing & Archiving</h4>
                                <div class="indexing-img">
                                    <div class="row">
                                    <?php 
                                      $sql5 = "select * from indexing";
                                      $result5 = mysqli_query($con,$sql5);
                                      while($row5 = mysqli_fetch_array($result5)){
                                    ?>
                                        <div class="col-lg-6 col-sm-6"><img src="../edelweiss/upload/indexes/<?php echo $row5['index_logo']; ?>"></div>
                                    <?php } ?>
                                        <!-- <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/crossref.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/doi.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/drji-logo.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/google.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/icmje.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/mendeley-logo.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/publons.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/refseek-logo.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/research-bib.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/road-issn.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/scilitlogo-white.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/wcosj.jpg"></div>
                                        <div class="col-lg-6 col-sm-6"><img src="assets/images/indexing/worldcat-logo.jpg"></div> -->
                                    </div>
                                </div>
                            </div>
                            <!--Single Sidebar Widget End-->
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4> Promotions</h4>
                                <a href="#"><img src="assets/images/dummy.jpg" alt="Promotion img"></a>
                            </div>
                            <!--Single Sidebar Widget End-->
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4> Promotions</h4>
                                <a href="#"><img src="assets/images/dummy.jpg" alt="Promotion img"></a>
                            </div>
                            <!--Single Sidebar Widget End-->
                        </div>
                    </div>
                    <div class=" row index-alfa">
                        <div class="col-md-3">
                            <h3>Browse by Publication Title:</h3>
                        </div>
                        <div class="col-md-9">
                            <ul class="u-display-inline branded u-text-center index-list text-l">
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">A</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">B</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">C</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">D</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">E</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">F</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">G</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">H</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">I</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">J</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">K</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">L</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">M</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">N</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">O</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">P</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">Q</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">R</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">S</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">T</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">U</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">V</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">W</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">X</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">Y</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">Z</a></li>
                                <li class="letter u-display-inline-block u-padding-xs-hor u-margin-xs-right"><a href="#">0-9</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Call To Action section start-->
    <div class="call-to-action-section call-to-action-section-2 section pt-lg-0 pt-md-0 pt-sm-0 pt-xs-50 pb-xs-50">
        <div class="container container-1370">
           
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-12 ml-auto mr-auto">
                    <div class="call-to-action">
                        <h3>Do you have more quesions? Mail us</h3>
                        <a class="df-btn" href = "contact.php" target="">Mail us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Call To Action section end-->

        <!--Footer section start-->
        <footer>

            <!--Footer Top start-->
            <div class="footer-top section light-green-bg pt-120  pt-md-130 pt-sm-120 pt-xs-50  pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
                <div class="container container-1370">
                    <div class="row justify-content-xl-around justify-content-between content-between">
                        <!--Footer Widget Start-->
                        <div class="col-md-3">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">About Us</h3>
                                <p>Edelweiss is an established peer-reviewed open access publisher with sole motive to promulgate the advancement of science among research communities online for free of charge. Edelweiss is supported by a network of reliable journals and societies as well as internationally renowned editorial board members.  <br><span><a href="#">Read More...</a></span></p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <!--Footer Widget Start-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Quick Links</h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">For Authors</a></li>
                                    <li><a href="#">Reviewers</a></li>
                                    <li><a href="#">Publication Ethics</a></li>

                                </ul>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <!--Footer Widget Start-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Go To</h3>
                                <ul>
                                    <li><a href="#">Publication Charges</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Footer Widget Start-->
                        <div class="col-md-3">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Head Office</h3>
                                <p>Edelweiss Publications Inc
                                    12W441<br>
                                    Williams St<br>
                                    Winfield<br>
                                    Illinois 60190<br>
                                    USA</p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Follow Us</h3>
                                <ul class="social-icons">
                                    <li>
                                        <a href="https://twitter.com/">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/‎">
                                            <span>Google+</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/">
                                            <span>LinkedIn</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <h4 class="toll-free">Our Toll Free Number <br> 1844-669-0266</h4>
                               
                            </div>
                        </div>
                        <!--Footer Widget End-->

                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container container-1370">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy;2019 <a href="#">Edelweiss Publications Inc., USA</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
   
    <script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- <script>
    $('#btn').click(function(){
        alert('hello world');
    });
    $(document).ready(function(){

      
            $('#journalSearch').keyup(function(){
                var query = $(this).val();
                console.log(query);
                alert(query);
                if(query != ''){
                    $.ajax({
                        url:"search.php",
                        method="POST",
                        data:{query:query},
                        success:function(data){
                            $('#journalList').fadeIn();
                            $('#journalList').html(data);
                        }
                    });
                }
                else{
                    $('#journalList').fadeOut();
                    $('#journalList').html('');
                }
                
            });
            $(document).on('click','li',function(){
                $('#journalSearch').val($(this).text());
                $('#journalList').fadeOut();
            })
           
    });
    </script> -->
    <script>
        $(document).ready(mySlider);
    //   $(document).ready(function(){
    //     $('#btn').click(function(){
    //     alert('hello world');
    // });     
    //   });
    $(document).ready(function(){

      
$('#journalSearch').keyup(function(){
    var query = $(this).val();
    if(query != ''){
        $.ajax({
            url:"search.php",
            method:"POST",
            data:{query:query},
            success:function(data){
                $('#journalList').fadeIn();
                $('#journalList').html(data);
                console.log(data);
            }
            
        });
       
    }
    else{
        $('#journalList').fadeOut();
        $('#journalList').html('');
    }
    
});
$(document).on('click','li',function(){
    $('#journalSearch').val($(this).text());
    $('#journalList').fadeOut();
})

});


        function mySlider() {

            var slider__slideContenedor = '.slider__slideContenedor';

            var imgNumber,
                sliderContainerWidth,
                imgContainer,
                index,
                flag = true,
                speed = 600,
                bullets = true,
                auto = true,
                time = 5000;

            construction();
            $(window).resize(construction);
            if (auto) {
                var handle = setInterval(slideRight, time);
            }

            function construction() {
                index = 1;
                imgNumber = $(slider__slideContenedor + ' .slider__slide').length;
                sliderContainerWidth = Math.round($('.slider__contenedor').width());
                imgContainer = sliderContainerWidth * imgNumber;
                $(slider__slideContenedor).css("width", imgContainer);
                $(slider__slideContenedor + ' .slider__slide').css("width", sliderContainerWidth);
                $(slider__slideContenedor).css("margin-left", 0);
                if (bullets == true) {
                    $('.slider__bulletsContenedor').html("");
                    for (i = 1; i <= imgNumber; i++) {
                        $('.slider__bulletsContenedor').append("<span class='slider__bullet'></span>");
                    }
                    $('.slider__bullet').eq(0).addClass('slider__bullet--active');
                }
                $(".slider__bullet").click(pagers);
                $('.slider__arrow--right').click(slideRight);
                $('.slider__arrow--left').click(slideLeft);
            }

            function pagers() {
                if (!$(this).hasClass('slider__bullet--active')) {
                    var bulletIndex = $(".slider__bulletsContenedor span").index(this) + 1;
                    index = bulletIndex;
                    $(".slider__bulletsContenedor").find(".slider__bullet").removeClass("slider__bullet--active").eq(bulletIndex - 1).addClass("slider__bullet--active");
                    $(slider__slideContenedor).animate({
                        marginLeft: -sliderContainerWidth * (bulletIndex - 1)
                    }, speed);
                }
            }

            function slideRight() {
                var imgContainerLeft = parseInt($(slider__slideContenedor).css('margin-left'));
                if (flag) {
                    if (imgContainerLeft == -sliderContainerWidth * (imgNumber - 1)) {
                        index = 1;
                        $(slider__slideContenedor).animate({
                            marginLeft: 0
                        }, speed, function() {
                            flag = true;
                        })
                    } else {
                        index++;
                        $(slider__slideContenedor).animate({
                            marginLeft: '-=' + sliderContainerWidth
                        }, speed, function() {
                            flag = true;
                        })
                    }
                    flag = false;
                    $(".slider__bulletsContenedor").find(".slider__bullet").removeClass("slider__bullet--active").eq(index - 1).addClass("slider__bullet--active");
                }
            }

            function slideLeft() {
                var imgContainerLeft = parseInt($(slider__slideContenedor).css('margin-left'));
                clearInterval(slideRight, 3000);
                if (flag) {
                    if (imgContainerLeft == 0) {
                        index = index + (imgNumber - 1);
                        $(slider__slideContenedor).animate({
                            marginLeft: -sliderContainerWidth * (imgNumber - 1) + 'px'
                        }, speed, function() {
                            flag = true;
                        })
                    } else {
                        index--;
                        $(slider__slideContenedor).animate({
                            marginLeft: '+=' + sliderContainerWidth
                        }, speed, function() {
                            flag = true;
                        })
                    }
                    flag = false;
                    $(".slider__bulletsContenedor").find(".slider__bullet").removeClass("slider__bullet--active").eq(index - 1).addClass("slider__bullet--active");
                }

            }
            $(".slider__contenedor .arrow , .slider__bulletsContenedor").hover(function() {
                clearInterval(handle);
            }, function() {
                handle = setInterval(slideRight, time);
            })

        };
    </script>
    <script>
        $(document).ready(function() {
            $(window).bind('scroll', function() {
                var navHeight = $(window).height() - 70;
                if ($(window).scrollTop() > navHeight) {
                    $('#myHeader').addClass('fixed');
                } else {
                    $('#myHeader').removeClass('fixed');
                }
            });
        });
        $(".input").focus(function() {
            $(".close-btn").addClass("active");
        });

        $(".input").focusout(function() {
            $(".close-btn").removeClass("active");
            $(this).val("");
        });

        $.fn.pageScroller = function(options) {

            var settings = $.extend({
                nav: $(this),
                links: $(this).find('a'),
                navActiveClass: 'active',
                scrollContainer: $('html, body'),
                scrollSpeed: 1500,
                section: $('section'),
                navHeight: $(this).outerHeight()
            }, options);

            settings.links.each(function() {
                var link = $(this),
                    href = link.attr('href'),
                    target = $(href);

                link.on('click', function(e) {
                    e.preventDefault();
                    settings.links.removeClass(settings.navActiveClass);
                    link.addClass(settings.navActiveClass);
                    settings.scrollContainer.stop().animate({
                        scrollTop: target.offset().top - settings.navHeight
                    }, settings.scrollSpeed);
                });

            });

            $(window).on('scroll', function() {
                var wScroll = $(window).scrollTop() + settings.navHeight;
                settings.section.each(function(index) {
                    var id = $(this).attr('id'),
                        top = $(this).offset().top,
                        secHeight = $(this).outerHeight();
                    if (top <= wScroll && (top + secHeight) > wScroll) {
                        settings.links.removeClass(settings.navActiveClass);
                        settings.nav.find('a[href="#' + id + '"]').addClass(settings.navActiveClass);
                    }
                });
            });
        };

        $(document).ready(function() {
            $('nav').pageScroller({
                // nav: $(this),						default - Your navigation
                // links: $(this).find('a'),			default - The links with the # to scroll to
                // scrollContainer: $('html, body'),	default - The container you want to scroll
                // scrollSpeed:		1500,				//default - 1500
                // section: $('section'),    			default - The elements you want to scroll to with the same hash # as the links
                // navHeight: $(this).outerHeight		default - The height of the navigation
                // navActiveClass:		'active',		default - Active class name op links
            });
        });
        </script>
        <!-- <script>
    
    $(document).ready(function(){
            $('#jsearch').keyup(function(){
                var query = $(this).val();
                alert(query);
                if(query != ''){
                    $.ajax({
                        url:"search.php",
                        method="POST",
                        data:{query:query},
                        success:function(data){
                            $('#journalList').fadeIn();
                            $('#journalList').html(data);
                        }
                    });
                }
                else{
                    $('#journalList').fadeOut();
                    $('#journalList').html('');
                }
                
            });
           
    });
    </script> -->
   
</body>

</html>

