<?php 
include "connect.php";
$id = $_GET['artical_id'];
$jid = $_GET['journal_id'];
$sql = "select * from articals where artical_id='$id'";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);

$sql2 = "select * from journal where id='$jid'";
$result2 = mysqli_query($con,$sql2);
$data2 = mysqli_fetch_array($result2);
$t = $data2['journal_title'];
$r = str_replace(' ','-',$t);

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
        *{
            text-align: justify;
        }
        .recomand-article{
            margin-bottom: 15px;
        }
        .recomand-article a{
            font-size: 14px;
    line-height: 1.5;
            color:#009EDD;
        }
        .recomand-article a:hover{
             color: #f79e02;
        }
        .recomand-article p{
            font-size: 14px;
            margin-bottom: 5px !important;
        }
        .default-header-area{
            -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
        }
        .artical-list li a{
            font-size: 14px;
            line-height: 1.5;
            color:#009EDD;
        }
        .artical-list li a:hover{
            color: #f79e02 !important;
        }
        .recomand-article{
            line-height: 20px;
        }
        .recomand-article img{
            max-width: 20%;
        }
        .article-sub-img li{
            display: inline-block;
                float: left;
                width: 30%;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .article-sub-img li a img{
            
        }
          /* Start navbar */
.nav {
  background-color: #f8f8f8;
  border-bottom: 1px solid #ececec;
  min-height: 50px;
  height: auto;
}
.nav .nav-heading {float: left}

.nav .nav-heading .toggle-nav {
  padding: 2px 10px;
  border-radius: 5px;
  border: none;
  display: none;
  background-color: transparent;
}
.nav .nav-heading > a {
  text-decoration: none;
  color: #000;
  line-height: 60px;
  font-weight: 400;
  font-size: 19px;
}

/* Start menu */
.nav .menu {
  float: left;
}
.nav .menu:after {
  content: "";
  clear: both;
  display: block;
}
.nav .list {
  float: right;
  margin: 0;
}
.nav .list > li {
  float: left;
  list-style: none;
}
.nav .list > li > a {
  color: #555;
  text-decoration: none;
  display: block;
  line-height: 60px;
  padding: 0 10px;
}
.nav .list > li > a:hover,
.nav .list > li.active > a {
  color: #333
}

/* Start drodpwn menu */
.categories {
  position: relative;
}
.nav .list .categories .drop-down {
  list-style: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #FFF;
  border: 1px solid #ccc;
  padding: 5px 0;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
  z-index: 99999
}
.nav .list .drop-down > .seprator {
  height: 1px;
  width: 100%;
  margin: 9px 0;
  background-color: #e5e5e5
}
.drop-down > li > a {
  color: #333;
  display: block;
  padding: 3px 20px;
  text-decoration: none;
}
.show {
  display: block
}

/* Sub dropdown menu */
.categories .drop-down .sub-drop-down {position: relative}
.categories .drop-down .sub-drop-down:hover .sub-dropdown {
  display: block;
}
.categories .drop-down .sub-dropdown {
  position: absolute;
  top: -20px;
  left: 107%;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 3px;
  padding: 10px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
}
.categories .drop-down .sub-dropdown:before {
  content: "";
  display: block;
  position: absolute;
  top: 20px;
  left: -20px;
  border-top: 10px solid transparent;
  border-left: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid #cccccc
}
.categories .drop-down .sub-dropdown > li > a {
  color: #555;
  padding: 5px 0;
  display: block
}
/* End sub dropdown menu */
/* Dark theme */
.dark-nav {background-color: #0068AB}

.dark-nav .list > li > a {color: #fff; padding: 0px 37px;}

.dark-nav .list > li > a:hover,
.dark-nav .list > li.active > a {color: #FFF}

.dark-nav .nav-heading > a {color: #EEE}

.dark-nav .nav-heading .toggle-nav {color: #EEE}

/* End Dark theme */

/* Start media query for navbar */
@media (max-width: 767px) {
    .input-group{
        margin-top: 15px;
    }
  .nav .container {
    padding-right: 0;
    padding-left: 0;
  }
  .nav .nav-heading {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    border-bottom: 1px solid #ffe7e7
  }
  .nav .nav-heading .brand {float: left}

  .nav .nav-heading .toggle-nav {
    display: block;
    float: right;
    margin-top: 14px;
  }

  .nav .menu {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    display: none;
  }

  .nav .list {
    float: left !important;
    width: 100%;
  }
  .nav .list > li {
    float: none;
    width: 100%;
  }
  .nav .list > li > a {padding: 12px 0;line-height: 1}

  .nav .list .categories .drop-down {
    background-color: transparent;
    border: none;
    position: static;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0
  }
  .categories .drop-down .sub-dropdown {
    position: static;
    background-color: transparent;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 20px;
  }
  .categories .drop-down .sub-dropdown > li > a {
    color: #ff8;
  }
  .categories .drop-down .sub-dropdown:before {
    display: none
  }
  /* Simple reset for dark theme */
  .dark-nav .menu {background-color: #ff28ff}
  .dark-nav .nav-heading {border-bottom-color: #0068AB}
  .dark-nav .list .drop-down > li > a {color: #AAA}
  .dark-nav .list .categories .drop-down .seprator {background-color: #2a2d38}

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
                                    <li><a href="index.php">Journals List</a>
                                    </li>
                                    <li><a href="article.php?artical_id=<?php echo $data['artical_id']; ?>">Articals</a>
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
        <!--Support section start-->
        <div class="Article-heading section pt-95 pt-lg-75 pt-md-65 pt-sm-60 pt-xs-50 pb-85 pb-lg-65 pb-md-55 pb-sm-45 pb-xs-40">
            <div class="container container-1370">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Outline</h4>
                        <ul class="artical-list">
                            <li><a href="#">Chemical Engineering</a></li>
                            <li><a href="#">Chemistry</a></li>
                            <li><a href="#">Computer Science</a></li>
                            <li><a href="#">Earth and Planetary Sciences</a></li>
                            <li><a href="#">Energy</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Materials Science</a></li>
                            <li><a href="#">Mathematics</a></li>
                            <li><a href="#">Physics and Astronomy</a></li>
                        </ul>
                        <br>
                        <div>
                            <h4>Figures</h4>
                            <ul class="article-sub-img">
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                                <li><a><img src="assets/images/dummy-article.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3><a href="journal.php?journal_id=<?php echo $data['journal_id']; ?>"><?php echo $data['artical_short_name']; ?></a></h3>
                        <p>Available online 18 May 2017</p>
                        <hr>
                        <div class="article-content">
                            <h4>Abstract</h4>
                            <p>
                            <?php echo $data['abstract']; ?>
                            </p>
                            <h4>Keywords</h4>
                            <p>
                            <?php echo $data['keywords']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Recommended articles</h4>
                        <?php $sql2 = "select * from articals limit 0,4";
                              $result2 = mysqli_query($con,$sql2);
                              while($row = mysqli_fetch_array($result2)){

                              
                        ?>
                        <div class="recomand-article">
                            <a href="articles/<?php echo $jid; ?>/<?php echo $row['artical_id']; ?>/<?php echo $r; ?>"> <?php echo $row['artical_name']; ?> </a>
                            <p><?php  echo $row['artical_short_name'];?>, Volume <?php echo $row['volume_number']; ?>, Issue <?php echo $row['issue_number']; ?>, <?php echo $data['year']; ?>, </p>
                            <a href="download.php?artical_id=<?php echo $row['artical_id']; ?>"><img src="assets/images/PDF_32.png">Download PDF</a>
                        </div>
                              <?php } ?>
                        <!-- <div class="recomand-article">
                            <a href="#">Biosynthesis of metallic nanoparticles using plant </a>
                            <p>Saudi Pharmaceutical Journal, Volume 24, Issue 4, 2016, </p>
                            <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                        </div> -->
                        <!-- <div class="recomand-article">
                            <a href="#">Biosynthesis of metallic nanoparticles using plant </a>
                            <p>Saudi Pharmaceutical Journal, Volume 24, Issue 4, 2016, </p>
                            <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                        </div> -->
                        <!-- <div class="recomand-article">
                            <a href="#">Biosynthesis of metallic nanoparticles using plant </a>
                            <p>Saudi Pharmaceutical Journal, Volume 24, Issue 4, 2016, </p>
                            <a href="#"><img src="assets/images/PDF_32.png">Download PDF</a>
                        </div> -->
                        <br>
                        <div>
                            <h4>Keywords</h4>
                        <ul class="artical-list">
                            <?php
                             $sqlk = "select * from keywords where journal_id = '$jid' limit 0,8";
                             $resultk = mysqli_query($con,$sqlk);
                             
                             while($rowk = mysqli_fetch_array($resultk)){ 
                              $kid = $rowk['keyword_id'];
                             $k = $rowk['keyword'];
                            $kname = str_replace(" ","-",$k);
                             ?>
                                
                            <li><a href="keywords/<?php echo $jid; ?>/<?php echo $kid ?>/<?php echo $kname; ?>""><?php echo $rowk['keyword']; ?></a></li> 
                        <?php }    ?>
                            
                            <!--<li><a href="#">Chemistry</a></li>-->
                            <!--<li><a href="#">Computer Science</a></li>-->
                            <!--<li><a href="#">Earth and Planetary Sciences</a></li>-->
                            <!--<li><a href="#">Energy</a></li>-->
                            <!--<li><a href="#">Engineering</a></li>-->
                            <!--<li><a href="#">Materials Science</a></li>-->
                            <!--<li><a href="#">Mathematics</a></li>-->
                            <!--<li><a href="#">Physics and Astronomy</a></li>-->
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Support section end-->

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