<?php 
   include_once 'classes/aplication.php';
   include_once 'helper/formate.php';
   $obj_app=new aplication();
   $obj_frm= new formate();
    $sli_result=$obj_app->show_slider_info();
   
   $pages=0;
    if(isset($_GET['pages'])){
       if($_GET['pages']==1){
           $pages=1;
       }else{
          $pages=$_GET['pages']*3-3;
       }
   }
    $result=$obj_app->select_all_pagination_info($pages);
    $post_info=mysqli_fetch_assoc($result);
?>






<div class="slidersection templete clear">
   <div id="slider">
      <?php while ($slider_info= mysqli_fetch_assoc($sli_result)) {?>
      <a href="#"   ><img src="assets/<?php echo $slider_info['slider_image'];?>" alt="nature 1"  title="<?php echo $slider_info['slider_title'];?>" /></a>
      <?php }?>  
   </div>
</div>
   <div class="maincontent clear">
      <?php while ($post_info=mysqli_fetch_assoc($result)) {?>
         <div class="samepost clear">
            <h2><a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><?php echo $post_info['post_title'];?></a></h2>
            <h4><?php echo $obj_frm->formatedate( $post_info['date']);?> by <a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><?php echo $post_info['post_authors'];?></a></h4>
            <a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><img src="assets/<?php echo $post_info['post_image'];?>" alt="post image"/></a>
            <p>
               <?php echo $obj_frm->textshorten($post_info['post_discription']);?>
            </p>
            <div class="readmore clear">
               <a href="post_details.php?id=<?php echo $post_info['post_id'];?>">Read More</a>
            </div>
         </div>
     <?php }?> <! -- end while loop --> 
     <!-- pagination -->
     
     <?php 
      $result=$obj_app->select_all_post_info();
      $total_row= mysqli_num_rows($result);
       $total_pages= ceil($total_row/3);
       for($i=1; $i<=$total_pages; $i++){
          ?> <a style="text-decoration: none; font-size: 26px;text-align:center " href="index.php?pages=<?php echo $i;?>">  <?php echo $i.' > ';?>  </a> <?php 
       }
      
  
     ?>
     
   </div>