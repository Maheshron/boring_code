<?php
include "connect.php";
$id;
if(isset($_REQUEST['journal_id'])){
    extract($_REQUEST);
    $id = $_GET['journal_id'];
    $title = $_GET['journal_title'];
$sql = "select * from journal where id = '$id'";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
$t = $data['journal_title'];
$r = str_replace(" ","-",$t);
}

if(isset($_REQUEST['jtitle'])){
    extract($_REQUEST);
    $sql = "select * from journal where journal_title = '$jtitle'";
    
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
$id = $data['id'];
   $title = $_GET['journal_title'];
$sql = "select * from journal where id = '$id'";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
$t = $data['journal_title'];
$r = str_replace(" ","-",$t);

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
    <base href="http://metrocoolsolutions.in/test2/newedeweles/fend/" />
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .support-content-keywords ul li a {
            padding: 0px 0px !important;
        }

        .call-to-action {
            min-height: 400px;
        }

        #profile {
            width: 350px;
          

        }
        .single-testimonial img{
           width: 100px !important;
            height: 100px !important;
            -webkit-border-radius: 50%;
            cursor: pointer;
            float: left;
            margin-right: 10px;
        }
        
        .info {
            position: relative;
            padding: 5px 0 0 0;
        }

        .info h2 {
            padding: 5px 0 3px 10px;
            font-weight: 400;
        }


        .info p {
            font-weight: 600;
        }

        .info #place {
            margin-top: 1px;
            font-weight: 600;
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
                                    <li><a href="journal-book-list.php">Journals List</a>
                                    </li>
                                    <li><a href="article.php">Articals</a>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a>
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
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-primary" type="submit">Search</button>
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

        <div class="sub-navbar">
            <nav class="nav dark-nav">
                <div class="container">
                    <div class="nav-heading">
                        <button class="toggle-nav" data-toggle="open-navbar1"><i class="fa fa-align-right"></i></button>
                    </div>
                    <div class="menu" id="open-navbar1">
                        <ul class="list">
                            <li><a href="journals/<?php echo $id; ?>/<?php echo $r; ?>">Home</a></li>

                            <li><a href="editorial-board/<?php echo $id; ?>/<?php echo $r; ?>">Editorial Panel</a></li>
                            <li><a href="#">Manuscript Submissions</a></li>
                            <li><a href="article-in-press/<?php echo $id; ?>/<?php  echo $r; ?>">Articles in Press</a></li>
                            <li><a href="current_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Current Issue</a></li>
                            <li><a href="previous_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Previous Issue</a></li>
                            <li><a href="journal_contact/<?php echo $id; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--All Support Area Start-->
        <div class="all-support-area section pt-90 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-70 pb-lg-55 pb-md-35 pb-sm-35 pb-xs-15">
            <div class="container container-1370">
                <div class="row">
                    <div class="col-lg-4">
                        <!--Support Section Title Start-->
                        <div class="support-section-title">
                            <h2><?php echo $data['journal_title']; ?></h2>
                            <h6>Open Access</h6>
                        </div>
                        <!--Support Section Title End-->
                    </div>
                    <div class="col-lg-8">

                        <div class="testimonial-slider">
                            <!--Single Testimonial Start-->
                            <?php $sql2 ="select * from editors where journal_id='$id' limit 0,4";
                                      $result2 = mysqli_query($con,$sql2);
                                      $data2 = mysqli_fetch_array($result2);
                                      while($row2 = mysqli_fetch_array($result2)){ ?>
                            <div class="single-testimonial">
                               

                                      
                                
                                <div id="profile">
                                    <img src="../edelweiss/upload/editor_images/<?php echo $row2['image']; ?>" height="50px" width="50px" alt="roman" />
                                    <div class="info">
                                        <h2>Editor In Chief</h2>
                                        <h3><?php echo $row2['first_name'];  ?> </h3>
                                        
                                    </div>

                                </div>

                            </div>
                                    <?php } ?>
                            <!--Single Testimonial End-->
                            <!--Single Testimonial Start-->
                            <!-- <div class="single-testimonial">
                                <div id="profile">
                                    <img src="assets/images/editorial-board/2.png" alt="roman" />
                                    <div class="info">
                                        <h2>Editor In Chief</h2>
                                        <h3>Kenko Jian Hong Yu </h3>
                                        
                                    </div>

                                </div>
                            </div> -->
                            <!--Single Testimonial End-->
                            <!--Single Testimonial Start-->
                            <!-- <div class="single-testimonial">
                                <div id="profile">
                                    <img src="assets/images/editorial-board/4.png" alt="roman" />
                                    <div class="info">
                                        <h2>Editor In Chief</h2>
                                        <h3>Kenko Jian Hong Yu </h3>
                                        
                                    </div>

                                </div>
                            </div> -->
                            <!--Single Testimonial End-->
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <!--Single Support Start-->
                            <div class="col-md-6 col-lg-6">
                                <div class="">
                                    <div class="journal-img">
                                        <img src="../edelweiss/upload/journal_logos/<?php echo $data['journal_img']; ?>" alt="">
                                    </div>
                                    <div class="support-content">
                                    </div>
                                </div>
                            </div>
                            <!--Single Support End-->
                            <!--Single Support Start-->
                            <div class="col-md-6 col-lg-6">
                                <div class="single-support-area">
                                    <h3>Explore journal content</h3>
                                    <div class="support-content">
                                        <ul>
                                            <li><a href="article-in-press/<?php echo $id; ?>/<?php  echo $r; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Articles in press</a></li>
                                            <li><a href="current_issues/<?php echo $id; ?>/<?php  echo $r; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Current issues</a></li>
                                            <li><a href="previous_issues/<?php echo $id; ?>/<?php  echo $r; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> previous issues</a></li>
                                            <li><a href="archive.php"><i class="fa fa-angle-right" aria-hidden="true"></i> All issues</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Special issues</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Best Articles</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Single Support End-->
                            <!--Single Support Start-->
                            <div class="col-md-6 col-lg-6">
                                <div class="single-support-area">
                                    <h3>About Journal</h3>
                                    <div class="support-content">

                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Aim and Scope</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Editors Instructions</a></li>
                                            <li><a href="e"><i class="fa fa-angle-right" aria-hidden="true"></i> Authors</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Reviewers</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Publications Charges</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Publications Ethics</a></li>
                                            <li><a class="view-more" href="Keywords/<?php echo $id; ?>/<?php echo $r; ?>">View more <i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!--Single Support End-->
                            <!--Single Support Start-->
                            <div class="col-md-6 col-lg-6">
                                <div class="single-support-area">
                                    <h3>Keywords</h3>
                                    <div class="support-content  support-content-keywords">

                                        <ul>
                                            <?php  
                                            $sql6 = "select * from keywords where journal_id='$id' limit 0,8";
                                            $result6 = mysqli_query($con,$sql6);
                                            while($row6 = mysqli_fetch_array($result6)){
                                                $kid = $row6['keyword_id'];
                                                $k = $row6['keyword'];
                                                $kname = str_replace(" ","-",$k);
                                                ?>
                                            
                                            
                                            <li><a href="keywords/<?php echo $id; ?>/<?php echo $kid ?>/<?php echo $kname; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php  echo $row6['keyword']; ?></a></li>
                                            <?php } ?>
                                            <!-- <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Atherosclerosis</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Heart arrhythmia</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Coronary Artery Disease</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Heart arrhythmia</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Coronary Artery Disease</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Coronary Artery Disease</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Heart arrhythmia</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Coronary Artery Disease</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Coronary Artery Disease</a></li> -->
                                            <li><a class="view-more" href="Keywords/<?php echo $id; ?>/<?php echo $r; ?>">View more <i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!--Single Support End-->
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <h3>Article In Press</h3>
                        <hr>
                        <!--Article Area Start-->
                        <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                            <div class="container container-1370">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <?php 
                                            $sql3 = "select * from articals where journal_id='$id' and status_type ='article_in_press' limit 0,2 ";
                                            $result3 = mysqli_query($con,$sql3);
                                            while( $row3 = mysqli_fetch_array($result3)){
                                            $t1 = $row3['artical_name'];
                                            $ar = str_replace(" ","-",$t1);
                                            ?>
                                            <div class="col-lg-6  nopadding">
                                                <div class="press-article">
                                                    <a href="articles/<?php echo $id; ?>/<?php echo $row3['artical_id']; ?>/<?php echo $ar; ?>"><?php echo $row3['artical_name']; ?></a>
                                                </div>
                                                <div class="auther-name">
                                                    <p><?php echo $row3['author_names']; ?></p>
                                                </div>
                                        <div class="download-pdf"><a href="download.php?artical_id=<?php echo $row3['pdf'] ?>"><img src="assets/images/PDF_32.png"></a></div>
                                            </div>
                                            <?php } ?>
                                            <!-- <div class="col-lg-6 nopadding">
                                                <div class="press-article ">
                                                    <a href="article.html">Phytochemistry and Antioxidant Activities of the Methanolic Leaf Extract of Clerodendrum splendens (Lamiaceae)</a>
                                                </div>
                                                <div class="auther-name">
                                                    <p>Nganso Ditchou Yves Oscar, Amang A Ngnoung GA, Soh Desire, Simo Nemg Fredy Brice and Nyasse Barthelemy</p>
                                                </div>
                                        <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                            </div> -->
                                        </div>
                                        <br>
                                        <div class="row">
                                        <?php 
                                            $sql4 = "select * from articals where journal_id='$id' and status_type ='article_in_press' limit 2,4 ";
                                            $result4 = mysqli_query($con,$sql4);
                                            while( $row4 = mysqli_fetch_array($result4)){ 
                                              $t3 = $row4['artical_name'];
                                            $ar2 = str_replace(" ","-",$t3);
                                            ?>
                                            <div class="col-lg-6 nopadding">
                                                <div class="press-article">
                                                    <a href="articles/<?php echo $id; ?>/<?php echo $row4['artical_id']; ?>/<?php echo $ar2; ?>"><?php echo $row4['artical_name'];?></a>
                                                </div>
                                                <div class="auther-name">
                                                    <p><?php echo $row4['author_names']; ?></p>
                                                </div>
                                        <div class="download-pdf"><a href="download.php?artical_id=<?php echo $row4['artical_short_name']; ?>"><img src="assets/images/PDF_32.png"></a></div>
                                            </div>
                                            <?php } ?>
                                            <!-- <div class="col-lg-6 nopadding">
                                                <div class="press-article">
                                                    <a href="article.html">A New Potent Anti-cancer Corosolic Ester Identified from the Super Miracle Plant Hippophae rhamnoides (Sea buckthorn)</a>
                                                </div>
                                                <div class="auther-name">
                                                    <p>Irfan Ali, Noor-ul-Ain Zahra, Reazuddin, Huma Sharif, Mudassar and Huma Aslam Bhatti</p>
                                                </div>
                                        <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"><?php echo $row7['artical_short_name']; ?></a></div>
                                            </div> -->
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12 nopadding">
                                                <h3>Indexing</h3>
                                                <section class="customer-logos slider">
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                                                    <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                                                </section>
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <div class="row">
                                            <div class="col-lg-12 nopadding">
                                                <h3>Editorial Board</h3>
                                                <section class="customer-logos slider">
                                                    <?php 
                                                    $sql5 = "select * from editors where journal_id='$id'";
                                                    $result5 = mysqli_query($con,$sql5);
                                                   while($row5 =mysqli_fetch_array($result5)){ ?> 
                                                    
                                                    <div class="slide"><img src="../edelweiss/upload/editor_images/<?php echo $row5['image']; ?>">
                                                        <a href="#">
                                                            <h5><?php echo $row5['first_name']; ?></h5>
                                                        </a>
                                                    </div>
                                            <?php } ?>
                                                    <!-- <div class="slide"><img src="assets/images/editorial-board/2.png">
                                                        <a href="#">
                                                            <h5>Sukhen Samanta</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/3.jpg">
                                                        <a href="#">
                                                            <h5>Kanhaiya L Poddar</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/4.png">
                                                        <a href="#">
                                                            <h5>Debabrata Dash</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/5.jpg">
                                                        <a href="#">
                                                            <h5>Vikas Singh</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/6.jpg">
                                                        <a href="#">
                                                            <h5>Ismail Ates</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/7.png">
                                                        <a href="#">
                                                            <h5>Carlos Antonio Rivas</h5>
                                                        </a>
                                                    </div>
                                                    <div class="slide"><img src="assets/images/editorial-board/8.png">
                                                        <a href="#">
                                                            <h5>Andrea M P Romani</h5>
                                                        </a>
                                                    </div> -->

                                                </section>
                                                <a style="float: right" class="view-more" href="keywords.php">View more <i class="icofont-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Article Area End-->
                    </div>
                </div>
            </div>
        </div>
        <!--All Support Area End-->
        <!--Article Area Start-->
        <div class="article-area section  pt-md-65 pt-sm-55 pt-xs-45 pb-70 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-20 mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">

                <div class="row">
                    <div class="col-md-12">
                        <h2 style="margin: o.5em 0px;">Latest published</h2>
                        <hr>
                        <div class="">
                            <div>
                                <!--Article Area Start-->
                                <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                    <div class="container container-1370">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <?php  
                                                    $sql7 = "select * from articals where journal_id='$id' and status_type='article_in_press' limit 0,4" ;
                                                    $result7 = mysqli_query($con,$sql7);
                                                    while($row7 = mysqli_fetch_array($result7)){ 
                                                    $tn = $row7['artical_name'];
                                                    $rn = str_replace(' ','-',$tn);
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row7['artical_id']; ?>/<?php echo $rn; ?>"><?php echo $row7['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row7['author_names']; ?></p>
                                                        </div>
                                                        <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article ">
                                                            <a href="article.html">Phytochemistry and Antioxidant Activities of the Methanolic Leaf Extract of Clerodendrum splendens (Lamiaceae)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nganso Ditchou Yves Oscar, Amang A Ngnoung GA, Soh Desire, Simo Nemg Fredy Brice and Nyasse Barthelemy</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">In Vitro Phytochemical Screening and Antioxidant Activity of Jamun (Eugenia jambolana Linn) Plants Parts Collected from Lahore, Pakistan</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nureen Zahra, Momna Nadir, Arif Malik, Ayesha Shaukat, Asia Parveen and Muhammad Tariq</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">A New Potent Anti-cancer Corosolic Ester Identified from the Super Miracle Plant Hippophae rhamnoides (Sea buckthorn)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Irfan Ali, Noor-ul-Ain Zahra, Reazuddin, Huma Sharif, Mudassar and Huma Aslam Bhatti</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                <?php  
                                                    $sql8 = "select * from articals where journal_id='$id' and status_type='article_in_press' limit 4,8" ;
                                                    $result8 = mysqli_query($con,$sql8);
                                                    while($row8 = mysqli_fetch_array($result8)){
                                                         $t8 = $row8['artical_name'];
                                                         $r8 = str_replace(' ','-',$t8);
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row8['artical_id']; ?>/<?php echo $r8; ?>"><?php echo $row8['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row8['author_names']; ?></p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Assessment of Programmed Cell Death of Aspergillus flavus by Triggered Cysteine-dependent Aspartate-directed Proteases (Meta-caspase3) Lethality Mechanism of Novel Compounds Isolated from Ethyl Acetate Extract of Spondias mombin</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Oludare Temitope Osuntokun, Olaposi I Omotuyi, Anthonia O Oluduro, Thomas O Idowu</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">CRISPR CUREs: Running with Molecular Scissors in the Classroom</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Emily R Siniscalco and Te-Wen Lo</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Article Area End-->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <h2 style="margin-top:1em  ">Top Cited</h2>
                        <hr>
                        <div class="">
                            <div>
                                <!--Article Area Start-->
                                <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                    <div class="container container-1370">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                <?php  
                                                    $sql9 = "select * from articals where journal_id='$id' and status_type='current_issue' limit 0,4" ;
                                                    $result9 = mysqli_query($con,$sql9);
                                                    while($row9 = mysqli_fetch_array($result9)){ 
                                                         $t9 = $row9['artical_name'];
                                                         $r9 = str_replace(' ','-',$t9);
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row9['artical_id']; ?>/<?php echo $r9; ?>"><?php echo $row9['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row9['author_names']; ?></p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=<?php $row9['artical_id']; ?>"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Neuro Effects of Opioids on the Human Brain</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Clairmont Griffith and Bernice La France</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article ">
                                                            <a href="article.html">Phytochemistry and Antioxidant Activities of the Methanolic Leaf Extract of Clerodendrum splendens (Lamiaceae)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nganso Ditchou Yves Oscar, Amang A Ngnoung GA, Soh Desire, Simo Nemg Fredy Brice and Nyasse Barthelemy</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">In Vitro Phytochemical Screening and Antioxidant Activity of Jamun (Eugenia jambolana Linn) Plants Parts Collected from Lahore, Pakistan</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nureen Zahra, Momna Nadir, Arif Malik, Ayesha Shaukat, Asia Parveen and Muhammad Tariq</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">A New Potent Anti-cancer Corosolic Ester Identified from the Super Miracle Plant Hippophae rhamnoides (Sea buckthorn)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Irfan Ali, Noor-ul-Ain Zahra, Reazuddin, Huma Sharif, Mudassar and Huma Aslam Bhatti</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                <?php  
                                                    $sql10 = "select * from articals where journal_id='$id' and status_type='current_issue' limit 4,8" ;
                                                    $result10 = mysqli_query($con,$sql10);
                                                    while($row10 = mysqli_fetch_array($result10)){
                                                      $t10 = $row10['artical_name'];
                                                         $r10 = str_replace(' ','-',$t10);
                                                    
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row10['artical_id']; ?>/<?php echo $r10; ?>"><?php echo $row10['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row10['author_names']; ?></p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=<?php echo $row10['artical_id']; ?>"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Assessment of Programmed Cell Death of Aspergillus flavus by Triggered Cysteine-dependent Aspartate-directed Proteases (Meta-caspase3) Lethality Mechanism of Novel Compounds Isolated from Ethyl Acetate Extract of Spondias mombin</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Oludare Temitope Osuntokun, Olaposi I Omotuyi, Anthonia O Oluduro, Thomas O Idowu</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">CRISPR CUREs: Running with Molecular Scissors in the Classroom</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Emily R Siniscalco and Te-Wen Lo</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Article Area End-->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <h2 style="margin-top:1em">Most Popular</h2>
                        <hr>
                        <div class="">
                            <div>
                                <!--Article Area Start-->
                                <div class="article-area  pt-lg-75 pt-md-60 pt-sm-55 pt-xs-45">
                                    <div class="container container-1370">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                <?php  
                                                    $sql11 = "select * from articals where journal_id='$id' and status_type='previous_issue' limit 0,4" ;
                                                    $result11 = mysqli_query($con,$sql11);
                                                    while($row11 = mysqli_fetch_array($result11)){
                                                    $t11 = $row11['artical_name'];
                                                    $r11 = str_replace(' ','-',$t11);
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row11['artical_id']; ?>/<?php echo $r11; ?>"><?php echo $row11['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row11['author_names']; ?></p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=<?php echo $row11['artical_id']; ?>"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Neuro Effects of Opioids on the Human Brain</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Clairmont Griffith and Bernice La France</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article ">
                                                            <a href="article.html">Phytochemistry and Antioxidant Activities of the Methanolic Leaf Extract of Clerodendrum splendens (Lamiaceae)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nganso Ditchou Yves Oscar, Amang A Ngnoung GA, Soh Desire, Simo Nemg Fredy Brice and Nyasse Barthelemy</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">In Vitro Phytochemical Screening and Antioxidant Activity of Jamun (Eugenia jambolana Linn) Plants Parts Collected from Lahore, Pakistan</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Nureen Zahra, Momna Nadir, Arif Malik, Ayesha Shaukat, Asia Parveen and Muhammad Tariq</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">A New Potent Anti-cancer Corosolic Ester Identified from the Super Miracle Plant Hippophae rhamnoides (Sea buckthorn)</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Irfan Ali, Noor-ul-Ain Zahra, Reazuddin, Huma Sharif, Mudassar and Huma Aslam Bhatti</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                <?php  
                                                    $sql12 = "select * from articals where journal_id='$id' and status_type='previous_issue' limit 4,8" ;
                                                    $result12 = mysqli_query($con,$sql12);
                                                    while($row12 = mysqli_fetch_array($result12)){
                                                    $t12 = $row12['artical_name'];
                                                    $r12 = str_replace(' ','-',$t12);
                                                    ?>
                                                    <div class="col-lg-3  nopadding">
                                                        <div class="press-article">
                                                            <a href="articles/<?php echo $id; ?>/<?php echo $row12['artical_id']; ?>/<?php echo $r12; ?>"><?php echo $row12['artical_name']; ?></a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p><?php echo $row12['author_names']; ?></p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=<?php echo $row12['artical_id']; ?>"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                        <!-- <div class="press-article">
                                                            <a href="article.html">Assessment of Programmed Cell Death of Aspergillus flavus by Triggered Cysteine-dependent Aspartate-directed Proteases (Meta-caspase3) Lethality Mechanism of Novel Compounds Isolated from Ethyl Acetate Extract of Spondias mombin</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Oludare Temitope Osuntokun, Olaposi I Omotuyi, Anthonia O Oluduro, Thomas O Idowu</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">CRISPR CUREs: Running with Molecular Scissors in the Classroom</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p>Emily R Siniscalco and Te-Wen Lo</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3 nopadding">
                                                        <div class="press-article">
                                                            <a href="article.html">Comparative Antiseptic Effects of Some Locally Used Plant Products on Isolated Skin Microorganisms</a>
                                                        </div>
                                                        <div class="auther-name">
                                                            <p> Olasan JO, Yandev D, Aguoru CU, Ukaonu C and Obaje C</p>
                                                        </div>
                                                <div class="download-pdf"><a href="download.php?artical_id=12"><img src="assets/images/PDF_32.png"></a></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Article Area End-->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <!--Article Area End-->
    <!--Footer section start-->
    <footer>

        <!--Footer Top start-->
        <div class="footer-top section light-green-bg pt-30  pt-md-130 pt-sm-120 pt-xs-50  pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
            <div class="container container-1370">
                <div class="row justify-content-xl-around justify-content-between content-between">
                    <!--Footer Widget Start-->
                    <div class="col-md-3">
                        <div class="single-footer-widget mb-35">
                            <h3 class="footer-title">About Us</h3>
                            <p>Edelweiss is an established peer-reviewed open access publisher with sole motive to promulgate the advancement of science among research communities online for free of charge. Edelweiss is supported by a network of reliable journals and societies as well as internationally renowned editorial board members. <br><span><a href="#">Read More...</a></span></p>
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


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script>
        $(function() {
            'use strict';
            // Start navbar 
            (function() {
                // Add class active when the user clicks the lis of the menu
                $('.nav .list li').on('click', 'a', function() {
                    $(this).parent().addClass('active').siblings().removeClass('active');
                });
                var openCategories = $('.nav #open-categories'),
                    categories = $('.drop-down');
                // Toggle categories on clicking
                openCategories.on('click', function() {
                    $("#" + $(this).data('dropdown')).toggleClass('show');
                    // When the user clicks the window if the categories is not the target, close it.
                    $(window).on('mouseup', function(e) {
                        if (categories.hasClass('show') && !categories.is(e.target) && categories.has(e.target).length === 0 && !openCategories.is(e.target)) {
                            console.log("d");
                            categories.removeClass('show');
                        }
                    });
                });
                // Toggle menu, This will be shown in Extra small screens only
                $('.nav .toggle-nav').on('click', function() {
                    $("#" + $(this).data('toggle')).slideToggle(300);
                });
            }());
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
</body>

</html>