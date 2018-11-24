<?php
   include '../classes/media_data.php';
   $obj_media = new media();

   if(isset($_GET['satatus'])){
        $media_id=$_GET['id'];
      if($_GET['satatus']=='published'){
          $message=$obj_media->unpublished_media_info($media_id);
      }elseif($_GET['satatus']=='unpublished'){
          $message=$obj_media->published_media_info($media_id);
      }elseif($_GET['satatus']=='delete'){
          $message=$obj_media->delete_media_info($media_id);
      }
   }
   
   $result=$obj_media->select_media_info();
?>

<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>media info</h2>
            <div class="box-icon">
               <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
               <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
               <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
         </div>
         <div class="box-content">
          <h3 style="color:green"><?php if(isset($message)){ echo $message; unset($_SESSION['$message']);  }?></h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
               <thead>
                  <tr>
                     <th>media ID</th>
                     <th>facebook</th>
                     <th>twitter</th>
                     <th>Linkedin</th>
                     <th>google_plus</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($media_info=mysqli_fetch_assoc($result)){ ?>
                 
                  <tr>
                     <td><?php echo $media_info['media_id'];?></td>
                     <td><?php echo $media_info['facebook'];?></td>
                     <td><?php echo $media_info['twitter'];?></td>
                     <td><?php echo $media_info['googleplus'];?></td>
                     
                     <td class="center">
                        <?php 
                           if($media_info['publication_status'] == 1){
                              echo 'published';
                           }else{
                             echo 'unpublished';
                           }
                        ?>
                     </td>
                     <td class="center">
                      <?php if($media_info['publication_status']==1){?>
                        <a class="btn btn-success" href="?satatus=published&&id=<?php echo $media_info['media_id'];?>" title="unpublished">
                            <i class="halflings-icon white arrow-down"></i>  
                           </a>
                        <?php }else{ ?>
                           <a class="btn btn-danger" href="?satatus=unpublished&&id=<?php echo $media_info['media_id'];?>" title="published">
                            <i class="halflings-icon white arrow-up"></i>  
                           </a>
                        <?php }?>
                        <a class="btn btn-info" href="media_edit.php?&&id=<?php echo $media_info['media_id'];?>"   title="edit">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $media_info['media_id'];?>" onclick=" return check_delete();" title="delete">
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
