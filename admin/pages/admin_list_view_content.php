
<?php
    require '../classes/admin.php';
     $obl_admin=new admin();
     $admin_id=$_GET['id'];
     $result=$obl_admin->select_admin_info_by_id($admin_id);
     $admin_info=mysqli_fetch_assoc($result);  
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
                     <td>Admin name</td>
                     <td> <input type="text"  name="admin_name" value="<?php echo $admin_info['admin_name'] ;?>" /> </td>                                       
                  </tr>
                  <tr>
                     <td>Email address </td>
                     <td> <input type="text"  name="email_address" value="<?php echo $admin_info['email_address'] ;?>" /> </td>                                       
                  </tr>
                   <tr>
                     <td>Access level Status</td>
                     <td>
                        <select id="selectError3" style="text-align:center" name="access_lavel">
                           <option > == SELECT STATUS== </option>
                           <option value="0">Admin</option>
                           <option value="1">Author</option>
                           <option value="2">editor</option>
                        </select>
                     </td>                                       
                  </tr> 
                  <tr>
                     <td> </td>
                     <td> <input type="submit" name="btn" value="view admin info" /> </td>                                       
                  </tr>                                         
               </tbody>
            </table> 
         </form>    
      </div><!--/span-->
   </div><!--/span-->
</div><!--/row-->
<script type="text/javascript"> 
  document.forms['edit_logo_form'].elements['access_lavel'].value="<?php echo $admin_info['access_lavel']?>";
</script>

