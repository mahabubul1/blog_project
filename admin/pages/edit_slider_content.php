
<?php
    include_once '../classes/info_pages_data.php';
    $obj_pages= new info_all(); 
     $slider_id=$_GET['id'];
     $result=$obj_pages->update_all_slider_info($slider_id);
     $slider_info=mysqli_fetch_assoc($result);
   
   if (isset($_POST['btn'])) {
      $message=$obj_pages->update_slider_info($_POST);
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
                     <td> <input type="text" name="slider_title" value="<?php echo $slider_info['slider_title'];?>" /> </td>                                       
                     <td> <input type="hidden" name="slider_id" value="<?php echo $slider_info['slider_id'];?>" /> </td>                                       
                  </tr>
                  
                  <tr>
                     <td>slider imges </td>
                     <td> 
                        <img src="<?php echo $slider_info['slider_image'];?>" alt="" width="200" height="200" /> <br />
                        <input type="file" name="slider_image" /> 
                     
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
  document.forms['edit_logo_form'].elements['publication_status'].value="<?php echo $slider_info['publication_status']?>";
</script>
