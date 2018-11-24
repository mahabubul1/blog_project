<?php

  include_once '../classes/info_pages_data.php';
   $obj_pages= new info_all(); 
   if (isset($_POST['btn'])) {
      $message = $obj_pages->save_pages_info($_POST);
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
                     <td>pages name</td>
                     <td> <input type="text" placeholder="please pages name here.." name="pages_name" /> </td>                                       
                  </tr>
                  <tr>
                     <td>Pages Discription </td>
                     <td> <textarea name="pages_discription"  cols="20" rows="5"> </textarea> </td>                                       
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
                     <td> <input type="submit" name="btn" value="save pages info" /> </td>                                       
                  </tr>                                         
               </tbody>
            </table>   
         </form>    
      </div><!--/span-->
   </div><!--/span-->
</div><!--/row-->

