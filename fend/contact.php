<?php 
session_start();
include('connect.php');
$id = $_GET['journal_id'];
$sql  = "select * from journal where id=$id";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
$t = $data['journal_title'];
$r = str_replace(" ","-",$t);
// include "connect.php";
// if(isset($_POST['submit'])){
//         $name = $_POST['firstname'];
//         $lname = $_POST['lastname'];
//         $email = $_POST['email'];
//         $subject = $_POST['subject'];
//         $message1 = $_POST['message'];
//         $sql = "insert into contact(name,email,subject,message) values('$name','$email','$subject','$message1')";
//         $result = mysqli_query($con,$sql);
//         if($result){
//             echo "halloween";
//             $to = "maheshkumarvgs@gmail.com";
//             $from = $mail;
//             $message = $message1;
//             $headers = "From:".$from."<h4>'.$subject.'</h4>
//             <br>
//             <p>'.$message1.'</p>
//             "; 
//             mail($to,$from,$message,$headers);

//         }

// }


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
<li><a href="previous_issues/<?php echo $id; ?>/<?php  echo $r; ?>">Previous Issue</a></li>
<li><a href="journal_contact/<?php echo $id; ?>/<?php echo $r; ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <?php
        if(isset($_SESSION["Name"])){
            ?>
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thank you for contacting us! We will look forward to your message</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->
       <?php }
       else{?>

       <?php }
        ?>
           <?php
                include('connect.php');
                
                if(isset($_POST['submit'])){
                          $name = $_POST['firstname'];
                          $email = $_POST['email'];
                          $designation = $_POST['designation'];
                          $sub = $_POST['subject'];
                          $message = $_POST['message'];
                          $sql = "insert into contact(name,email,designation,subject,message) values('$name','$email','$designation','$sub','$message')";
                          $result = mysqli_query($con,$sql);
                          if($result){
                              ?> 
                                         <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thank you for contacting us! We will look forward to your message</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                              
                              <?php
                              $_SESSION['Name'] = "sent";
                              $to = "skshanawaz21@gmail.com";
                              $subject = $sub;
                              $message = "Thanks for subscribing";
                              $headers ="From ".$email;
                              mail($to,$subject,$message,$headers);
                          }
                          else{?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Something went wrong</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <?php }
                } 
           ?>
         <!--Contact Area Start-->
         <div class="contact-area section light-grey pt-90 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50  mt-lg-80 mt-md-70 mt-sm-60 mt-xs-50">
            <div class="container container-1370">
                <div class="row">
                    <div class="col-lg-9 col-12 ml-auto mr-auto">
                        <div class="contact-form-wrap">
                            <h2 class="contact-title">Leave us a message.</h2>
                            <form  action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="firstname" placeholder="Name*" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email*" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" contact-form-style mb-20">
                                            <select class="form-control form-control-sm" name="designation" required>
                                                <option value="">Select</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Associate Professor">Associate Professor</option>
                                                <option value="">Students</option>
                                                <option value="Research Personnel">Researcher</option>
                                                <option value="Medical Practitioner">Medical professional/Practitioner</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" contact-form-style mb-20">
                                            <select class="form-control form-control-sm" name="subject" required>
                                                <option value="">Select</option>
                                                <option value="OpenAccess Publication Fee">OpenAccess Publication Fee</option>
                                                <option value="Author Proof">Author Proof</option>
                                                <option value="Technical">Technical</option>

                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <textarea name="message" placeholder="Type your message here.." required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="form-button" name="submit" type="submit"><span>Send Email</span></button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Contact Area End-->
    
    
   
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
    <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {
       ...
    });
});
$('.alert').alert()
</script>
</body>

</html>