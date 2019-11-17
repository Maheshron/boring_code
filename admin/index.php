<?php include("main.php"); ?>

<?php if(isset($_SESSION['login'])){ ?>


<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/dashboard/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:07:13 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Edelweiss Dashboard</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="assets/css/site.min599c.css?v4.0.2">


  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="global/vendor/chartist/chartist.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/aspieprogress/asPieProgress.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/dashboard/ecommerce.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.min599c.css?v4.0.2">

 
  <!-- Scripts -->
  <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition ecommerce_dashboard">
  <?php include("sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title font-size-26 font-weight-100">Dashboard Overview</h1>
    </div>

    <div class="page-content container-fluid">
      <div class="row">
        <!-- First Row -->
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon wb-dashboard"></i>
              </button>
              <span class="ml-15 font-weight-500">Journals</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php $user->count_journals(); ?></span>
                  <p><a href="view_journals.php" class="font-weight-400 " style="float:right;color:#eb6709">View Journals >></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-danger">
                <i class="icon wb-image"></i>
              </button>
              <span class="ml-15 font-weight-400">Indexing</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php $user->count_indexing(); ?></span>
                  <p><a href="view_indexing.php" class="font-weight-400 " style="float:right;color:#ff4c52">View Indexings >></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-success">
                <i class="icon wb-file"></i>
              </button>
              <span class="ml-15 font-weight-400">Artical Types</span>
               <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php $user->count_articaltypes(); ?></span>
                  <p><a href="view_articletypes.php" class="font-weight-400 " style="float:right;color:#11c26d">View Article Types >></a></p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-primary">
                <i class="icon wb-user"></i>
              </button>
              <span class="ml-15 font-weight-400">Guest Users</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php $user->count_guestusers(); ?></span>
                  <p><a href="" class="font-weight-400" style="float:right;color:#3e8ef7">View Guest Users >></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-primary">
                <i class="icon wb-chat"></i>
              </button>
              <span class="ml-15 font-weight-400">Subscribers</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php $user->count_subscribe(); ?></span>
                  <p><a href="" class="font-weight-400 " style="float:right;color:#3e8ef7">View Subscribers >></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-success">
                <i class="icon wb-users"></i>
              </button>
              <span class="ml-15 font-weight-400">Admins</span>
               <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php echo $user->count_admin(); ?></span>
                  <p><a href="" class="font-weight-400 " style="float:right;color:#11c26d">View Admins >></a></p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-danger">
                <i class="icon wb-users"></i>
              </button>
              <span class="ml-15 font-weight-400">Editors</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php echo $user->count_editors(); ?></span>
                  <p><a href="" class="font-weight-400 " style="float:right;color:#ff4c52">View Editors >></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon wb-star"></i>
              </button>
              <span class="ml-15 font-weight-500">Keywords</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php echo $user->count_keywords(); ?></span>
                  <p><a href="" class="font-weight-400 " style="float:right;color:#eb6709">View Keywords >></a></p>
              </div>
            </div>
          </div>
        </div>
        
         <!-- End First Row -->

       
      </div>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
   
    <div class="site-footer-right">
      © 2019 <a href="http://edelweisspublications.com">Edelwesis Publications</a>
    </div>
  </footer>
  <!-- Core  -->
  <script src="global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2"></script>
  <script src="global/vendor/jquery/jquery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/popper-js/umd/popper.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2"></script>
  <script src="global/vendor/animsition/animsition.min599c.js?v4.0.2"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/intro-js/intro.min599c.js?v4.0.2"></script>
  <script src="global/vendor/screenfull/screenfull599c.js?v4.0.2"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2"></script>

  <!-- Plugins For This Page -->
  <script src="global/vendor/chartist/chartist.min599c.js?v4.0.2"></script>
  <script src="global/vendor/aspieprogress/jquery-asPieProgress.min599c.js?v4.0.2"></script>
  <script src="global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.js?v4.0.2"></script>

  <!-- Scripts -->
  <script src="global/js/Component.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin.min599c.js?v4.0.2"></script>
  <script src="global/js/Base.min599c.js?v4.0.2"></script>
  <script src="global/js/Config.min599c.js?v4.0.2"></script>

  <script src="assets/js/Section/Menubar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/Sidebar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/PageAside.min599c.js?v4.0.2"></script>
  <script src="assets/js/Plugin/menu.min599c.js?v4.0.2"></script>

  <!-- Config -->
  <script src="global/js/config/colors.min599c.js?v4.0.2"></script>
  <script src="assets/js/config/tour.min599c.js?v4.0.2"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->
  <script src="assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/asscrollable.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/slidepanel.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/switchery.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/aspieprogress.min599c.js?v4.0.2"></script>


  <script src="assets/examples/js/dashboard/ecommerce.min599c.js?v4.0.2"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/dashboard/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:07:15 GMT -->
</html>

<?php } 
else{
  header('Location:login.php');
}
?>

