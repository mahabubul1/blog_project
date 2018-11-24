<?php 
   require '../classes/admin.php';
   $obl_admin=new admin();
     $admin_id=$_SESSION['admin_id'];
     $result=$obl_admin->select_update_admin_info_id($admin_id);
     $admin_info=mysqli_fetch_assoc($result);
   if(isset($_POST['btn'])){ 
       $message=$obl_admin->update_admin_info_data($_POST);
   }
?>
 
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-header" data-original-title>
         <h2><i class="halflings-icon edit"></i><span class="break"></span>update profile setting </h2>
         <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
         </div>
      </div>
      <div class="box-content">
         <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
         <form class="form-horizontal" action="" method="post">
            <fieldset>
               <div class="control-group">
                  <label class="control-label" for="typeahead">User Name </label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="text" class="span6 typeahead" name="admin_name"  value="<?php echo $admin_info['admin_name'];?>" required="" id="typeahead"/>
                  </div>  
               </div>   
               <div class="control-group">
                  <label class="control-label" for="typeahead">Email Address </label>
                  <div class="controls" style="margin-bottom: 15px">
                   <input type="email" class="span6 typeahead" name="email_address"  required=""  id="typeahead"/>
                  </div>  
               </div>   
               <div class="form-actions">
                  <button type="submit" class="btn btn-primary" name="btn">update</button>
                  <button class="btn" name="btn">Reset</button>
               </div>
            </fieldset>
         </form>   
      </div>
   </div><!--/span-->
</div><!--/row-->


