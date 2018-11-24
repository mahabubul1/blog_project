
<?php
   include_once '../classes/info_pages_data.php';
     $obj_pages= new info_all(); 
     $result=$obj_pages->select_update_pages_info();
     $pages_info=mysqli_fetch_assoc($result);
    if(isset($_POST['btn'])) {
      $message=$obj_pages->update_pages_info($_POST);
   }
?>
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-content">
         <h3 style="color:green"> <?phpif (isset($message)) { echo $message; unset($_SESSION[$message]);}?></h3>
         <form class="form-horizontal"  name="edit_logo_form"  action="" method="post" enctype="multipart/form-data">
            <form class="form-horizontal" name="edit_logo_form" action="" method="post" enctype="multipart/form-data">
            <table class="table">
               <tbody>
                  <tr>
                     <td>pages name</td>
                     <td> <input type="text"  name="pages_name" value="<?php echo $pages_info['pages_name'] ;?>" /> </td>                                       
                  </tr>
                  <tr>
                     <td>Pages Discription </td>
                     <td> <textarea name="pages_discription"  cols="20" rows="5"> <?php echo $pages_info['pages_discription'] ;?></textarea> </td>                                       
                  </tr>
                  <tr>
                     <td>Publication Status</td>
                     <td>
                        <select id="selectError3" style="text-align:center" name="publication_status">
                           <option > == SELECT STATUS== </option>
                           <option value="1">Published</option>
                           <option value="0">Unpublished</option>
                        </select>
                     </td>                                       
                  </tr> 
                  <tr>
                     <td> </td>
                     <td> <input type="submit" name="btn" value="update pages info" /> </td>                                       
                  </tr>                                         
               </tbody>
            </table> 
         </form>    
      </div><!--/span-->
   </div><!--/span-->
</div><!--/row-->
<script type="text/javascript"> 
  document.forms['edit_logo_form'].elements['publication_status'].value="<?php echo $pages_info['publication_status']?>";
</script>
