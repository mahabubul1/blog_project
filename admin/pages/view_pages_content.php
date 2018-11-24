<?php 
    include '../classes/inbox_data.php';
    $obj_message= new message();
     $contact_id=$_GET['id'];
     $result=$obj_message->update_customer_message_info($contact_id);
     $contact_info=mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
       header('location:inbox.php');
    }  
?>
<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>contact info</h2>
            <div class="box-icon">
               <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
               <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
               <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
         </div>
         <div class="box-content">
          <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
            <form action="" method="post">
               <table>
                  <tr>
                     <td>Full Name:</td>
                     <td>
                        <input type="text" name="first_name"  readonly value="<?php echo  $contact_info['first_name'].' '.$contact_info['last_name'] ;?>" />
                     </td>
                  </tr>
                  <tr>
                     <td> Email Address:</td>
                     <td>
                        <input type="text" readonly name="email_address" value="<?php echo $contact_info['email_address'] ;?>" />
                     </td>
                  </tr>
                  <tr>
                      <td>Message:</td>
                     <td>
                        <textarea readonly name="message_box" ><?php echo $contact_info['message_box'] ;?> </textarea>
                     </td>
                  </tr>
                  <tr>
                     <td>Date:</td>
                     <td>
                        <input type="text"  readonly name="date"  value="<?php echo $contact_info['date'] ;?>"/>
                     </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>
                        <input type="submit" name="submit" value="ok"/>
                     </td>
                  </tr>
               </table>
            </form>				
         </div>
      </div><!--/span-->
   </div><!--/row-->
</div>