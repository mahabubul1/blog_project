<?php 
    include '../classes/inbox_data.php';
    $obj_message= new message();
     $contact_id=$_GET['id'];
     $result=$obj_message->update_customer_message_info($contact_id);
     $contact_info=mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
      $to=$_POST['toemail'];
      $frommail=$_POST['frommail'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $sendmail=mail($to, $subject, $message,$frommail);
      if($sendmail){
         echo 'message send successfully';
      }else{
        echo 'message not send successfully';
      }
      
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
                     <td>To Email </td>
                     <td>
                        <input type="text" readonly name="toemail" value="<?php echo $contact_info['email_address'];?>"  />
                     </td>
                  </tr>
                  <tr>
                     <td>From Email </td>
                     <td>
                        <input type="email"  name="frommail"  />
                     </td>
                  </tr>
                  <tr>
                     <td>Subject</td>
                     <td>
                        <input type="text" name="subject"  />
                     </td>
                  </tr>
                  <tr>
                      <td>Message:</td>
                     <td>
                        <textarea name="message" > </textarea>
                     </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>
                        <input type="submit" name="submit" value="send"/>
                     </td>
                  </tr>
               </table>
            </form>				
         </div>
      </div><!--/span-->
   </div><!--/row-->
</div>