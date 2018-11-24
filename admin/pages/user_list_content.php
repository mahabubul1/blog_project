<?php
   require '../classes/admin.php';
   $obl_admin=new admin();
   if(isset($_GET['satatus'])){
        $admin_id=$_GET['id'];
      if($_GET['satatus']=='delete'){
          $message=$obl_admin->delete_admin_info($admin_id);
      }
   }
   $result=$obl_admin->select_admin_user_list();
   

?>

<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Admin user list</h2>
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
                     <th>Admin ID</th>
                     <th>Admin Name</th>
                     <th>Email</th>
                     <th>Access Lavel</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($admin_info= mysqli_fetch_assoc($result)){ ?>
                 
                  <tr>
                     <td><?php echo $admin_info['admin_id'];?></td>
                     <td><?php echo $admin_info['admin_name'];?></td>
                     <td><?php echo $admin_info['email_address'];?></td>
                    
                     <td class="center">
                        <?php 
                           if($admin_info['access_lavel'] == 0){
                              echo 'admin';
                           }elseif($admin_info['access_lavel'] == 1){
                             echo 'author';
                           }elseif($admin_info['access_lavel'] == 2){
                                echo 'editor';
                           }
                        ?>
                     </td>
                     <td class="center">
                      
                        <a class="btn btn-success" href="admin_list_view?&&id=<?php echo $admin_info['admin_id'];?>"  title="view">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $admin_info['admin_id'];?>" onclick=" return check_delete()" title="delete">
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

