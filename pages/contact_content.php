<?php 
   include_once 'classes/aplication.php';
   $obj_app=new aplication();
   if(isset($_POST['submit'])){
       $meassage=$obj_app->insert_customer_contact_data($_POST);
   }
?>
   <div class="maincontent clear">
      <div class="about">
         <h2>Contact us</h2>
         <?php if(isset($meassage)){ echo $meassage; } ?>
         <form action="" method="post">
            <table>
               <tr>
                  <td>Your First Name:</td>
                  <td>
                     <input type="text" name="first_name" placeholder="Enter first name" />
                  </td>
               </tr>
               <tr>
                  <td>Your Last Name:</td>
                  <td>
                     <input type="text" name="last_name" placeholder="Enter Last name"/>
                  </td>
               </tr>

               <tr>
                  <td>Your Email Address:</td>
                  <td>
                     <input type="text" name="email_address" placeholder="Enter Email Address" />
                  </td>
               </tr>
               <tr>
                  <td>Your Message:</td>
                  <td>
                     <textarea name="message_box" ></textarea>
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td>
                     <input type="submit" name="submit" value="send"/>
                  </td>
               </tr>
            </table>
          <form>				
       </div>
   </div>
