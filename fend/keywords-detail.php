<?php include "connect.php";
   $id = $_GET['keyword_id'];
   $jid = $_GET['journal_id'];
   $kname  = $_GET['keyword_title'];
   $sql = "select * from keywords where keyword_id='$id'";
   $result = mysqli_query($con,$sql);
   $data = mysqli_fetch_array($result);
   
   
   
   
   $sql3 = "select * from journal where id='$jid'";
   $result3 = mysqli_query($con,$sql3);
   $data3 = mysqli_fetch_array($result3);
   $t = $data3['journal_title'];
   $r = str_replace(" ","-",$t);
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
        .left-side{
            text-align: justify;
   
        }  
        .left-side h5{
            font-weight: bold;
        }
        .right-side{
            text-align: justify;

            
        }
        .issue-section{
            margin-bottom: 30px;
        }
        .issue-section h5{
            color: #0068AB;
            font-weight: 400;
        }
        .issue-section p a{
        color: #f79e02;
        }
        .issue-section p{
            
        }
        .badge{
            padding: 1em;
            font-size: 14px;
        }
        .content{
            text-align: justify;
        }
        .recomand-article{
            border-bottom:1px solid #dedede;
            margin-top: 15px;
            padding-bottom: 10px;
        }
        .arti{
            color: #e9711c;
        }
        .recomand-article a img{
            width: 20px;
            margin-right: 5px;
        }
        .Links-box a:first-child{
            margin-right: 20px;
        }
        
        .Links-box a{
            font-size: 14px;
        }        
        .recomand-article p{
            font-size: 12px;
        }
        
        /*================
    Style5
==================*/
.tc-member-style5 {position: relative;-webkit-transform: translateY(0);transform: translateY(0);-webkit-transition: all .15s cubic-bezier(0, 0, 0, 0.1);transition: all .15s cubic-bezier(0, 0, 0, 0.1);margin-bottom: 51px;border-bottom: 1px solid rgba(0, 0, 0, 0.03);}
.tc-member-style5 .member-icons {position: absolute;top: 100%;padding: 12px 15px;right: 0;width: 100%;-webkit-box-shadow: 0 10px 40px 0 rgba(0, 0, 0, 0.08);box-shadow: 0 10px 40px 0 rgba(0, 0, 0, 0.08);}
.tc-member-style5 .member-icon i {font-size: 11px;color: rgb(0, 0, 0);margin: 0 2px;height: 26px;border-right: 2px solid rgba(0, 0, 0, 0.18);width: 26px;line-height: 26px;text-align: center;-webkit-transition: all .25s cubic-bezier(0.43, 0.44, 0.63, 0.61);transition: all .25s cubic-bezier(0.43, 0.44, 0.63, 0.61);border-radius: 50%;}
.tc-member-style5 .member-info {padding: 15px 20px 11px;background: #fff;}
.tc-member-style5 .member-name {font-size: 16px;margin: 0;}
.tc-member-style5 span.member-role {font-size: 12px;display: block;}
.tc-member-style5:hover {-webkit-transform: translateY(-10px);transform: translateY(-10px);}
.tc-member-style5 .member-icon i:hover {background: #000;color: #fff;}
        .sec-spacer{
            margin-top: 2em;
        }
        .title{
            margin: 1em 0px;
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
                                    <li><a href="journal-list.php">Journals List</a>
                                    </li>
                                    <li><a href="index.html">Articals</a>
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
                            <li><a href="journals/<?php echo $jid; ?>/<?php echo $r; ?>">Home</a></li>

                            <li><a href="editorial-board/<?php echo $jid; ?>/<?php echo $r; ?>">Editorial Panel</a></li>
                            <li><a href="#">Manuscript Submissions</a></li>
                            <li><a href="article-in-press/<?php echo $jid; ?>/<?php  echo $r; ?>">Articles in Press</a></li>
                            <li><a href="current_issues/<?php echo $jid; ?>/<?php  echo $r; ?>">Current Issue</a></li>
                            <li><a href="previous_issues/<?php echo $jid; ?>/<?php  echo $r; ?>">Previous Issue</a></li>
                            <li><a href="journal_contact/<?php echo $jid; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30 mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">

                <div class="row">

                    <div class="col-lg-3">
                        <div class="keywords-sec">
                            <img src="assets/images/keywords/hypertension.jpg">
                            <h3></h3>
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Keywords</h4>
                                <ul>
                                <?php 
                                
                                $sql2 = "select * from keywords where journal_id = $jid";
                                     $result2 = mysqli_query($con,$sql2);
                                     while($row2 = mysqli_fetch_array($result2)){
                                         $kid = $row2['keyword_id'];
                                          $kname = $row2['keyword'];
                                          $d = str_replace(" ","-",$kname);
                                         ?>
                                  
                                    <li><a href="keyword/<?php echo $jid; ?>/<?php echo $kid; ?>/<?php echo $d; ?>"><i class="fa fa-file-text-o"></i><?php  echo $row2['keyword']; ?></a></li>
                                    <?php 
                                    }
                                ?>
                                    <!-- <li><a href="#"><i class="fa fa-file-text-o"></i> Atherosclerosis</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Heart arrhythmia</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Coronary Artery Disease</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardio geriatrics</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Takotsubo cardiomyopathy</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Atrial fibrillation</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac fibrosis</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Coronary angioplasty</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Tumors</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiomyopathy</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Heart</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Stroke</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiology</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac sarcoidosis</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac rehabilitation</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> cardiac neurosis</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Vascular Medicine</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Wolff–Parkinson–White syndrome</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Electrocardiography</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Echocardiology</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac output</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Ischemic Heart Disease</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Care</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Interventional Cardiology</a></li> -->
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="content">
                                    <h3><?php echo $data['keyword']; ?></h3>
                                    <p><?php echo $data['description']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4>Highly Accessed Articles List</h4>
                                <?php $sql3 = "select * from articals where journal_id =$jid limit 0,5 ";
                                      $result3 = mysqli_query($con,$sql3);
                                      while($row3 = mysqli_fetch_array($result3)){
                                          $t1 = $row3['artical_name'];
                                          $ar = str_replace(" ","-",$t1);
                                      
                                ?>
                                <div class="recomand-article">
                                    <h5>Research Article :</h5>
                                    <a class="arti" href="articles/<?php echo $jid; ?>/<?php  echo $row3['artical_id'];?>/<?php echo $ar; ?>"> <?php echo $row3['artical_short_name']; ?> </a>
                                    <p><i><?php echo $row3['author_names']; ?></i></p>
                                    <div class="Links-box">
                                        <a href="articles/<?php echo $id; ?>/<?php  echo $row3['artical_id'];?>/<?php echo $ar; ?>" class="">Full Text <i class="icofont-long-arrow-right"></i></a>
                                        <a href="download.php"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                      <?php } ?>
                                <!-- <div class="recomand-article">
                                    <h5>Research Article :</h5>
                                    <a class="arti" href="#">New Trend of Cardiac Myxoma - Case Series and Systematic Review </a>
                                    <p><i>Junhong Gui, Aadil Maqsood, Saroj Khadka, Kenneth Rodriguez, George Everett</i></p>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text <i class="icofont-long-arrow-right"></i></a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div> -->
                                <!-- <div class="recomand-article">
                                    <h5>Research Article :</h5>
                                    <a class="arti" href="#">New Trend of Cardiac Myxoma - Case Series and Systematic Review </a>
                                    <p><i>Junhong Gui, Aadil Maqsood, Saroj Khadka, Kenneth Rodriguez, George Everett</i></p>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text <i class="icofont-long-arrow-right"></i></a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div> -->
                                <!-- <div class="recomand-article">
                                    <h5>Research Article :</h5>
                                    <a class="arti" href="#">New Trend of Cardiac Myxoma - Case Series and Systematic Review </a>
                                    <p><i>Junhong Gui, Aadil Maqsood, Saroj Khadka, Kenneth Rodriguez, George Everett</i></p>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text <i class="icofont-long-arrow-right"></i></a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div> -->

                                <br>
                                <div>
                                </div>
                            </div>
                        </div>
                        <!-- Member Style5 Start -->
                        <section class="sec-spacer sec-color">
                            <div class="container">
                                <h3 class="title ">Editorial Board</h3>
                                <div class="spacer3"></div>
                                <div class="row">
                                    <?php 
                                      $sql4 = "select * from editors where journal_id=$jid limit 0,4";
                                      $result4 = mysqli_query($con,$sql4);
                                      while($row4 = mysqli_fetch_array($result4)){
                                    ?>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="tc-member-style5 member-align-center">
                                            <div class="member-photo">
                                                <img src="../edelweiss/upload/editor_images/<?php echo $row4['image'] ;?>" alt="Jhon Smith">
                                                <div class="member-icons">
                                                    <a href="#" title="twitter" class="member-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#" title="google plus" class="member-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="#" title="facebook" class="member-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </a><a href="#" title="tumblr" class="member-icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h3 class="member-name"> <?php echo $row4['designation']; ?></h3>
                                                <span class="member-role"><?php echo $row4['editor_designation']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                      <?php } ?>
                                    <!-- <div class="col-md-3 col-sm-6">
                                        <div class="tc-member-style5 member-align-center">
                                            <div class="member-photo">
                                                <img src="assets/images/editorial-board/2.png" alt="Jhon Smith">
                                                <div class="member-icons">
                                                    <a href="#" title="twitter" class="member-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#" title="google plus" class="member-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="#" title="facebook" class="member-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </a><a href="#" title="tumblr" class="member-icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h3 class="member-name">Sukhen Samanta</h3>
                                                <span class="member-role">Senior Resident</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="tc-member-style5 member-align-center">
                                            <div class="member-photo">
                                                <img src="assets/images/editorial-board/3.jpg" alt="Jhon Smith">
                                                <div class="member-icons">
                                                    <a href="#" title="twitter" class="member-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#" title="google plus" class="member-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="#" title="facebook" class="member-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </a><a href="#" title="tumblr" class="member-icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h3 class="member-name">Kanhaiya L Poddar</h3>
                                                <span class="member-role">Department of Cardiovascular Medicine</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="tc-member-style5 member-align-center">
                                            <div class="member-photo">
                                                <img src="assets/images/editorial-board/4.png" alt="Jhon Smith">
                                                <div class="member-icons">
                                                    <a href="#" title="twitter" class="member-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#" title="google plus" class="member-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="#" title="facebook" class="member-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </a><a href="#" title="tumblr" class="member-icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h3 class="member-name">Debabrata Dash</h3>
                                                <span class="member-role">Consultant Interventional Cardiologist</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                        <!-- Member Style5 End -->
                    </div>
                </div>
            </div></div>
            <!--Arcive Area End-->
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
                                <p>Edelweiss is an established peer-reviewed open access publisher with sole motive to promulgate the advancement of science among research communities online for free of charge. Edelweiss is supported by a network of reliable journals and societies as well as internationally renowned editorial board members.  <br><span><a href="#">Read More...</a></span></p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <!--Footer Widget Start-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Quick Links</h3>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
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
</body>

</html>