<?php
   include '../classes/logo_data.php';
   $obj_category_logo = new category_logo();
   if (isset($_POST['btn'])) {
      $message = $obj_category_logo->save_logo_info($_POST);
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
                     <td>web site tile</td>
                     <td> <input type="text" placeholder="please web title here.." name="web_titile" /> </td>                                       
                  </tr>
                  <tr>
                     <td>web site slogan </td>
                     <td> <input type="text" placeholder="please web site slogan here.." name="web_slogan" /> </td>                                       
                  </tr>
                  <tr>
                     <td>web site Logo </td>
                     <td> <input type="file" name="logo_image" /> </td>                                       
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