
<?php 
   include_once 'classes/aplication.php';
   include_once 'helper/formate.php';
   $obj_app=new aplication();
   $obj_frm= new formate();
   $cat_result=$obj_app->select_category_all_info();
   $result=$obj_app->lasted_post_info();
?>

<div class="sidebar clear">
   <div class="samesidebar clear">
      <h2>Categories</h2>
      <ul>
         <?php while ($category_info=mysqli_fetch_assoc($cat_result)) { ?>
            <li><a href="posts.php?id=<?php echo $category_info['category_id']?>"><?php echo $category_info['category_name']; ?></a></li>
         <?php } ?>	
      </ul>
   </div>
   <div class="samesidebar clear">
      <h2>Latest articles</h2>
      <div class="popular clear">
         <?php while ($post_info=mysqli_fetch_assoc($result)) { ?>
         <h3><a href="post_details.php?id=<?php echo $post_info['post_id'];?>"> <?php echo $post_info['post_title'];?></a></h3>
         <a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><img src="assets/<?php  echo $post_info['post_image']?>" alt="post image"/></a>
         <p><?php echo $obj_frm->textshorten($post_info['post_discription'],100);?></p>
         <?php }?>
      </div>
   </div>
</div>
