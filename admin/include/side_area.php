<?php 
  include '../classes/count.php';
  $obj_count= new count();
  $count=$obj_count->show_customer_message_info_id();

?>
<div id="sidebar-left" class="span2">
   <div class="nav-collapse sidebar-nav">
      <ul class="nav nav-tabs nav-stacked main-menu">
         <li><a href="admin_master.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
         <li><a href="add_user.php"><i class="icon-user"></i><span class="hidden-tablet">Add user's</span></a></li>
         <li><a href="user_list.php"><i class="icon-user"></i><span class="hidden-tablet">Admin user list</span></a></li>
         <li><a href="category.php"><i class="icon-envelope"></i><span class="hidden-tablet">Add category</span></a></li>
         <li><a href="category_management.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Category management</span></a></li>
         <li><a href="add_post.php"><i class="icon-eye-open"></i><span class="hidden-tablet">Add post</span></a></li>
         <li><a href="post_management.php"><i class="icon-dashboard"></i><span class="hidden-tablet">Post management </span></a></li>
         <li><a href="pages.php"><i class="icon-envelope"></i><span class="hidden-tablet">Add pages</span></a></li>
         <li><a href="management_pages.php"><i class="icon-envelope"></i><span class="hidden-tablet"> pages management</span></a></li>
         <li>
            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Site Option</span></a>
            <ul>
               <li><a class="submenu" href="title.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Title & Slogan</span></a></li>
               <li><a class="submenu" href="title_management.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Title & Slogan management </span></a></li>
               <li><a class="submenu" href="media.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> social media option</span></a></li>
               <li><a class="submenu" href="media_management.php"><i class="icon-file-alt"></i><span class="hidden-tablet">media option management</span></a></li>
               <li><a class="submenu" href="slider.php"><i class="icon-file-alt"></i><span class="hidden-tablet">slider option</span></a></li>
               <li><a class="submenu" href="slider_managemnt.php"><i class="icon-file-alt"></i><span class="hidden-tablet">slider management</span></a></li>
            </ul>	
         </li>
         <li><a href="inbox.php"><i class="icon-align-left"></i><span class="hidden-tablet">inbox
                  <?php 
                   
                     if($count){
                        $count= mysqli_num_rows($count);
                        echo "(".$count.") ";
                     }else{
                         echo "(0) ";
                      }
                  ?>
                  
               </span></a></li>
        
      </ul>
   </div>
</div>