<?php 
     
      include_once '../classes/post_data.php';
      $obj_post=new category_post();
      $result=$obj_post->select_category_post_all_info();
     if(isset($_GET['satatus'])){
       $post_id=$_GET['id'];
       if($_GET['satatus']=='published'){
          $message=$obj_post->unpublished_post_info($post_id);  
       }elseif ($_GET['satatus']=='unpublished') {
             $message=$obj_post->published_post_info($post_id);  
       }elseif ($_GET['satatus']=='delete') {
             $message=$obj_post->delete_post_info($post_id);  
        }
     }
 
?>
<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
               <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
               <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
               <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
         </div>
         <div class="box-content">
          <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
               <thead>
                  <tr>
                     <th>Post ID</th>
                     <th>Post title</th>
                     <th>Post Description</th>
                     <th>Publication satus</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($post_info= mysqli_fetch_assoc($result)){ ?>
                 
                  <tr>
                     <td><?php echo $post_info['post_id'];?></td>
                     <td><?php echo $post_info['post_title'];?></td>
                     <td><?php echo $post_info['post_discription'];?></td>
                     <td class="center">
                        <?php 
                           if($post_info['publication_status'] == 1){
                              echo 'published';
                           }else{
                             echo 'unpublished';
                           }
                        ?>
                     </td>
                     <td class="center">
                      <?php if($post_info['publication_status']==1){?>
                        <a class="btn btn-success" href="?satatus=published&&id=<?php echo $post_info['post_id'];?>" title="unpublished">
                            <i class="halflings-icon white arrow-down"></i>  
                           </a>
                        <?php }else{ ?>
                           <a class="btn btn-danger" href="?satatus=unpublished&&id=<?php echo $post_info['post_id'];?>" title="published">
                            <i class="halflings-icon white arrow-up"></i>  
                           </a>
                        <?php }?>
                        <a class="btn btn-info" href="post_edit.php?&&id=<?php echo $post_info['post_id'];?>"  title="edit">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $post_info['post_id'];?>" onclick=" return check_delete();"  title="delete"  >
                           <i class="halflings-icon white trash" ></i> 
                        </a>
                     </td>
                  </tr>
                <?php  }?>
               </tbody>
            </table>            
         </div>
      </div><!--/span-->
   </div><!--/row-->
</div>