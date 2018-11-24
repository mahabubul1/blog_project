<?php 
   require '../classes/admin.php';
   if(isset($_POST['btn'])){ 
      $obl_admin=new admin();
       $message=$obl_admin->insert_add_user_data($_POST);
   }

?>


<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-header" data-original-title>
         <h2><i class="halflings-icon edit"></i><span class="break"></span>Add user Form </h2>
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
                     <input type="text" class="span6 typeahead" name="admin_name" required="1" id="typeahead"/>
                  </div>  
               </div>   
               <div class="control-group">
                  <label class="control-label" for="typeahead">Email Address </label>
                  <div class="controls" style="margin-bottom: 15px">
                   <input type="email" class="span6 typeahead" name="email_address" id="typeahead"/>
                  </div>  
               </div>   
               <div class="control-group">
                  <label class="control-label" for="typeahead">Password</label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="password" class="span6 typeahead" name="password" id="typeahead"/>
                  </div>  
               </div>   
                <div class="control-group">
                  <label class="control-label" for="selectError3">Access Level </label>
                  <div class="controls">
                     <select id="selectError3" style="text-align:center" name="access_lavel">
                        <option > == SELECT Access Level == </option>
                        <option value="0"> Admin</option>
                        <option value="1"> Author</option>
                        <option value="2"> Editor</option>
                     </select>
                  </div>
               </div>
               <div class="form-actions">
                  <button type="submit" class="btn btn-primary" name="btn">Save Category info</button>
                  <button class="btn" name="btn">Reset</button>
               </div>
            </fieldset>
         </form>   
      </div>
   </div><!--/span-->
</div><!--/row-->

