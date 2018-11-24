<?php 
  include_once 'classes/aplication.php';
   include_once 'helper/formate.php';
   $obj_app=new aplication();
   $obj_frm= new formate();
   $post_id=$_GET['id'];
   $result=$obj_app->details_post_info_by_id($post_id);
   $post_info=mysqli_fetch_assoc($result);
   $category_id=$post_info['category_id'];
   $rel_result=$obj_app->relate_post_info($category_id);

?>

<div class="maincontent clear">
   <div class="about">
      <h2><?php echo $post_info['post_title'];?></h2>
      <h4><?php echo $obj_frm->formatedate($post_info['date']); ?> By <?php echo $post_info['post_authors']; ?></h4>
      <a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><img src="assets/<?php  echo $post_info['post_image']?>" alt="MyImage"/></a>
      <p><?php echo $post_info['post_discription'];?></p>
       <div class="relatedpost clear">
          <h2>Related articles</h2>
          <?php while ($relate_post_info=mysqli_fetch_assoc($rel_result)){?>   
             <a href=""><img src=" assets/<?php echo $relate_post_info['post_image'];?>" alt="post image"/></a>
          <?php }?>
        </div>  
   </div>
</div>
