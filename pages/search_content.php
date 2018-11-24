
<?php
  include_once 'classes/aplication.php';
  include_once 'helper/formate.php';
   $obj_app=new aplication();
   $obj_frm= new formate();
   if(isset($_POST['search']) || $_POST['search']== NULL){
     header('Location:404.php');
   }else{
     $search=$_POST['search'];
   }

?>
<div class="maincontent clear">
   <div class="about">
     <?php
        $result=$obj_app->search_post_info_by_id();
         if($result){
         while ($post_info=$result->fetch_assoc()){?>
       
         <h2><?php echo $post_info['post_title'];?></h2>
         <h4><?php echo $obj_frm->formatedate($post_info['date']);?> By <?php echo $post_info['post_authors'];?></h4>
          <a href="post_details.php?id=<?php echo $post_info['post_id'];?>"><img src="images/post2.png" alt="MyImage"/></a>
          <p><?php echo $obj_frm->textshorten($post_info['post_discription']);?> </p>
         <div class="readmore clear">
            <a href="post_details.php?id=<?php echo $post_info['post_id'];?>">Read More</a>
          </div>
         <?php } } else{?>
            <p>sdfjf</p>
         <?php }?>

   </div>
</div>