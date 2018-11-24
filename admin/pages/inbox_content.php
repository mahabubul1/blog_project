<?php
     include '../classes/inbox_data.php';
     include_once '../helper/formate.php';
       $obj_message= new message();
      $obj_frm= new formate();

   if(isset($_GET['seenid'])){
       $contact_id=$_GET['seenid'];
       $mesage=$obj_message->update_message_info($contact_id);
     }
   $result=$obj_message->show_customer_message_info();
?>

<div class="row-fluid sortable">
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>message info</h2>
            <div class="box-icon">
               <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
               <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
               <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
         </div>
         <div class="box-content">
          <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
               <thead>
                  <tr>
                     <th>Contact ID</th>
                     <th>Name</th>
                     <th>Email Address</th>
                     <th>Message Discription</th>
                     <th>Date</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($contact_info=mysqli_fetch_assoc($result)){ ?>
                  <tr>
                     <td><?php echo $contact_info['contact_id'];?></td>
                     <td><?php echo $contact_info['first_name'].' '.$contact_info['last_name'];?></td>
                     <td><?php echo $contact_info['email_address']; ?></td>
                     <td><?php echo $contact_info['message_box'];?></td>
                     <td><?php echo  $obj_frm->formatedate($contact_info['date']);?></td>
                     
                     <td class="center">
                        <a class="btn btn-primary" href="view_pages.php?&&id=<?php echo $contact_info['contact_id'];?>"   title="view">
                           <i class="halflings-icon white zoom-in" ></i>  
                        </a>
                        <a class="btn btn-success" href="reply.php?&&id=<?php echo $contact_info['contact_id'];?>"   title="reply">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                        <a class="btn btn-info" href="?seenid=<?php echo $contact_info['contact_id'];?>"   title="seen">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                     </td>
                  </tr>
                <?php  }?>
               </tbody>
            </table>            
         </div>
      </div><!--/span-->
   </div><!--/row-->
   
   <?php 
      $obj_message= new message();
      if(isset($_GET['satatus'])){
         $id = $_GET['id'];
        if($_GET['satatus']=='delete'){
           $message=$obj_message->delete_seen_message($id);
        }
      }
      $result=$obj_message->move_select_update_message_info();
   ?>
   
   
   <div class="row-fluid sortable">		
      <div class="box span12">
         <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>  seen message</h2>
            <div class="box-icon">
               <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
               <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
               <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
         </div>
         <div class="box-content">
          <h3 style="color:green"><?php if(isset($message)){echo $message; unset($_SESSION['$message']);  }?></h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
               <thead>
                  <tr>
                     <th>Contact ID</th>
                     <th>Name</th>
                     <th>Email Address</th>
                     <th>Message Discription</th>
                     <th>Date</th>
                     <th>Actions</th>
                  </tr>
               </thead>   
               <tbody>
               <?php while ($contact_info=mysqli_fetch_assoc($result)){ ?>
                  <tr>
                     <td><?php echo $contact_info['contact_id'];?></td>
                     <td><?php echo $contact_info['first_name'].' '.$contact_info['last_name'];?></td>
                     <td><?php echo $contact_info['email_address']; ?></td>
                     <td><?php echo $contact_info['message_box'];?></td>
                     <td><?php echo  $obj_frm->formatedate($contact_info['date']);?></td>
                     
                     <td class="center">
                        <a class="btn btn-danger" href="?satatus=delete&&id=<?php echo $contact_info['contact_id'];?>"   title="delete">
                           <i class="halflings-icon white edit" ></i>  
                        </a>
                     </td>
                  </tr>
                <?php  }?>
               </tbody>
            </table>            
         </div>
      </div><!--/span-->
   </div><!--/row-->
</div>
