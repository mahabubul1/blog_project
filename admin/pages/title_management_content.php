<?php
    include '../classes/logo_data.php';
    $obj_category_logo=new category_logo();

   if(isset($_GET['satatus'])){
        $logo_id=$_GET['id'];
      if($_GET['satatus']=='published'){
          $message=$obj_category_logo->unpublished_logo_info($logo_id);
      }elseif($_GET['satatus']=='unpublished'){
          $message=$obj_category_logo->published_logo_info($logo_id);
      }elseif($_GET['satatus']=='delete'){
          $message=$obj_category_logo->delete_logo_info($logo_id);
      }
   }
   $result=$obj_category_logo->select_logo_info();
?>

<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>logo info</h2>
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
                     <th>Logo ID</th>
                     <th>web title</th>
                     <th>web slogan</th>
                     <th>Publication satus</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($logo_info=mysqli_fetch_assoc($result)){ ?>
                 
                  <tr>
                     <td><?php echo $logo_info['logo_id'];?></td>
                     <td><?php echo $logo_info['web_titile'];?></td>
                     <td><?php echo $logo_info['web_slogan'];?></td>
                     <td class="center">
                        <?php 
                           if($logo_info['publication_status'] == 1){
                              echo 'published';
                           }else{
                             echo 'unpublished';
                           }
                        ?>
                     </td>
                     <td class="center">
                      <?php if($logo_info['publication_status']==1){?>
                        <a class="btn btn-success" href="?satatus=published&&id=<?php echo $logo_info['logo_id'];?>" title="unpublished">
                            <i class="halflings-icon white arrow-down"></i>  
                           </a>
                        <?php }else{ ?>
                           <a class="btn btn-danger" href="?satatus=unpublished&&id=<?php echo $logo_info['logo_id'];?>" title="published">
                            <i class="halflings-icon white arrow-up"></i>  
                           </a>
                        <?php }?>
                        <a class="btn btn-info" href="logo_title_edit.php?&&id=<?php echo $logo_info['logo_id'];?>"   title="edit">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $logo_info['logo_id'];?>" onclick=" return check_delete();" title="delete">
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