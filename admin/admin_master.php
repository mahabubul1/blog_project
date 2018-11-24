<?php 
   ob_start();
   session_start();
   $admin_id=$_SESSION['admin_id'];
   if($admin_id== NULL){
      header("Location:index.php");
   }
   if(isset($_GET['status'])){
      if($_GET['status']==logout){
         require '../classes/admin.php';
         $obl_admin=new admin();
         $obl_admin->logout();
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
      <meta name="description" content="Bootstrap Metro Dashboard">
      <meta name="author" content="Dennis Ji">
      <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link id="bootstrap-style" href="../assets/admin_end_assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/admin_end_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link id="base-style" href="../assets/admin_end_assets/css/style.css" rel="stylesheet">
      <link id="base-style-responsive" href="../assets/admin_end_assets/css/style-responsive.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="img/favicon.ico">
      <script type="text/javascript">
         function check_delete(){
          var check= confirm('Are you sure to this delete');
          if(check){
            return true;
          }else{
             return false;
          } 
         }
      </script>
   </head>
   <body>
      <!-- start: Header -->
      <?php require './include/heade-top.php'; ?>
      <!-- start: Header -->
      <div class="container-fluid-full">
         <div class="row-fluid">

            <!-- start: Main Menu -->
            <?php require './include/side_area.php'; ?>
            <!-- end: Main Menu -->

            <noscript>
            <div class="alert alert-block span10">
               <h4 class="alert-heading">Warning!</h4>
               <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
            </noscript>
            <!-- start: Content -->
          <div id="content" class="span10"> 
            <?php
            if (isset($pages)) {
               if($pages=='category'){
                   include './pages/category_content.php';
               }elseif($pages=='category_management'){
                   include './pages/category_management_content.php';
               }elseif($pages=='category_edit'){
                   include './pages/category_edit_content.php';
               }elseif($pages=='add_post'){
                   include './pages/add_post_content.php';
               }elseif ($pages=='post_management') {
                   include './pages/post_management_content.php';
                 }elseif($pages=='post_edit'){
                      include './pages/post_edit_content.php';
                 }elseif($pages=='title'){
                     include './pages/title_content.php';
                 }elseif($pages=='title_management'){
                      include './pages/title_management_content.php';
                 }elseif($pages=='logo_title_edit'){
                      include './pages/logo_title_edit_content.php';
                 }elseif($pages=='media'){
                    include './pages/media_content.php';
                 }elseIf($pages=="media_management"){
                      include './pages/media_management_content.php';
                 }elseif($pages=='media_edit'){
                     include './pages/media_edit_content.php';
                 }elseif($pages=='pages'){
                    include './pages/pages_content.php';
                 }elseif($pages=='management_pages'){
                    include './pages/management_pages_content.php';
                 }elseif($pages=='edit_pages'){
                     include './pages/edit_pages_content.php';
                  }elseif($pages=='inbox'){
                      include './pages/inbox_content.php';
                  }elseIf($pages=='view_pages'){
                     include './pages/view_pages_content.php';
                  }elseif($pages=="replymessage"){
                     include './pages/replymessage_content.php';
                  }elseif($pages=='add_user'){
                      include './pages/add_user_content.php';
                  }elseif($pages=='profile'){
                       include './pages/profile_content.php';
                  }elseif($pages=="user_list") {
                       include './pages/user_list_content.php';
                  }elseif($pages=='admin_list_view'){
                      include './pages/admin_list_view_content.php';
                  }elseIf($pages=='slider'){
                      include './pages/slider_content.php';
                  }elseif($pages=="slider_managemnt"){
                       include './pages/slider_management_content.php';
                  }elseif($pages=="edit_slider"){
                        include './pages/edit_slider_content.php';
                  }
                     
            }else {
               include './pages/admin_master_content.php';
            }
            ?>
            <!-- end: Content -->
         </div><!--/#content.span10-->
      </div><!--/fluid-row-->
      <div class="modal hide fade" id="myModal">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
         </div>
         <div class="modal-body">
            <p>Here settings can be configured...</p>
         </div>
         <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
         </div>
      </div>

      <div class="clearfix"></div>
      <?php require './include/footer.php'; ?>
      <script src="../assets/admin_end_assets/js/jquery-1.9.1.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery-migrate-1.0.0.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery-ui-1.10.0.custom.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.ui.touch-punch.js"></script>
      <script src="../assets/admin_end_assets/js/modernizr.js"></script>
      <script src="../assets/admin_end_assets/js/bootstrap.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.cookie.js"></script>
      <script src='../assets/admin_end_assets/js/fullcalendar.min.js'></script>
      <script src='js/jquery.dataTables.min.js'></script>
      <script src="../assets/admin_end_assets/js/excanvas.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.flot.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.flot.pie.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.flot.stack.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.flot.resize.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.chosen.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.uniform.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.cleditor.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.noty.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.elfinder.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.raty.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.iphone.toggle.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.uploadify-3.1.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.gritter.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.imagesloaded.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.masonry.min.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.knob.modified.js"></script>
      <script src="../assets/admin_end_assets/js/jquery.sparkline.min.js"></script>
      <script src="../assets/admin_end_assets/js/counter.js"></script>
      <script src="../assets/admin_end_assets/js/retina.js"></script>
      <script src="../assets/admin_end_assets/js/custom.js"></script>
   </body>
</html>
