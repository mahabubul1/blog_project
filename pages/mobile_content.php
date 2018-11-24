<?php 
    include_once 'classes/aplication.php';
     $obj_app=new aplication();
     $pages_id=$_GET['id'];
     $result=$obj_app->show_page_info($pages_id);
?>
   <?php if($result){
     while ($pages_info=$result->fetch_assoc()) {?>
      <div class="maincontent clear">
         <div class="about">
            <h2><?php echo  $pages_info['pages_name'] ;?></h2>
            <p><?php echo  $pages_info['pages_discription'] ;?></p>
            <p><?php echo  $pages_info['pages_discription'] ;?></p>
         </div>
      </div>

   <?php }} else { 
      header('location:404.php');
   }?>