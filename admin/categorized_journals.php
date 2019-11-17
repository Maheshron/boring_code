<?php 
include "main.php";
$c  = $_GET['categories'];
$sc = $_GET['sub_categories'];

$sql = "select * from subcategories where cat_id = $c and s_cat_id=$sc";
$result = mysqli_query($user->db,$sql);
$data = mysqli_fetch_array($result);
// print_r($data);
// exit;
$journal_id =  explode(",",$data['journals']);


?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/apps/projects/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:46 GMT -->
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
<!--  <link rel="stylesheet" href="global/vendor/animsition/animsition.min599c.css?v4.0.2">-->
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="global/vendor/jquery-selective/jquery-selective.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/apps/projects.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition app-projects">
 
  <?php include("sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">All Journal</h1>
      <div class="page-header-actions">
       <!-- Site Action -->
  
     
  
     <!-- End Site Action -->

      </div>
    </div>

    <div class="page-content">
      
      <div class="projects-wrap">
        <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
          data-plugin="animateList" data-child=">li">
          
         <?php foreach($journal_id as $id): 
            $sql2 = "select * from journal where id=$id";
            $result2 = mysqli_query($user->db,$sql2);
            $data2 = mysqli_fetch_array($result2);
            ?>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b><?php echo $data2['journal_title']; ?> Journal</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="categorized_journals.php?sub_categories<?php echo $row['s_cat_id']; ?>?categories=<?php echo $c; ?>" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
         <?php endforeach; ?>







        </ul>
        
      </div>

     
    </div>
  </div>


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
  <script src="global/vendor/jquery-selective/jquery-selective.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootbox/bootbox.min599c.js?v4.0.2"></script>

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
  <script src="global/js/Plugin/animate-list.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/bootbox.min599c.js?v4.0.2"></script>


  <script src="assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="assets/js/App/Projects.min599c.js?v4.0.2"></script>

  <script src="assets/examples/js/apps/projects.min599c.js?v4.0.2"></script>


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


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/apps/projects/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:48 GMT -->
</html>
?>
