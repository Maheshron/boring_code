
<?php include "main.php"; ?>
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
      <h1 class="page-title">Add Editor</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Editors</a></li>
        <li class="breadcrumb-item active">Add Editor</li>
      </ol>
      
    </div>

    <div class="page-content">
        <form method="post" action="" enctype="multipart/form-data">
      <!-- Panel Dropify -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
              <div class="col-xl-2 col-md-2"></div>
            <div class="col-xl-4 col-md-6">
              <!-- Example Default -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">Profile pic</h4>
                <div class="example">
                  <input type="file" name="profile_pic" id="input-file-now" data-plugin="dropify" data-default-file="../edelweiss/upload/upload.png"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-xl-4 col-md-6">
              <!-- Example Default Value -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">University Logo</h4>
                <div class="example">
                  <input type="file" name="university_logo" id="input-file-now-custom-1" data-plugin="dropify" data-default-file="../edelweiss/upload/upload.png"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default Value -->
            </div>
          </div>
            <div class="row">
            <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Profile Pic Image Alternative Text</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="palttext" autocomplete="off"  required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">University Image Alternative Text</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="ualttext" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor First Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_firstname" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Last Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_lastname" autocomplete="off" required>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor University Name </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_universityname" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Email Address </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_emailaddress" autocomplete="off" required>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Designation</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_designation" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Type</label>
                    <select name="editor_type" class="form-control">
                       <option>Select Editor Type</option>
                       <option value="0">Editor</option>
                       <option value="1">Editor In Chief</option>
                    </select>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Search university</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_searchuniversity" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">University Url</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_universityurl" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Country Name</label>
                    <select name="editor_country" class="form-control">
                       <option>Select Country</option>
                      <?php 
                        $get = "select * from countries ";
                        $run = mysqli_query($user->db,$get);
                        while ($data=mysqli_fetch_assoc($run)) : ?>
                            <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                    <?php endwhile; ?>
                    </select>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Profile Url</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_profileurl" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Interview Url</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_interviewurl" autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Google scolar</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="editor_googlescolar" autocomplete="off">
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Editor Description</label>
                       <textarea id="summernote" name="editor_description" data-plugin="summernote"></textarea>
                </div>
                 
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Biography </label>
                       <textarea id="summernote2" name="editor_biography"  data-plugin="summernote"></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Research Interest</label>
                       <textarea id="summernote3" name="editor_researchinterest" data-plugin="summernote"></textarea>
                </div>
              
                <div class="form-group col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Add Editor</button>
                </div>
            </div>
        </div>
      </div>
      <!-- End Panel Dropify -->
      </form>
    
    
    </div>
  </div>
  <!-- End Page -->


  
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
    <script src="global/vendor/summernote/summernote.min599c.js?v4.0.2"></script>

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


  <script src="assets/examples/js/forms/uploads.min599c.js?v4.0.2"></script>


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
  $('#summernote4').summernote({
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
<?php

if(isset($_REQUEST['submit'])){
  $id = $_GET['journal_id'];
  extract($_REQUEST);
       $profile_image= $_FILES['profile_pic']['name'];
       $temp_profile_image = $_FILES['profile_pic']['tmp_name'];
       $university_logo = $_FILES['university_logo']['name'];
       $temp_unniversity_logo = $_FILES['university_logo']['tmp_name'];
       $allowed = array('jpeg','jpg','gif','png','JPEG','JPG','GIF','PNG');
       $profile_image_extension = pathinfo($profile_image, PATHINFO_EXTENSION);
        $university_logo_extension = pathinfo($university_logo,PATHINFO_EXTENSION);
           if(!in_array( $profile_image_extension,$allowed)){
                echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";
                     $$profile_image = "";
      }
              if(!in_array( $profile_image_extension,$allowed)){
                echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";
                       $uniniversity_image = "";
              }
              else{
      
                  move_uploaded_file($profile_image,"../edelweiss/upload/editor_images/$profile_image");
                  move_uploaded_file($university_logo,"../edelweiss/upload/editor_images/$university_logo");
$result = $user->add_editor($id,$profile_image,$university_logo,$editor_firstname,$editor_lastname,$editor_universityname,$editor_emailaddress,$editor_designation,$editor_type,$editor_searchuniversity,$editor_universityurl,$editor_country,$editor_profileurl,$editor_interviewurl,$editor_googlescolar,$editor_description,$editor_network,$editor_biography,$editor_researchinterest,$editor_interview,$palttext,$ualttext);
        if($result){
                  echo '<script> setTimeout(function () { swal("Success ! ","Editors Added Successfully","success");}, 2000); </script>';

        }
        else{
             echo '<script> setTimeout(function () { swal("Error ! "," Adding Failed","error");}, 2000); </script>';
        }
           }

}

?>