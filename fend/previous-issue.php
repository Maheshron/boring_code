<?php
include "connect.php";
$id = $_GET['journal_id'];
$sql = "select * from articals where journal_id='$id' and status_type='previous_issue' limit 0,6";
$result = mysqli_query($con,$sql);

$sql2 = "select * from journal where id = $id";
$result2 = mysqli_query($con,$sql2);
$data2 = mysqli_fetch_array($result2);
$t = $data2['journal_title'];
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
        <base href="http://metrocoolsolutions.in/test2/newedeweles/fend/" />

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
                                    <li><a href="index.html">Journals List</a>
                                    </li>
                                    <li><a href="index.html">Articals</a>
                                    </li>
                                    <li><a href="index.html">Contact Us</a>
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
                            <li><a href="journals/<?php echo $id; ?>/<?php echo $r; ?>">Home</a></li>
          
          <li><a href="editorial-board/<?php echo $id; ?>/<?php echo $r; ?>">Editorial Panel</a></li>
          <li><a href="#">Manuscript Submissions</a></li>
          <li><a href="article-in-press/<?php echo $id; ?>/<?php  echo $r; ?>">Articles in Press</a></li>
          <li><a href="current_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Current Issue</a></li>
            
            <li><a href="journal_contact/<?php echo $id; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30 mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                <h1>Previous Issue</h1><br>
                <div class="row">
                    <div class="col-lg-9">
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                        <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h4>Research Article :</h4>
                                    <p><a href="<?php echo $row['doi_link']; ?>" target="_blank"><b><span>DOI Number:</span> <?php echo $row['doi_number']; ?></b></a></p>
                                    <h5><a href="article.php?artical_id=<?php echo $row['artical_id'];?>"><?php echo $row['artical_name']; ?></a></h5>
                                    <P class="name"><?php echo $row['author_names']; ?></P>
                                    <div class="Links-box">
                                        <?php
                                        $t1 = $row['artical_name'];
                                        $ar = str_replace(' ','-',$t1);
                                        ?>
                                        <a  href="articles/<?php echo $id; ?>/<?php echo $row['artical_id']; ?>/<?php echo $ar; ?>" class="btn btn-primary">Full Text</a>
                                        <a class="pdf-btn" href="download.php?artical_id=<?php echo $row['artical_id']; ?>" ><img src="assets/images/PDF_32.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h3>Abstract</h3>
                                    <p>
                                    <?php echo $row['abstract']; ?>
                                    </p>
                                     <a style="float: right" class="view-more" href="articles/<?php echo $id; ?>/<?php echo $row['artical_id']; ?>/<?php echo $ar; ?>" >View more <i class="icofont-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>

                            </div>
                        </div> -->
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="issue-section" style="box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);; padding: 20px">
                            <div class="row">

                                <div class=" col-lg-6 left-side">
                                    <h5>Research Article :</h5>
                                    <p><a href="#"><b>DOI Number: https://doi.org/10.33805/2639.6807.116</b></a></p>
                                    <h5><a href="#">CT Coronary Angiography versus Coronary Angiography to Detect Specificity and Sensitivity of CT Coronary</a></h5>
                                    <P><I>Sheref M Zaghloul, Walid Hassan*, Ashraf M Reda, Ghada M Sultan, Mohamed A Salah, Hassan O Balubid, Safia Inamurrahim, Khalid Tammam, Ahmad Zaatar, Mohammed S Gassar</I></P>
                                    <div class="Links-box">
                                        <a href="#" class="">Full Text</a>
                                        <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 right-side">
                                    <h4>Abstract</h4>
                                    <p>Background: Various diagnostic tests including conventional invasive coronary angiography and non-invasive Computed Tomography (CT) coronary angiography are used in the diagnosis of Coronary Artery Disease (CAD). Objective: The present report aims to evaluate the specificity and sensitivity of CT coronary angiography in diagnosis of coronary artery disease compared to the standard invasive coronary angiography.</p>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="col-lg-3">
                        <div class="keywords-sec">
                            <h3></h3>
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Keywords</h4>
                                <ul>

                                <?php  
                                            $sql6 = "select * from keywords where journal_id='$id' limit 0,8";
                                            $result6 = mysqli_query($con,$sql6);
                                            $row6 = mysqli_fetch_array($result6);
                                            while($row6 = mysqli_fetch_array($result6)){
                                                   $kid = $row6['keyword_id'];
                                              $k = $row6['keyword'];
                                              $kname = str_replace(" ","-",$k);
                                               ?> 
                                            
                                            <li><a href="keyword/<?php echo $id; ?>/<?php echo $kid ?>/<?php echo $kname; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php  echo $row6['keyword']; ?></a></li>
                                            <?php } ?>
                                    <!-- <li><a href="#"><i class="fa fa-file-text-o"></i> Hypertension</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Atherosclerosis</a></li>
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
                                    <li><a class="view-more" href="Keywords/<?php echo $id; ?>/<?php echo $r; ?>">View more <i class="icofont-long-arrow-right"></i></a></li>
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