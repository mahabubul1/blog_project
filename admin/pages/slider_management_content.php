<?php 
     
      include_once '../classes/info_pages_data.php';
      $obj_pages= new info_all(); 
     
     if(isset($_GET['satatus'])){
       $slider_id=$_GET['id'];
       if($_GET['satatus']=='published'){
          $message=$obj_pages->unpublished_slider_info($slider_id);  
       }elseif ($_GET['satatus']=='unpublished') {
             $message=$obj_pages->published_slider_info($slider_id);  
       }elseif ($_GET['satatus']=='delete') {
             $message=$obj_pages->delete_slider_info($slider_id);  
        }
     }
      $result=$obj_pages->select_slider_info_by_id();
 
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
                     <th>slider ID</th>
                     <th>slider title</th>
                     <th>slider images</th>
                     <th>Publication status</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($slider_info=mysqli_fetch_assoc($result)){ ?>
                 
                  <tr>
                     <td><?php echo $slider_info['slider_id'];?></td>
                     <td><?php echo $slider_info['slider_title'];?></td>
                     <td><?php echo $slider_info['slider_image'];?></td>
                     <td class="center">
                        <?php 
                           if($slider_info['publication_status'] == 1){
                              echo 'published';
                           }else{
                             echo 'unpublished';
                           }
                        ?>
                     </td>
                     <td class="center">
                      <?php if($slider_info['publication_status']==1){?>
                        <a class="btn btn-success" href="?satatus=published&&id= <?php echo $slider_info['slider_id'];?> " title="unpublished">
                            <i class="halflings-icon white arrow-down"></i>  
                           </a>
                        <?php }else{ ?>
                           <a class="btn btn-danger" href="?satatus=unpublished&&id=<?php echo $slider_info['slider_id'];?>" title="published">
                            <i class="halflings-icon white arrow-up"></i>  
                           </a>
                        <?php }?>
                        <a class="btn btn-info" href="edit_slider?&&id=<?php echo $slider_info['slider_id'];?>"  title="edit">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $slider_info['slider_id'];?>" onclick=" return check_delete();"  title="delete"  >
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

