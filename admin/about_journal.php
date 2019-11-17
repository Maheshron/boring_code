<?php include("main.php"); 
$server=$_SERVER['REQUEST_URI'];
if (isset($_REQUEST['journal_id'])) {
        extract($_REQUEST);
	    $user->get_journaldetails($journal_id);
}
if(isset($_REQUEST['submit'])){
  extract($_REQUEST);
  $id = $_GET['journal_id'];
  $j_image = $_FILES['journal_image']['name'];
  $temp_j_image = $_FILES['journal_image']['tmp_name'];
  $j_logo = $_FILES['journal_logo']['name'];
  $temp_j_logo = $_FILES['journal_logo']['tmp_name'];
  if(empty($j_image)){

    $j_image = $user->journal_img;
    
    }
    if(empty($j_logo)){

      $j_logo =$user->journal_header_img;
      
      }
  
             move_uploaded_file($temp_j_image,"../edelweiss/upload/journal_logos/$j_image");
             move_uploaded_file($temp_j_logo,"../edelweiss/upload/journal_logos/$j_logo");
         
    $result = $user->update_journal(mysqli_real_escape_string($user->db,$id),mysqli_real_escape_string($user->db,$j_image),mysqli_real_escape_string($user->db,$j_logo),mysqli_real_escape_string($user->db,$journal_title),mysqli_real_escape_string($user->db,$journal_s_name),mysqli_real_escape_string($user->db,$journal_issn_no),mysqli_real_escape_string($user->db,$journal_email),mysqli_real_escape_string($user->db,$journal_url),mysqli_real_escape_string($user->db,$youtube_link),mysqli_real_escape_string($user->db,$journal_short_desc),mysqli_real_escape_string($user->db,$journal_home_page),mysqli_real_escape_string($user->db,$aims_scope_page),mysqli_real_escape_string($user->db,$meta_title),mysqli_real_escape_string($user->db,$meta_keywords),mysqli_real_escape_string($user->db,$meta_desc));
    if($result){
      echo "<script>window.open('$server','_self')</script>";
    }
    else{
       echo '<script> setTimeout(function () { swal("Error ! ","Something Went Wrong","error");}, 2000); </script>';
            } 
        
}

?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/forms/file-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:01 GMT -->
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
  <link rel="stylesheet" href="global/vendor/blueimp-file-upload/jquery.fileupload.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/dropify/dropify.min599c.css?v4.0.2">
     <link rel="stylesheet" href="global/vendor/summernote/summernote.min599c.css?v4.0.2">


  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <link rel="stylesheet" href="dist/summernote.css">
  <link rel="stylesheet" href="dist/summernote-bs4.css">
  <link rel="stylesheet" href="dist/summernote-lite.css">

  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
  <!-- <script src="tinymce/tinymce.min.js"></script> -->

<!-- <script>
tinymce.init({
    selector: 'textarea',

   
});
  </script> -->
  <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  <script>
   CKEDITOR.replace( 'journal_home_page' );
  </script> -->


<!--summernote -->
 <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition ">
  
