
<?php
   include '../classes/logo_data.php';
     $obj_category_logo = new category_logo();
     $logo_id=$_GET['id'];
     $result=$obj_category_logo->update_all_logo_info($logo_id);
     $logo_info=mysqli_fetch_assoc($result);
   
   if (isset($_POST['btn'])) {
      $message = $obj_category_logo->update_logo_info($_POST);
   }
?>
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-content">
         <h3 style="color:green"> <?phpif (isset($message)) { echo $message; unset($_SESSION[$message]);}?></h3>
         <form class="form-horizontal"  name="edit_logo_form"  action="" method="post" enctype="multipart/form-data">
            <table class="table">
               <tbody>
                  <tr>
                     <td>web site tile</td>
                     <td> <input type="text" name="web_titile" value="<?php echo  $logo_info['web_titile'];?>" /> </td>                                       
                  </tr>
                  <tr>
                     <td>web site slogan </td>
                     <td> <input type="text"   value="<?php echo  $logo_info['web_slogan'];?>" name="web_slogan" /> </td>                                       
                  </tr>
                  <tr>
                     <td>web site Logo </td>
                     <td> 
                        <img src="<?php echo $logo_info['logo_image'];?>" alt="" /> <br />
                        <input type="file" name="logo_image" /> 
                     
                     </td>                                       
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
                     <td> <input type="submit" name="btn" value="update" /> </td>                                       
                  </tr>                                         
               </tbody>
            </table>   
         </form>    
      </div><!--/span-->
   </div><!--/span-->
</div><!--/row-->


<script type="text/javascript"> 
  document.forms['edit_logo_form'].elements['publication_status'].value="<?php echo $logo_info['publication_status']?>";
</script>