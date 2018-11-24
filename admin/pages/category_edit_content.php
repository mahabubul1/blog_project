<?php 
 
   require '../classes/category_data.php';
   $obj_category= new category();
   $category_id=$_GET['id'];
   $result=$obj_category->select_category_info_by($category_id);
   $category_info=mysqli_fetch_assoc($result);
   if(isset($_POST['btn'])){
     $message=$obj_category->update_category_info($_POST);
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
      <h3 style="color:green"><?php if (isset($message)) { echo $message;unset($_SESSION['$message']);} ?></h3>
      <div class="box-content">
         <form class="form-horizontal" name="category_edit_form" action="" method="post">
            <fieldset>
               <div class="control-group">
                  <label class="control-label" for="typeahead">Category Name </label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="text" class="span6 typeahead" name="category_name" value="<?php echo $category_info['category_name'];?>"   id="typeahead"/>
                     <input type="hidden" class="span6 typeahead" name="category_id" value="<?php echo $category_info['category_id'];?>"   id="typeahead"/>
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

<script type="text/javascript">
    document.forms['category_edit_form'].elements['publication_status'].value="<?php echo $category_info['publication_status'];?>";

</script>