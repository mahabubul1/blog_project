
<?php
  include '../classes/media_data.php';
     $obj_media = new media();
     $media_id=$_GET['id'];
     $result=$obj_media->select_update_info($media_id);
     $media_info=mysqli_fetch_assoc($result);
    if (isset($_POST['btn'])) {
       $message=$obj_media->update_media_info($_POST);
    }
?>
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-content">
         <h3 style="color:green"> <?phpif (isset($message)) { echo $message; unset($_SESSION[$message]);}?></h3>
         <form class="form-horizontal" name="edit_logo_form" action="" method="post" enctype="multipart/form-data">
            <table class="table">
               <tbody>
                  <tr>
                     <td><label>Facebook</label></td>
                     <td> <input type="text"  name="facebook"  value="<?php echo $media_info['facebook'] ;?>" /> </td>                                       
                  </tr>
                  <tr>
                     <td> <label>Twitter</label> </td>
                     <td> <input type="text" name="twitter" value="<?php echo $media_info['twitter'] ;?>" /> </td>                                       
                  </tr>
                  <tr>
                     <td> <label>LinkedIn</label> </td>
                     <td> <input type="text" name="linkedin" value="<?php echo $media_info['linkedin'];?>"  /> </td>                                       
                  </tr> 
                  <tr>
                     <td>  <label>Google Plus</label> </td>
                     <td> <input type="text" name="googleplus" value="<?php echo $media_info['googleplus'];?>" /> </td>                                       
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
  document.forms['edit_logo_form'].elements['publication_status'].value="<?php echo $media_info['publication_status']?>";
</script>
