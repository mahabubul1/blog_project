<?php 
    include_once 'classes/aplication.php';
    $obj_app=new aplication();
    $result=$obj_app->select_logo_info();
    $logo_info=mysqli_fetch_assoc($result);
    $result=$obj_app->select_media_info();
    $media_info=mysqli_fetch_assoc($result);
     
    
?>


<div class="headersection templete clear">
   <a href="index.php">
      <div class="logo">
         <img src="" alt="Logo"/>
         <h2><?php echo $logo_info['web_titile'];?></h2>
         <p><?php echo $logo_info['web_slogan'];?></p>
      </div>
   </a>
   <div class="social clear">
      <div class="icon clear">
         <a href="<?php echo $media_info['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
         <a href="<?php echo $media_info['twitter'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
         <a href="<?php echo $media_info['linkedin'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
         <a href="<?php echo $media_info['googleplus'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
      </div>
      <div class="searchbtn clear">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search keyword..."/>
            <input type="submit" name="submit" value="Search"/>
         </form>
      </div>
   </div>
</div>