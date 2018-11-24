<?php 
   include_once 'classes/aplication.php';
   include_once 'helper/formate.php';
   $obj_app=new aplication();
   $obj_frm= new formate();
   $title="Blog website";
   if(isset($_GET['id'])){
      $pages_id=$_GET['id'];
      $result=$obj_app->show_page_info($pages_id);
   }elseif(isset($_GET['id'])){
    $category_id=$_GET['id'];
    $cat_result=$obj_app->select_category_name($category_id);
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <?php if(isset($result)){ 
         while ($pages_info=$result->fetch_assoc()) {?>
         <title> <?php echo $title;?> /<?php echo $pages_info['pages_name'];?> </title>
      <?php } }elseif(isset($cat_result)){
          while ($category_info=$cat_result->fetch_assoc()) {?>
          <title> <?php echo $title; ?> /<?php echo $category_info['category_name'];?> </title>
      <?php } } else{ ?>
         <title><?php echo $title;?> /<?php echo $obj_frm->title();?></title>
       <?php }?>
      <meta name="language" content="English">
      <meta name="description" content="It is a website about education">
      <meta name="keywords" content="blog,cms blog">
      <meta name="author" content="Delowar">
      <link rel="stylesheet" href="assets/font_end_assets/css/font-awesome.css">	
      <link rel="stylesheet" href="assets/font_end_assets/css/nivo-slider.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="assets/font_end_assets/css/style.css">
      <script src="assets/font_end_assets/js/jquery.js" type="text/javascript"></script>
      <script src="assets/font_end_assets/js/jquery.nivo.slider.js" type="text/javascript"></script>

      <script type="text/javascript">
         $(window).load(function () {
            $('#slider').nivoSlider({
               effect: 'random',
               slices: 10,
               animSpeed: 500,
               pauseTime: 5000,
               startSlide: 0, //Set starting Slide (0 index)
               directionNav: false,
               directionNavHide: false, //Only show on hover
               controlNav: false, //1,2,3...
               controlNavThumbs: false, //Use thumbnails for Control Nav
               pauseOnHover: true, //Stop animation while hovering
               manualAdvance: false, //Force manual transitions
               captionOpacity: 0.8, //Universal caption opacity
               beforeChange: function () {},
               afterChange: function () {},
               slideshowEnd: function () {} //Triggers after all slides have been shown
            });
         });
      </script>
   </head>

   <body>
      <?php include './include/header.php';?>
      <?php include './include/navication_menu.php';?>
      <div class="contentsection contemplete clear">
        <?php 
         if(isset($pages)){
            if($pages=='about'){
               require './pages/about_content.php'; 
            }elseif($pages=='contact'){
              require './pages/contact_content.php'; 
            }elseif($pages=='post_details'){
               include './pages/post_details_contetent.php';
            }elseif($pages=='posts'){
               include './pages/posts_contetent.php';
            }elseif($pages=='404'){
                include './pages/404_content.php';
              }elseif($pages=='mobile'){
                require './pages/mobile_content.php'; 
              }elseif($pages=='technoly') {
                require './pages/technoly_content.php'; 
              }
         }else{
           require './pages/home_content.php';
         }
        
        ?>
      <?php include './include/right_area.php';?>
      </div>
     
      <?php include './include/footer.php';?>
      <div class="fixedicon clear">
         <a href="http://www.facebook.com"><img src="assets/font_end_assets/images/fb.png" alt="Facebook"/></a>
         <a href="http://www.twitter.com"><img src="assets/font_end_assets/images/tw.png" alt="Twitter"/></a>
         <a href="http://www.linkedin.com"><img src="assets/font_end_assets/images/in.png" alt="LinkedIn"/></a>
         <a href="http://www.google.com"><img src="assets/font_end_assets/images/gl.png" alt="GooglePlus"/></a>
      </div>
      <script type="text/javascript" src="assets/font_end_assets/js/scrolltop.js"></script>
   </body>
</html>