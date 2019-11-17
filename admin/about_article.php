<?php include "main.php";
$server=$_SERVER['REQUEST_URI'];
$id = $_GET['article_id'];
$journal_id = $_GET['journal_id'];
$user->get_journal_articles_byid($id);
if(isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $update = $user->update_journal_article($id,$journal_id,$volume_number,$issue_number,$status,$month,$year,$article_title,$article_short_name,$article_type,$doi_number,$doi_link,$university_name,$country,$author_name,$pdf_link,$full_text_link,$full_text,$aabstract,$abstract_link,$supplimentary_link,$enter_keywords,$starting_page_number,$ending_page_number,$enter_issn);
        if($update){
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
      <h1 class="page-title">About Article</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Articles</a></li>
        <li class="breadcrumb-item active">About Article</li>
      </ol>
      
    </div>

    <div class="page-content">
      <!-- Panel Dropify -->
      <div class="panel">
      <form method="post" action="">
        <div class="panel-body container-fluid">
            <div class="row">
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Volume Number</label>
                    <select class="form-control" name="volume_number">
                       <option>Select Volume</option>
                      
                       <option value="1" <?php if($user->volume_number  == 1){ ?> selected <?php } ?>>1</option>
                       <option value="2"  <?php if($user->volume_number == 2){ ?> selected <?php } ?>>2</option>
                       <option value="3"  <?php if($user->volume_number == 3){ ?> selected <?php } ?>> 3</option>
                       <option value="4"  <?php if($user->volume_number == 4){ ?> selected <?php } ?>>4</option>
                       <option value="5"  <?php if($user->volume_number == 5){ ?> selected <?php } ?>>5</option>
                       <option value="6"  <?php if($user->volume_number == 6){ ?> selected <?php } ?> >6</option>
                       <option value="7"  <?php if($user->volume_number == 7){ ?> selected <?php } ?>>7</option>
                       <option value="8"  <?php if($user->volume_number == 8){ ?> selected <?php } ?>>8</option>
                       <option value="9"  <?php if($user->volume_number == 9){ ?> selected <?php } ?>>9</option>
                       <option value="10"  <?php if($user->volume_number == 10){ ?> selected <?php } ?>>10</option>
                       <option value="11"  <?php if($user->volume_number == 11){ ?> selected <?php } ?>>11</option>
                       <option value="12"  <?php if($user->volume_number == 12){ ?> selected <?php } ?>>12</option>
                       <option value="13"  <?php if($user->volume_number == 13){ ?> selected <?php } ?>>13</option>
                       <option value="14"  <?php if($user->volume_number == 14){ ?> selected <?php } ?>>14</option>
                       <option value="15"  <?php if($user->volume_number == 15){ ?> selected <?php } ?>>15</option>
                       <option value="16"  <?php if($user->volume_number == 16){ ?> selected <?php } ?>>16</option>
                       <option value="17"  <?php if($user->volume_number == 17){ ?> selected <?php } ?>>17</option>
                       <option value="18"  <?php if($user->volume_number == 18){ ?> selected <?php } ?>>18</option>
                       <option value="19"  <?php if($user->volume_number == 10){ ?> selected <?php } ?>>19</option>
                       <option value="20"  <?php if($user->volume_number == 20){ ?> selected <?php } ?>>20</option>
                    </select>
                </div>
                 <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Issue Number</label>
                    <select class="form-control" name="issue_number">
                       <option>Select Issue</option>
                     
                       <option value="1"  <?php if($user->issue_number == 1){ ?> selected <?php } ?>>1</option>
                       <option value="2"  <?php if($user->issue_number == 2){ ?> selected <?php } ?>>2</option>
                       <option value="3"  <?php if($user->issue_number == 3){ ?> selected <?php } ?>>3</option>
                       <option value="4"  <?php if($user->issue_number == 4){ ?> selected <?php } ?>>4</option>
                       <option value="5"  <?php if($user->issue_number == 5){ ?> selected <?php } ?>>5</option>
                       <option value="6"  <?php if($user->issue_number == 6){ ?> selected <?php } ?>>6</option>
                       <option value="7"  <?php if($user->issue_number == 7){ ?> selected <?php } ?>>7</option>
                       <option value="8"  <?php if($user->issue_number == 8){ ?> selected <?php } ?>>8</option>
                       <option value="9"  <?php if($user->issue_number == 9){ ?> selected <?php } ?>>9</option>
                       <option value="10"  <?php if($user->issue_number == 10){ ?> selected <?php } ?>>10</option>
                       <option value="11"  <?php if($user->issue_number == 11){ ?> selected <?php } ?>>11</option>
                       <option value="12"  <?php if($user->issue_number == 12){ ?> selected <?php } ?>>12</option>
                       <option value="13"  <?php if($user->issue_number == 13){ ?> selected <?php } ?>>13</option>
                       <option value="14"  <?php if($user->issue_number == 14){ ?> selected <?php } ?>>14</option>
                       <option value="15"  <?php if($user->issue_number == 15){ ?> selected <?php } ?>>15</option>
                       <option value="16"  <?php if($user->issue_number == 16){ ?> selected <?php } ?>>16</option>
                       <option value="17"  <?php if($user->issue_number == 17){ ?> selected <?php } ?>>17</option>
                       <option value="18"  <?php if($user->issue_number == 18){ ?> selected <?php } ?>>18</option>
                       <option value="19"  <?php if($user->issue_number == 19){ ?> selected <?php } ?>>19</option>
                       <option value="20"  <?php if($user->issue_number == 20){ ?> selected <?php } ?>>20</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Status</label>
                    <select class="form-control" name="status">
                       <option>Select Status</option>
                       <option value="Complete"    <?php if($user->astatus == "Complete"){ ?> selected <?php } ?>>Complete</option>
                       <option value="InComplete"  <?php if($user->astatus == "InComplete"){ ?> selected <?php } ?>>InComplete</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Month</label>
                    <select class="form-control" name="month">
                       <option>Select Month</option>
                    
                       <option value="January" <?php if($user->month == "January"){ ?> selected <?php } ?>>January</option>
                       <option value="February" <?php if($user->month == "February"){ ?> selected <?php } ?>>February</option>
                       <option value="March" <?php if($user->month == "March"){ ?> selected <?php } ?>>March</option>
                       <option value="April" <?php if($user->month == "April"){ ?> selected <?php } ?>>April</option>
                       <option value="May" <?php if($user->month == "May"){ ?> selected <?php } ?>>May</option>
                       <option value="June" <?php if($user->month == "June"){ ?> selected <?php } ?>>June</option>
                       <option value="July" <?php if($user->month == "July"){ ?> selected <?php } ?>>July</option>
                       <option value="August" <?php if($user->month == "August"){ ?> selected <?php } ?>>August</option>
                       <option value="September" <?php if($user->month == "September"){ ?> selected <?php } ?>>September</option>
                       <option value="October" <?php if($user->month == "October"){ ?> selected <?php } ?>>October</option>
                       <option value="November" <?php if($user->month == "November"){ ?> selected <?php } ?>>November</option>
                       <option value="December" <?php if($user->month == "December"){ ?> selected <?php } ?>>December</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Year</label>
                    <select class="form-control" name="year">
                       <option>Select Year</option>
                       
                       <option value="2018" <?php if($user->year == 2018){ ?> selected <?php } ?>>2018</option>
                       <option value="2019" <?php if($user->year == 2019){ ?> selected <?php } ?>>2019</option>
                       <option value="2020" <?php if($user->year == 2020){ ?> selected <?php } ?>>2020</option>
                       <option value="2021" <?php if($user->year == 2021){ ?> selected <?php } ?>>2021</option>
                       <option value="2022" <?php if($user->year == 2022){ ?> selected <?php } ?>>2022</option>
                       <option value="2023" <?php if($user->year == 2023){ ?> selected <?php } ?>>2023</option>
                       <option value="2024" <?php if($user->year == 2024){ ?> selected <?php } ?>>2024</option>
                       <option value="2025" <?php if($user->year == 2025){ ?> selected <?php } ?>>2025</option>
                       <option value="2026" <?php if($user->year == 2026){ ?> selected <?php } ?>>2026</option>
                       <option value="2027" <?php if($user->year == 2027){ ?> selected <?php } ?>>2027</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Article Title</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="article_title" value="<?php echo $user->article_name; ?>" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Article Short Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="article_short_name" value="<?php echo $user->article_short_name; ?>" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Article Type</label>
                    <select class="form-control" name="article_type">
                       <option>Select Article Type</option>
                      
                       <option value="1" <?php if($user->article_type == 1){ ?> selected <?php } ?>>1</option>
                       <option value="2" <?php if($user->article_type == 2){ ?> selected <?php } ?>>2</option>
                       <option value="3" <?php if($user->article_type == 3){ ?> selected <?php } ?>>3</option>
                       <option value="4" <?php if($user->article_type == 4){ ?> selected <?php } ?>>4</option>
                       <option value="5" <?php if($user->article_type == 5){ ?> selected <?php } ?>>5</option>
                       <option value="6" <?php if($user->article_type == 6){ ?> selected <?php } ?>>6</option>
                       <option value="7" <?php if($user->article_type == 7){ ?> selected <?php } ?>>7</option>
                       <option value="8" <?php if($user->article_type == 8){ ?> selected <?php } ?>>8</option>
                       <option value="9" <?php if($user->article_type == 9){ ?> selected <?php } ?>>9</option>
                       <option value="10" <?php if($user->article_type == 10){ ?> selected <?php } ?>>10</option>
                    </select>
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Doi number </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="doi_number" value="<?php echo $user->doi_number; ?>" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Doi link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" value="<?php echo $user->doi_link; ?>" name="doi_link" autocomplete="off">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">University name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="university_name" value="<?php echo $user->university_name; ?>" autocomplete="off">
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
                        <input type="file" class="form-control" id="inputBasicFirstName" name="image[]"autocomplete="off">
                        <input type="button" class='btn btn-primary' onclick="add_file();" value="ADD MORE">
                </div>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Authors names</label>
                       <textarea id="summernote" name="author_name"><?php echo $user->author_names;?></textarea>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Pdf link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="pdf_link" value="<?php echo $user->pdf_link; ?>" name="inputFirstName" autocomplete="off">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Full text link </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="full_text_link" value="<?php echo $user->full_text_link; ?>" autocomplete="off">
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Full text </label>
                       <textarea id="summernote1" name="full_text" >
                       <?php echo $user->artical_content; ?>
                       </textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Abstract </label>
                       <textarea id="summernote2" name="aabstract">
                       <?php echo $user->articleabstract; ?>
                       </textarea>
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Abstract link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="abstract_link" value="<?php echo $user->abstract_link; ?>" autocomplete="off">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Supplimentary link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="supplimentary_link" value="<?php echo $user->supplimentry_link; ?>" autocomplete="off">
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Keywords</label>
                       <textarea id="summernote3"  name="enter_keywords">
                       <?php echo $user->articlekeywords; ?>
                       </textarea>
                </div>
              <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Starting Page number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="starting_page_number" value=<?php echo $user->start_page_number; ?> autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Ending Page number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="ending_page_number" value="<?php echo $user->end_page_number; ?>" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                        <label class="form-control-label" for="inputBasicFirstName">Enter ISSN</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="enter_issn" value="<?php echo $user->aissn_number; ?>" autocomplete="off">
                </div>
                <div class="form-group col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Save Article</button>
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