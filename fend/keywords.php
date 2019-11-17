<?php
include "connect.php";
$id = $_GET['journal_id'];

$sql = "select * from journal where id = '$id'";
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
          <li><a href="article-in-press/<?php echo $id; ?>/<?php  echo $r; ?>">Articles in Press</a></li>
          <li><a href="current_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Current Issue</a></li>
            <li><a href="previous_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Previous Issue</a></li>
            <li><a href="journal_contact/<?php echo $id; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-70 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-20  mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!--Arcive Content Start-->
                        <div class="arcive-content">
                            <h3>Keywords List</h3>
                            <p>Installation quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut laboe et doloreagnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi aliquid ex ea commodi consequatur? Quis autem vel eum iure </p>
                            <p>Rrem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut laboe et dolore gnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                            <div class="single-list-arcive mb-20">
                                <h4>Getting started</h4>
                                <ul>
                                        <?php $sql = "select * from keywords where journal_id='$id'";
                                              $result = mysqli_query($con,$sql);
                                              while($row = mysqli_fetch_array($result)){
                                                  $kid = $row['keyword_id'];
                                                  $kname = $row['keyword'];
                                                  $d = $kname;
                                                  $rn = str_replace(" ","-",$d);
                                        
                                        ?>
                                    <li><a href="keyword/<?php echo $id; ?>/<?php echo $kid; ?>/<?php echo $rn; ?>"><i class="fa fa-file-text-o"></i><?php echo $row['keyword']; ?></a></li>
                                    <?php } ?>
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Atherosclerosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart arrhythmia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary Artery Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardio geriatrics</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Takotsubo cardiomyopathy</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Atrial fibrillation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac fibrosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary angioplasty</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Tumors</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiomyopathy</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Stroke</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac sarcoidosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac rehabilitation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> cardiac neurosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Vascular Medicine</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Wolff–Parkinson–White syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Electrocardiography</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Echocardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac output</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ischemic Heart Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Care</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Interventional Cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Angina</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Acute aortic syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Tachycardia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary thrombosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Hypoxia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ductus arteriosus</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ventricular fibrillation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Atrial Flutter</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Hypotension</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Mitral regurgitation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Congestive heart failure</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Tricuspid valve Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac pacemaker</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac muscle</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Bradycardia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary stent</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Hypertensive emergency</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Peripheral Artery Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac catheterization</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Arrest</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiopulmonary Resuscitation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac ablation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiovascular Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Aortic valve stenosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Valvuloplasty</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Mitral valve stenosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Renin-Angiotensin System</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart Transplant</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiopulmonary bypass</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary artery fistula</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Mitral valve replacement</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Aortic valve replacement</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Pulmonary valve replacement</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Implantable cardioverter-defibrillator</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ebstein anomaly</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart murmurs</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Hypoplastic left heart syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Percutaneous coronary intervention</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Catheter ablation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Enlarged Heart- Cardiomegaly</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac lipomas</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart palpitations</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Pericardial effusion</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Mitral valve prolapse</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Chordae tendineae</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac remodeling</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Atrial myxoma</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Prehypertension</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiometabolic syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiorenal syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac perfusion scan</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Acute myocardial infarction</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Myocardial ischemia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary calcium scan</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Congenital cardiac malformation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary sinus</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac MRI</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac markers</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Troponin</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac amyloidosis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart Overload</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary artery ectasia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary artery spasm</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Left ventricular thrombus</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardioplegia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiogenic pulmonary edema</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Cachexia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cyanotic heart disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Barlow syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ventricular tachycardia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Sick sinus syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac electrophysiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardioversion</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Supraventricular tachycardia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Pediatric cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Carvedilol</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac Axis</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac tamponade</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Pulse pressure</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Fetal arrhythmia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Complete heart block</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Holter monitor</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Event recorder</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Rheumatic heart disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Defibrillation</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Ejection fraction</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Tilt table test</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiac arrhythmia</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Intravascular Ultrasound</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Valve-sparing aortic root replacement</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary angiography</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Revised Cardiac Risk Index</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Carcinoid Heart Disease</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Preventive Cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cineangiography</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Cardiovascular Pharmacology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Heart valve surgery</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Coronary artery bypass grafting</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Aortic dissection</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Arrhythmia management</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Invasive cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Non-invasive cardiology</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Superior vena cava syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Mitral Valve</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Tricuspid valve</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Aortic valve</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Pulmonary valve</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Superior Vena Cava</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Inferior Vena Cava</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Brugada syndrome</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-file-text-o"></i> Wellens syndrome</a></li>-->
                                </ul>
                            </div>

                        </div>
                        <!--Arcive Content End-->
                    </div>
                    <div id="sticky-sidebar" class="col-lg-3">
                        <div class="info-right-sidebar">
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <div class="news-latter-box">
                                    <p>To get latest update and news regularly</p>
                                    <h4><span>Subscribe</span> <br> our Newsletter now</h4>
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                                <button id="mc-submit" class="df-btn">Subscribe</button>
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
                                <h4>Indexing</h4>
                                <div class="indexing-img">
                                    <div class="row">
                                        <div class="col-lg-6"><img src="assets/images/indexing/academia-logo.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/crossref.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/doi.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/drji-logo.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/google.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/icmje.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/mendeley-logo.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/publons.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/refseek-logo.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/research-bib.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/road-issn.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/scilitlogo-white.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/wcosj.jpg"></div>
                                        <div class="col-lg-6"><img src="assets/images/indexing/worldcat-logo.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Single Sidebar Widget End-->
                             <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Top Articals</h4>
                                <ul>
                                    <?php 
                                    $sqltop = "select * from articals where journal_id='$id' limit 5";
                                    $resulttop = mysqli_query($con,$sqltop);
                                       while($datatop = mysqli_fetch_array($resulttop)){
                                           $t = $datatop['artical_name'];
                                           $rn = str_replace(' ','-',$t);
                                    ?>
                                    <li><a href="articles/<?php echo $id; ?>/<?php echo $datatop['artical_id']; ?>/<?php echo $rn; ?>"><?php echo $datatop['artical_name']; ?></a></li>
                                    <?php } ?>
                                    <!--<li><a href="#">Articals 2</a></li>-->
                                    <!--<li><a href="#">Articals 3</a></li>-->
                                    <!--<li><a href="index-5.html">Articals 4</a></li>-->
                                    <!--<li><a href="#">Articals 5</a></li>-->
                                    <!--<li><a href="#">FArticals 6</a></li>-->
                                </ul>
                            </div>
                            <!--Single Sidebar Widget End-->
                            <!--Single Sidebar Widget Start-->
                            <div class="single-sidebar-widget mb-30 mb-xs-20">
                                <h4>Featured Articles</h4>
                                <ul>
                                      <?php 
                                    $sqltop1 = "select * from articals where journal_id='$id' and status_type='current_issue' limit 5";
                                    $resulttop1 = mysqli_query($con,$sqltop1);
                                       while($datatop1 = mysqli_fetch_array($resulttop1)){
                                      $t1 = $datatop1['artical_name'];
                                      $rn1 = str_replace(' ','-',$t1); ?>
                                    <li><a href="articles/<?php echo $id; ?>/<?php echo $datatop1['artical_id']; ?>/<?php echo $rn1; ?>"><?php echo $datatop1['artical_name']; ?></a></li>
                                    <?php } ?>
                                    <!--<li><a href="#">How to add a new demo in this Template</a></li>-->
                                    <!--<li><a href="#">Directory Structure</a></li>-->
                                    <!--<li><a href="#">Discount offer</a></li>-->
                                    <!--<li><a href="#">Release new Version 1.2.7 which fix all the problem of the template</a></li>-->
                                </ul>
                            </div>
                            <!--Single Sidebar Widget End-->
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