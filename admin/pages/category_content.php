<?php 
   require '../classes/category_data.php';
   if(isset($_POST['btn'])){ 
      $obj_category= new category();
       $message=$obj_category->save_category_info($_POST);
      
   }

?>


<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-header" data-original-title>
         <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category Form </h2>
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
                  <label class="control-label" for="typeahead">Category Name </label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="text" class="span6 typeahead" name="category_name" id="typeahead"/>
                  </div>        
                  <div class="control-group">
                     <label class="control-label" for="selectError3">Publication Status</label>
                     <div class="controls">
                        <select id="selectError3" style="text-align:center" name="publication_status">
                           <option > == SELECT STATUS== </option>
                           <option value="1">Published</option>
                           <option value="0">Unpublished</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-actions">
                     <button type="submit" class="btn btn-primary" name="btn">Save Category info</button>
                     <button class="btn" name="btn">Reset</button>
                  </div>
                </div>
            </fieldset>
         </form>   
      </div>
   </div><!--/span-->
</div><!--/row-->
