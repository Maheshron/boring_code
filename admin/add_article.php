<?php
include "main.php";
$server=$_SERVER['REQUEST_URI'];



if(isset($_REQUEST['journal_id'])){
  extract($_REQUEST);
}
 $insertValue = "";
if(isset($_REQUEST['submit'])){

  extract($_REQUEST);
  $altname  =   $_POST['alt'];
  
  $asn = $_POST['article_short_name'];
  $allowed  = array('pdf');
  $pdf_name = $_FILES['pdf']['name'];
  
  $r = $asn.".pdf";
  foreach($altname as $alt){
    $altn = $altn.",".$alt;
  }
  
  
  
  $pdf_temp_location = $_FILES['pdf']['tmp_name'];
  $pdf_extension = pathinfo($pdf_name,PATHINFO_EXTENSION);
  if(!in_array($pdf_extension,$allowed)){
    echo "<script> alert('Your Have Not uploaded a pdf file'); </script>";
   $pdf_name = "";
  }
  move_uploaded_file($pdf_temp_location,"../edelweiss/upload/artical_pdf/$pdf_name");
  
  rename("../edelweiss/upload/artical_pdf/".$pdf_name."","../edelweiss/upload/artical_pdf/".$r."");
  
  $targetDir = '../edelweiss/upload/artical_image/';
  $imageHolder = [];
  $allowedTypes = array('jpg','png','jpeg','gif');
  if(!empty(array_filter($_FILES['image']['name']))){
    foreach($_FILES['image']['name'] as $key=>$val){
      $fileName = basename($_FILES['image']['name'][$key]);
      $targetFilePath = $targetDir.$fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      if(in_array($fileType,$allowedTypes)){
        if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$targetFilePath)){
          
          $insertValue = $insertValue.",".$fileName; //$images_name =$images_name.",".$name;
          
        }
      }
    }
  }

 


  $result = $user->add_journal_article($journal_id,$r,$volume_number,$issue_number,$status,$month,$year,$article_title,$article_short_name,$article_type,$doi_number,$doi_link,$university_name,$country,$author_name,$pdf_link,$full_text_link,$full_text,$aabstract,$abstract_link,$supplimentary_link,$enter_keywords,$starting_page_number,$ending_page_number,$enter_issn,$insertValue,$imagealttext,$altn);
   if($result){
    echo '<script> setTimeout(function () { swal("Success ! ","Article Added Successfully","success");}, 2000); </script>';
  }
  else{
    echo '<script> setTimeout(function () { swal("Error ! ","Artical Adding Failed","error");}, 2000); </script>';
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
  <script type="text/javascript">
 
function add_file()
{

 $("#file_div").append("<div><input type='file' name='image[]'> <br> <input class='form-control' type='text' name='alt[]' placeholder='insert image alternative text'> <input type='button' class='btn btn-danger' value='REMOVE' onclick=remove_file(this);></div>");
}
function remove_file(ele)
{
 $(ele).parent().remove();
}
</script>
  <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
  <style>
  
  </style>
</head>
<body class="animsition ">
  
<?php include("inner_sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Add Article</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Articles</a></li>
        <li class="breadcrumb-item active">Add Article</li>
      </ol>
      
    </div>

    <div class="page-content">
      <!-- Panel Dropify -->
      <form method="post" action="" enctype="multipart/form-data">
      <div class="panel">
     
        <div class="panel-body container-fluid">
            <div class="row">
            
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Volume Number</label>
                    <select class="form-control" name="volume_number">
                       <option>Select Volume</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                       
                    </select>
                </div>
                 <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Issue Number</label>
                    <select class="form-control" name="issue_number">
                       <option>Select Issue</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Status</label>
                    <select class="form-control" name="status">
                       <option>Select Status</option>
                       <option value="Complete">Complete</option>
                       <option value="InComplete">InComplete</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Month</label>
                    <select class="form-control" name="month">
                       <option>Select Month</option>
                       <option value="January">January</option>
                       <option value="February">February</option>
                       <option value="March">March</option>
                       <option value="April">April</option>
                       <option value="May">May</option>
                       <option value="June">June</option>
                       <option value="July">July</option>
                       <option value="August">August</option>
                       <option value="September">September</option>
                       <option value="October">October</option>
                       <option value="November">November</option>
                       <option value="December">December</option>

                     </select>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Year</label>
                    <select class="form-control" name="year">
                       <option>Select Year</option>
                       <option value="2018">2018</option>
                       <option value="2019">2019</option>
                       <option value="2020">2020</option>
                       <option value="2021">2021</option>
                       <option value="2022">2022</option>
                       <option value="2023">2023</option>
                       <option value="2024">2024</option>
                       <option value="2025">2025</option>
                       <option value="2026">2026</option>
                       <option value="2027">2027</option>
                     </select>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Article Title</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="article_title" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Article Short Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="article_short_name" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Article Type</label>
                    <select class="form-control" name="article_type">
                       <option>Select Article Type</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                    </select>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Doi number </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="doi_number" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Doi link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="doi_link" autocomplete="off">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">University name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="university_name" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Country Name</label>
                        
                    <select class="form-control" name="country">
                    <option value="Country">SelectCountry</option>
                    <?php 
                        $get = "select * from countries ";
                        $run = mysqli_query($user->db,$get);
                        while ($data=mysqli_fetch_assoc($run)) : ?>
                            <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                    <?php endwhile; ?>
                     </select>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">PDF UPLOAD</label>
                        <input type="file" class="form-control" id="inputBasicFirstName" name="pdf" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                <div id="file_div">
                
                        <label class="form-control-label" for="inputBasicFirstName">Image Upload</label>
                        <input type="file" class="form-control" id="inputBasicFirstName" name="image[]" autocomplete="off">
                        <input type="button" class='btn btn-primary' onclick="add_file();" value="ADD MORE">
                </div>
                </div>
               
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Image Alternative Text</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="imagealttext" autocomplete="off">
                </div>

                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Authors names</label>
                       <textarea id="summernote"  name="author_name"></textarea>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Pdf link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="pdf_link" autocomplete="off">
                </div>
              
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Full text link </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="full_text_link" autocomplete="off">
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Full text </label>
                       <textarea id="summernote1"  name="full_text"></textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Abstract </label>
                       <textarea id="summernote2"  name="aabstract"></textarea>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Abstract link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="abstract_link" autocomplete="off">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Supplimentary link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="supplimentary_link" autocomplete="off">
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Keywords</label>
                       <textarea id="summernote3" name="enter_keywords" ></textarea>
                </div>
              <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Starting Page number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="starting_page_number" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Ending Page number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="ending_page_number" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Enter ISSN</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="enter_issn" autocomplete="off">
                </div>
                <div class="form-group col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Add Article</button>
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
  <!-- <script src="global/vendor/jquery-ui/jquery-ui.min599c.js?v4.0.2"></script>
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
    <script src="global/vendor/summernote/summernote.min599c.js?v4.0.2"></script> -->

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

<script src="assets/js/sweetalert.js"></script>
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