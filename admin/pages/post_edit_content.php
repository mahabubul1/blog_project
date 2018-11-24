<?php 
     
      include_once '../classes/post_data.php';
      include_once '../classes/aplication.php';
      $obj_app=new aplication();
      $obj_post=new category_post();
      $post_id=$_GET['id'];
      $result=$obj_post->select_update_post_all_info($post_id);
      $post_info=mysqli_fetch_assoc($result);
     $result=$obj_app->select_category_all_info();
      if(isset($_POST['btn'])){
          $post_id=$_GET['id'];
         $message=$obj_post->update_post_all_info($_POST);
      } 
      
      
    

?>
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-header" data-original-title>
         <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Post Form </h2>
         <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
         </div>
      </div>
      <div class="box-content">
         <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
         <form class="form-horizontal"  name="edit_post_form" action="" method="post" enctype="multipart/form-data">
            <fieldset>
               <div class="control-group">
                  <label class="control-label" for="typeahead">title</label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="text" class="span6 typeahead" name="post_title"  value="<?php echo $post_info['post_title'];?>" id="typeahead"/>
                  </div> 
               </div>   
               <div class="control-group">
                  <label class="control-label" for="typeahead">Category Name </label>
                  <div class="controls">
                     <select id="selectError3" style="text-align:center" name="category_id">
                        <option > == SELECT category == </option>                        
                           <?php while ($category_info=mysqli_fetch_assoc($result)) {?>
                               <option 
                                 <?php if($post_info['category_id'] == $category_info['category_id'] ){?>
                                    selected="selected"
                                 <?php }?> value="<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name'];?>
                            
                            </option>
                          <?php }?>
                     </select>
                  </div>
               </div>   
                
               <div class="control-group">
                   <label class="control-label"  for="textarea2">Category Description</label>
                   <div class="controls">
                      <textarea  name="post_discription" id="textarea2" rows="3"> 
                         <?php echo $post_info['post_discription'];?>
                      </textarea>
                   </div>
                </div>
               <div class="control-group">
                   <label class="control-label"  for="textarea2">Category Image</label>
                   <div class="controls">
                      <img src="<?php echo $post_info['post_image'];?>" alt="" height="50" width="200" /> <br />
                      <input type="file" name="post_image" />
                   </div>
                </div>
               <div class="control-group">
                  <label class="control-label" for="typeahead">Authors name</label>
                  <div class="controls" style="margin-bottom: 15px">
                     <input type="text" class="span6 typeahead" name="post_authors" value="<?php echo $post_info['post_authors'];?>" id="typeahead"/>
                  </div> 
               </div>
               <div class="control-group">
                   <label class="control-label"  for="textarea2">Category tags</label>
                   <div class="controls">
                      <input type="text" name="post_tags" value="<?php echo $post_info['post_tags'];?>" />
                   </div>
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
                   <button type="submit" class="btn btn-primary" name="btn"> update post info </button>
                   <button class="btn" name="btn">Reset</button>
                </div>
            </fieldset>
         </form>   
      </div>
   </div><!--/span-->
</div><!--/row-->
<script type="text/javascript">
      document.forms['edit_post_form'].elements['publication_status'].value="<?php echo $post_info['publication_status'];?>";
</script>