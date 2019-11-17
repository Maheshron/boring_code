<?php 
include "connect.php";
$sql = "select * from journal limit 0,5";
$result = mysqli_query($con,$sql);
$sql1 = "select * from journal limit 5,9";
$result1 = mysqli_query($con,$sql1);

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

        .journal-heading{
            background-color: #009EDD;
        }
        .journal-heading h1{
            color: #fff;
        }
        .call-to-action{
            min-height: 400px;
        }
        .call-to-action ul{
            padding-top: 20px;
        }
        .call-to-action ul li a{
            padding: 10px 0px;
        }
        .call-to-action ul li a i{
            position: relative;
            top:5px;
            padding-right: 5px;
            font-weight: bold;
            font-size: 30px;
            color: #f79e02;
        }
        .nav-tabs {
    border-bottom: 3px solid #dee2e6;
}
        .nav-tabs .nav-link{
            font-size: 16px;
            text-align: left;
        }
        .nav-tabs .nav-link:hover{
            color: #f79e02;
        }
        .nav-tabs .nav-link.active {
            font-size: 18px;
    color: #fff;
    background-color: #fff;
            background-color: #f79e02;
    border-color: #dee2e6 #dee2e6 #fff;
}
        .auther-name p{
            font-style: italic;
        }
        .press-article a{
            font-size: 18px;
        }
        .tab-content{
            padding: 20px 0px;
        }
        .form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}
        .head{
            line-height: 1.333;
            color: #505050;
            font-size: 1.8rem;
        }
        .top-section{
            width: 50%;
            margin: 0 auto;
        }
        .sub-section{
            margin: 50px 0px;
        } 
        .main-title{
            border-bottom: 1px solid #66b833;
    display: inline-block;
    width: 100%;
   // margin-bottom: 10px;
    //padding-bottom: 15px;
    color: #2b96cc;
    line-height: 20px;
        }
        .single-list-arcive li a{
            font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    display: block;
    padding: 10px 10px 10px 35px;
    cursor: pointer;
    background-color: #7ec8fd;
            margin-bottom: 5px;
        }
        .sec-1{
            margin: 2em 0px;
        }
        .right-sec{
            padding-top: 30px;
        }
        .active{
            color:red !important;
        }
        .top-img-area{
            background-image: url(assets/images/banner-journal.jpg);
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
                                    <li><a href="journal-list-book.php">Journals List</a>
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
        <div class="top-img-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30  mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                
            </div>
        </div>
        <!--Arcive Area Start-->
        <div class="arcive-area section light-grey pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30  mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Arcive Content Start-->
                        <div class="arcive-content">
                            <h3> All Journals</h3>
                            <p>Installation quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut laboe et doloreagnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi aliquid ex ea commodi consequatur? Quis autem vel eum iure </p>
                            <p>Rrem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut laboe et dolore gnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-list-arcive mt-20">
                                            <ul> <?php while($row = mysqli_fetch_array($result)){ ?>
                                                <li><a href="journal.php?journal_id=<?php echo $row['id']; ?>"><i class="fa fa-angle-double-right"></i> <?php echo $row['journal_title']; ?></a></li>
                                            <?php } ?>
                                                <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Biochemistry and Modern Applications </a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Nursing and Health Care</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Dental Research and Management</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Edelweiss Psychiatry Open Access</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Edelweiss Pharma Analytica Acta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Pharmacovigilance and Pharmacoepidemiology</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Clinical Cardiology and Cardiovascular Medicine</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-list-arcive mt-20">

                                            <ul>
                                            <?php while($row1 = mysqli_fetch_array($result1)){ ?>
                                                <li><a href="journal.php?journal_id=<?php echo $row1['id']; ?>"><i class="fa fa-angle-double-right"></i><?php echo $row1['journal_title'];?></a></li>
                                                <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Journal of heterocyclics</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Journal of Obesity & Diabetes</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Nanomaterial Chemistry and Technology</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Edelweiss Cancer Open Access</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Edelweiss Chemical Science Journal</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Edelweiss Journal of AIDS</a></li> -->
                                            <?php  } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="sub-section ">
                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div  class="main-title">
                                                    <h3 id="biomedicine" style="color: #2B96CC">Biomedicine</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="chemistry" style="color: #2B96CC">Chemistry</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="materials" style="color: #2B96CC">Materials Science</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="medicine" style="color: #2B96CC">Medicine</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="neurology" style="color: #2B96CC">Neurology</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="pharmacy" style="color: #2B96CC">Pharmacy</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="radiology" style="color: #2B96CC">Radiology</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sec-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 id="dentistry" style="color: #2B96CC">Dentistry</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-list-arcive mt-20">

                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the expert starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the available gulp tasks?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> What is the basic starter?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to get started?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to update to a new version?</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i> How to add a 3rd-party plugin?</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 article-area grey-bg right-sec" id="sticky-sidebar">

                                <!--Single Article Start-->
                                <div class="single-article mb-30">
                                    <h4 style="color: #2B96CC">Browse By Topics</h4>
                                    <ul class="list-of-article">
                                        <li><a href="article.html"><i class="fa fa-angle-double-right"></i>Physical Sciences and Engineering</a> </li>
                                        <li><a href="article.html"><i class="fa fa-angle-double-right"></i>Life Sciences</a> </li>
                                        <li><a href="article.html"><i class="fa fa-angle-double-right"></i>Health Sciences</a> </li>
                                        <li><a href="article.html"><i class="fa fa-angle-double-right"></i>Social Sciences and Humanities</a> </li>
                                    </ul>
                                    <br>
                                    <br>
                                    <div id="navbar-example2">
                                    <h4 style="color: #2B96CC">Browse By Subjects</h4>
                                    <ul class="list-of-article">
                                        <li><a class="nav-link1" href="#biomedicine"><i class="fa fa-angle-double-right"></i>Biomedicine</a> </li>
                                        <li><a class="nav-link1" href="#chemistry"><i class="fa fa-angle-double-right"></i>Chemistry</a> </li>
                                        <li><a class="nav-link1" href="#dentistry"><i class="fa fa-angle-double-right"></i>Dentistry</a> </li>
                                        <li><a class="nav-link1" href="#materials"><i class="fa fa-angle-double-right"></i>Materials Science</a> </li>
                                        <li><a class="nav-link1" href="#medicine"><i class="fa fa-angle-double-right"></i>Medicine</a> </li>
                                        <li><a class="nav-link1" href="#neurology"><i class="fa fa-angle-double-right"></i>Neurology</a> </li>
                                        <li><a class="nav-link1" href="#pharmacy"><i class="fa fa-angle-double-right"></i>Pharmacy</a> </li>
                                        <li><a class="nav-link1" href="#radiology"><i class="fa fa-angle-double-right"></i>Radiology</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Single Article End-->
                        </div>
                    </div>
                    <!--Arcive Content End-->
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
                                        <a href="https://plus.google.com/">
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
            $(document).ready(function() {
    $(".nav-link1").click(function() {
        var t = $(this).attr("href");
        $('.active').removeClass('active');
        $("html, body").animate({
            scrollTop: $(t).offset().top - 50
        }, {
            duration: 1e3,
        });

        $('body').scrollspy({ target: '#navbar-example2',offset: $(t).offset().top });
        $(this).parent().addClass('active');





        return false;
    });

});



//navbar
var distance = $('#site-header').offset().top,
    $window = $(window);

$window.scroll(function() {
    if ( $window.scrollTop() >= distance ) {
        $('#site-header').addClass('fixed-nav')
    }
    if ( $window.scrollTop() <= distance ) {
        $('#site-header').removeClass('fixed-nav')
    }
});


$('body').scrollspy({ target: '#navbar-example2',offset: 0 });
        </script>
</body>

</html>