<?php include("inner_sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">About Journal</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Journals</a></li>
        <li class="breadcrumb-item active">About Journal</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Dropify -->
      <div class="panel">
           <form method="post" action="" enctype="multipart/form-data" >
        <div class="panel-body container-fluid">
          <div class="row row-lg">
              <div class="col-xl-2 col-md-1"></div>
            <div class="col-xl-4 col-md-5">
            
              <!-- Example Default -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">Journal Logo</h4>
                <div class="example">
                  <input type="file" name="journal_logo"  id="input-file-now" data-plugin="dropify" data-default-file="../edelweiss/upload/journal_logos/<?php echo $user->journal_header_img; ?>"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-xl-4 col-md-5">
              <!-- Example Default Value -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">Journal Image</h4>
                <div class="example">
                  <input type="file" name="journal_image"  id="input-file-now-custom-1" data-plugin="dropify" data-default-file="../edelweiss/upload/journal_logos/<?php echo $user->journal_img; ?>"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default Value -->
            </div>
          </div>
            <div class="row">
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Journal Title</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_title" autocomplete="off" value="<?php echo $user->journal_title; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Short Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_s_name" autocomplete="off" value="<?php echo $user->journal_short_name; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter ISSN number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_issn_no" autocomplete="off" value="<?php echo $user->issn_number; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Journal E-mailid </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_email" autocomplete="off" value="<?php echo $user->journal_emailid; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Journal URL</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_url" autocomplete="off" value="<?php echo $user->journal_url; ?>">
                </div>
               
                
               
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Youtube Link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="youtube_link" autocomplete="off" value="<?php echo $user->journal_youtube_url; ?>">
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Journal Short Description</label>
                       <textarea id="summernote" name="journal_short_desc" ><?php echo $user->journal_short_description; ?></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Home Page</label>
                       <textarea id="summernote1"  name="journal_home_page" ><?php echo $user->journal_home_page; ?></textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Aims And Scope Page</label>
                       <textarea id="summernote2"  name="aims_scope_page" ><?php echo $user->journal_aim_scope; ?></textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Meta Title</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="meta_title" autocomplete="off" value="<?php echo $user->journal_meta_title; ?>">
                </div>
               
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Meta Keywords</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="meta_keywords" autocomplete="off" value="<?php echo $user->journal_meta_key; ?>">
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Meta Description</label>
                       
                    <textarea id="summernote3"  name="meta_desc" ><?php echo $user->journal_meta_desc; ?></textarea>
                </div>
                    
                <div class="form-group col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Save Journal</button>
                </div>
               
            
      </div>
            
            
            
        
      <!-- End Panel Dropify -->
      
    </div>
          </form>
  </div>
  <!-- End Page -->

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
  <script src="global/vendor/jquery-ui/jquery-ui.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-tmpl/tmpl.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-canvas-to-blob/canvas-to-blob.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-load-image/load-image.all.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-process599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-image599c.js?v4.0.2"></script>
   <script src="global/vendor/blueimp-file-upload/jquery.fileupload-audio599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-video599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-validate599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-ui599c.js?v4.0.2"></script>
  <script src="global/vendor/dropify/dropify.min599c.js?v4.0.2"></script>
    <!-- <script src="global/vendor/summernote/summernote.min599c.js?v4.0.2"></script>  -->

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
  <script src="global/js/Plugin/dropify.min599c.js?v4.0.2"></script>
    <!-- Important -->
 <script src="global/js/Plugin/summernote.min599c.js?v4.0.2"></script>

  <script src="assets/examples/js/forms/uploads.min599c.js?v4.0.2"></script>

  <script src="assets/examples/js/forms/editor-summernote.min599c.js?v4.0.2"></script>

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
           <script src="assets/js/sweetalert.js"></script>

           <!-- Summer Note CDN-->
<!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

 include summernote css/js -->
<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script> --> 

<script src="dist/summernote.min.js"> </script>
<script src="dist/summernote.js"> </script>
<script src="dist/summernote-lite.min.js"> </script>
<script src="dist/summernot-bs4.js"></script>






<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height: 200, 
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['font', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'hr','video']],
    ['view', ['fullscreen', 'codeview']],
    ['help', ['help']]
  ],
  });
  $('#summernote1').summernote({
    height: 200, 
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['font', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'hr','video']],
    ['view', ['fullscreen', 'codeview']],
    ['help', ['help']]
  ],
  });
  $('#summernote2').summernote({
    height: 200, 
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['font', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'hr','video']],
    ['view', ['fullscreen', 'codeview']],
    ['help', ['help']]
  ],
  });
  $('#summernote3').summernote({
    height: 200, 
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['font', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'hr','video']],
    ['view', ['fullscreen', 'codeview']],
    ['help', ['help']]
  ],
  });
});

</script>

</body>


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/forms/file-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:02 GMT -->
</html>