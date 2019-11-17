<?php
include "connect.php";
$id = $_GET['journal_id'];
$sql = "select * from editors where journal_id='$id' order by Position limit 0,1";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);



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
        .left-side{
            text-align: justify;
   
        }  
        .left-side h5{
            font-weight: bold;
        }
        .left-side h5 a{
            font-size: 18px;
        }
        .right-side{
            text-align: justify;

            
        }
        .right-side p{
            line-height: 16px;
        }
        .issue-section{
            margin-bottom: 30px;
        }
        .issue-section h5{
            color: #0068AB;
            font-weight: 400;
        }
        .left-side p span{
            font-size: 12px;
            
        }
        .issue-section p a{
        color: #f79e02;
            font-size: 12px;
        }
        .name{
            font-size: 14px;
            font-style: italic;
            line-height: 13px;
        }
        .badge{
            padding: 1em;
            font-size: 14px;
        }
        .editor-img img{
            width: 300px !important;
            height: 200px !important;
        }
        hr{
            border-top: 2px solid #0068AB;
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
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
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
                            <li><a href="index.php">Home</a></li>

                            <li><a href="editor-in-chief.php">Editorial Panel</a></li>
                            <li><a href="">Manuscript Submissions</a></li>
                            <li><a href="article-in-press.php?journal_id=<?php echo $id; ?>">Articles in Press</a></li>
                            <li><a href="currrnt-issue.php?journal_id=<?php echo $id; ?>">Current Issue</a></li>
                            <li><a href="previous-issue.php?journal_id=<?php echo $id; ?>">Previous Issue</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30 mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                <h1><b>Editor in chief</b></h1><br>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 editor-img">
                                <img src="../edelweiss/upload/editor_images/<?php echo $data['image']; ?>">
                                <br><br>
                                <img src="../edelweiss/upload/editor_images/<?php echo $data['university_logo']; ?>">
                            </div>
                            <div class="col-lg-9">
                                <div class="info">
                                    <h4><b><?php echo $data['first_name']; ?></b></h4>
                                    <p><?php echo $data['designation']; ?><br>
                                        <?php echo $data['editor_designation']; ?><br>
                                       
                                        <?php echo $data['editor_university']; ?><br>
                                        <?php echo $data['country_name']; ?> </p>
                                </div>
                                <br>
                                <br>
                                <div class="bio">
                                    <h3><b>Biography</b></h3>
                                    <hr>
                                    <p>
                                    <?php echo $data['biography']; ?>
                                    </p>
                                    <br>
                                    <h3><b>Research Interest</b></h3>
                                    <hr>
                                    <p>
                                    <?php echo $data['research_interest']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="sticky-sidebar" class="col-lg-3">
                        <div class="keywords-sec">
                            <h3></h3>
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Keywords</h4>
                                <ul>
                                <?php  
                                            $sql6 = "select * from digital_marketing where journal_id='$id' limit 0,8";
                                            $result6 = mysqli_query($con,$sql6);
                                            $row6 = mysqli_fetch_array($result6);
                                            $keywords = $row6['keywords'];
                                            $a = explode(",",$keywords);
                                            foreach($a as $key):
                                                
                                               ?> 
                                            
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php  echo $key; ?></a></li>
                                            <?php endforeach; ?>
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
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Vascular Medicine</a></li> -->
                                    <!--
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Wolff–Parkinson–White syndrome</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Electrocardiography</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Echocardiology</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac output</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Ischemic Heart Disease</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Care</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Interventional Cardiology</a></li>
-->
                                    <li><a class="view-more" href="keywords.html">View more <i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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