<?php 
   session_start();
    if(isset($_SESSION['admin_id'])){
      header('Location:admin_master.php');
   }
   if(isset($_POST['login'])){
     require '../classes/admin.php';
     $obl_admin=new admin();
     $message=$obl_admin->admin_login_check($_POST);
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

      <style type="text/css">
         body { background: url(../assets/admin_end_assets/img/bg-login.jpg) !important; }
      </style>
   </head>
   <body>
      <div class="container-fluid-full">
         <div class="row-fluid">

            <div class="row-fluid">
               <div class="login-box">
                  <div class="icons">
                     <a href="index.html"><i class="halflings-icon home"></i></a>
                     <a href="#"><i class="halflings-icon cog"></i></a>
                  </div>
                  <h2>Login to your account</h2>
                  <h4 style="color:red; margin-left:20px"><?php if(isset($message)){   echo $message;    } ?></h4>
                  <form class="form-horizontal"  action="" method="post">
                     <fieldset>
                        <div class="input-prepend" title="your email">
                           <span class="add-on"><i class="halflings-icon user"></i></span>
                           <input class="input-large span10" name="email_address" id="email_address" type="email" placeholder="your gmail"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                           <span class="add-on"><i class="halflings-icon lock"></i></span>
                           <input class="input-large span10" name="password" id="password" type="password" placeholder="your password"/>
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                        <div class="button-login">	
                           <button type="submit" class="btn btn-primary" name="login" >Login</button>
                        </div>
                        <div class="clearfix"></div>
                  </form>
                  <hr>
                  <h3></h3>
                  <p style="text-align:center;">
                     <a  style="color:red; text-decoration: none" href="forget_password.php">Forgot Password !</a> 
                  </p>	
               </div><!--/span-->
            </div><!--/row-->
         </div><!--/.fluid-container-->
      </div><!--/fluid-row-->
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
