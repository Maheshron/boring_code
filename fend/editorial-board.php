<?php  include "connect.php" ;

$id = $_GET['journal_id'];
$sql = "select * from journal where id = $id";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
$t = $data['journal_title'];
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
        .author-details-block {
    position: relative;
    padding: 3rem;
    background: var(--color-white);
}
        
        .red {
  color: red;
}
.no-padding { 
  padding: 0px;
}
.inline {
  display: inline;
}
.inline-block {
  display: inline-block;
}

.card-row {
  width: 100%; 
  border: 1px solid #ccc;  
  border-radius: 2px;
  padding: 10px; 
  height:auto;
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
 
}
.card-header {
  font-size: 1rem; 
  font-weight: bold;
}
.card__image__container {
  
  
}
.card__body__short-text {
  height: 120px
}
.card__body__short-text div {
   height: 30px;
}
.card__body__text {
  display: block;
  display: -webkit-box;
  max-width: 100%;
  height: 100px;
  font-size: 15px;
  line-height: 1.4;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.col-md-9 div ul {
  padding: 7px;
}
        .uni-img img{
            position: absolute;
    top: 30px;
    right: 10px;
    height: 150px;
    width: 150px;
        }
.card__footer {
  border-top: 1px solid #ccc; 
  padding: 5px;
  margin-top: 20px;
}
.card__footer__short-text {
  font-weight: bold;
  width: 100%; 
  height: 100%;
}
@media (max-width: 410px) {
  .card__footer__short-text {
    font-size: 12px;
    padding-bottom: 4px;
  }  
}
       
        .issue-section {
            margin-bottom: 3em;
        }
        .reviewer-board-name h4{
            font-weight: bold;
        }
        .btn-primary {
            background-color:#0068AB !important;
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
                            <li><a href="article-in-press/<?php echo $id; ?>/<?php echo $r; ?>">Articles in Press</a></li>
                            <li><a href="current_issues/<?php echo $id; ?>/<?php echo $r; ?>">Current Issue</a></li>
                            <li><a href="previous_issues/<?php echo $id; ?>/<?php echo $r; ?>">Previous Issue</a></li>
                            <li><a href="journal_contact/<?php echo $id; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30 mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                <h1>Editorial Board</h1><br>
                <div class="row">
                    <div class="col-lg-7">
                        <?php 
                         $sql = "select * from editors where journal_id='$id'";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="issue-section light-grey">
                            <div class="row  card-row">
                                <div class="col-md-3 col-xs-4 card__image__container">
                                    <img src="../edelweiss/upload/editor_images/<?php echo $row['image']; ?>" />
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <div>
                                        <h2 class=" "><?php echo $row['first_name']; ?></h2>
                                    </div>
                                    <div class="card__body__short-text">

                                        <p class="card__body__text">
                                            <br>
                                            <?php echo $row['editor_designation']; ?><br>
                                            <?php echo $row['editor_university']; ?><br>
                                            <?php echo $row['country_name']; ?>
                                        </p>

                                        <div class="uni-img">
                                            <img src="../edelweiss/upload/editor_images/<?php echo $row['image']; ?>" />
                                        </div>
                                    </div>
                                    <div class="card__footer row  clear-fix">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <span>
                                                 <a type="submit" class="btn btn-primary " href="editor.php?editor_id=<?php echo $row['editor_id']; ?>&journal_id=<?php echo $id; ?>">Biography</a>
                                            </span>
                                        </div>
                                        <div class="col-md-6 text-center col-xs-12">
                                            <p class="card__footer__short-text">

                                            </p>
                                        </div>
                                        <div class="col-md-3 text-right col-xs-4 hidden-sm hidden-xs">
                                            <span>
                                                <button type="submit" class="btn btn-primary ">Research Intrest</button>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
         <?php } ?>
                        <!--<div class="issue-section light-grey">-->
                        <!--    <div class="row  card-row">-->
                        <!--        <div class="col-md-3 col-xs-4 card__image__container">-->
                        <!--            <img src="assets/images/editorial-board/list/1.jpg" />-->
                        <!--        </div>-->
                        <!--        <div class="col-md-9 col-xs-12">-->
                        <!--            <div>-->
                        <!--                <h2 class=" ">Krishnan Balasubramanian</h2>-->
                        <!--            </div>-->
                        <!--            <div class="card__body__short-text">-->

                        <!--                <p class="card__body__text">-->
                        <!--                    Professor Emeritus<br>-->
                        <!--                    Department of Biochemistry<br>-->
                        <!--                    Arizona State University<br>-->
                        <!--                    United States-->
                        <!--                </p>-->

                        <!--                <div class="uni-img">-->
                        <!--                    <img src="assets/images/editorial-board/univercity-img/1.jpg" />-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="card__footer row  clear-fix">-->
                        <!--                <div class="col-md-3 hidden-xs hidden-sm">-->
                        <!--                    <span>-->
                        <!--                        <button type="submit" class="btn btn-primary ">Biography</button>-->
                        <!--                    </span>-->
                        <!--                </div>-->
                        <!--                <div class="col-md-6 text-center col-xs-12">-->
                        <!--                    <p class="card__footer__short-text">-->

                        <!--                    </p>-->
                        <!--                </div>-->
                        <!--                <div class="col-md-3 text-right col-xs-4 hidden-sm hidden-xs">-->
                        <!--                    <span>-->
                        <!--                        <button type="submit" class="btn btn-primary ">Research Intrest</button>-->

                        <!--                    </span>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="issue-section light-grey">
                            <!--<div class="row  card-row">-->
                            <!--    <div class="col-md-3 col-xs-4 card__image__container">-->
                            <!--        <img src="assets/images/editorial-board/list/1.jpg" />-->
                            <!--    </div>-->
                                <!--<div class="col-md-9 col-xs-12">-->
                                    <!--<div>-->
                                    <!--    <h2 class=" ">Krishnan Balasubramanian</h2>-->
                                    <!--</div>-->
                                    <!--<div class="card__body__short-text">-->

                                    <!--    <p class="card__body__text">-->
                                    <!--        Professor Emeritus<br>-->
                                    <!--        Department of Biochemistry<br>-->
                                    <!--        Arizona State University<br>-->
                                    <!--        United States-->
                                    <!--    </p>-->

                                    <!--    <div class="uni-img">-->
                                    <!--        <img src="assets/images/editorial-board/univercity-img/1.jpg" />-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="card__footer row  clear-fix">
                                        <!--<div class="col-md-3 hidden-xs hidden-sm">-->
                                        <!--    <span>-->
                                        <!--        <button type="submit" class="btnbtn-primary ">Biography</button>-->
                                        <!--    </span>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-6 text-center col-xs-12">-->
                                        <!--    <p class="card__footer__short-text">-->

                                        <!--    </p>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-3 text-right col-xs-4 hidden-sm hidden-xs">-->
                                        <!--    <span>-->
                                        <!--        <button type="submit" class="btn btn-primary ">Research Intrest</button>-->

                                        <!--    </span>-->
                                        <!--</div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2>Reviewer Board</h2>
                        <?php 
                        $sql1 = "select *  from reviewer where journal_id ='$id'";
                        $result1 = mysqli_query($con,$sql1);
                        while($row1 = mysqli_fetch_array($result1)){
                        
                        ?>
                        <div class="recomand-article reviewer-board-name">
                            <h4><?php echo $row1['name']; ?></h4>
                            
                            <p>
                                <?php echo $row1['reviewer_designation']; ?>
                                <?php echo $row1['university_name']; ?>
                                <?php echo $row1['country']; ?> </p>
                        </div><br>
                        <?php } ?>
                        <!--<div class="recomand-article reviewer-board-name">-->
                        <!--    <h4>Krishnan Balasubramanian</h4>-->
                            
                        <!--    <p>Professor Emeritus-->
                        <!--        Department of Biochemistry-->
                        <!--        Arizona State University-->
                        <!--        United States </p>-->
                        <!--</div><br>-->
                        <!--<div class="recomand-article reviewer-board-name">-->
                        <!--    <h4>Krishnan Balasubramanian</h4>-->
                            
                        <!--    <p>Professor Emeritus-->
                        <!--        Department of Biochemistry-->
                        <!--        Arizona State University-->
                        <!--        United States </p>-->
                        <!--</div><br>-->
                        <!--<div class="recomand-article reviewer-board-name">-->
                        <!--    <h4>Krishnan Balasubramanian</h4>-->
                            
                        <!--    <p>Professor Emeritus-->
                        <!--        Department of Biochemistry-->
                        <!--        Arizona State University-->
                        <!--        United States </p>-->
                        <!--</div>-->
                        <!--<br>-->
                        <div>
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