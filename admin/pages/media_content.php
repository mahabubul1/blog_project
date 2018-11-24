<?php
   include '../classes/media_data.php';
   $obj_media = new media();
   if (isset($_POST['btn'])) {
      $message = $obj_media->save_media_info($_POST);
   }
?>
<div class="row-fluid sortable">
   <div class="box span12">
      <div class="box-content">
         <h3 style="color:green"> <?php if (isset($message)) { echo $message; unset($_SESSION[$message]);} ?></h3>
          <form class="form-horizontal"  action="" method="post" enctype="multipart/form-data">
            <table class="table">
               <tbody>
                  <tr>
                     <td><label>Facebook</label></td>
                     <td> <input type="text"  placeholder="Facebook link.."  name="facebook" /> </td>                                       
                  </tr>
                  <tr>
                     <td> <label>Twitter</label> </td>
                     <td> <input type="text" name="twitter" placeholder="Twitter link.." /> </td>                                       
                  </tr>
                  <tr>
                     <td> <label>LinkedIn</label> </td>
                     <td> <input type="text" name="linkedin" placeholder="LinkedIn link.." /> </td>                                       
                  </tr> 
                  <tr>
                     <td>  <label>Google Plus</label> </td>
                     <td> <input type="text" name="googleplus" placeholder="Google Plus link.." /> </td>                                       
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