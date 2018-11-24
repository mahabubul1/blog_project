<?php
   class message{
      private $db_connect;
      public function __construct() {
          $host_name='localhost';
          $user_name='root';
          $password= '';
          $tbl_name='blog_template';
          $this->db_connect=mysqli_connect( $host_name,  $user_name,  $password,  $tbl_name);
          if(!$this->db_connect){
             die('connection fail'. mysqli_error($this->db_connect));
          } 
      }
      
      public function show_customer_message_info(){
         $sql="select * from tbl_contact where activity_status=0 order by contact_id desc";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }

      }
      public function update_customer_message_info($contact_id){
         $sql="select * from tbl_contact where contact_id='$contact_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
            
      }
      
      public function update_message_info($contact_id){
         $sql="update  tbl_contact set activity_status=1 where contact_id='$contact_id' ";
         if(mysqli_query($this->db_connect, $sql)){
           $mesage="update message info successfully";
            return $mesage;
          
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
         
      }
      public function move_select_update_message_info(){
         $sql="select * from tbl_contact where activity_status=1 order by contact_id desc";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
         
      }
      
      
      public function delete_seen_message($id){
         $sql="delete from tbl_contact where contact_id='$id' ";
         if(mysqli_query($this->db_connect, $sql)){
           $message="delete message info successfully";
            return $message;
          
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
         
      }
      
      
      
   }

?>