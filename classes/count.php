<?php 
   class count{
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
      
      public function show_customer_message_info_id(){
         $sql="select * from tbl_contact where activity_status=0 order by contact_id desc";
         if(mysqli_query($this->db_connect, $sql)){
            $count=mysqli_query($this->db_connect, $sql);
            return $count;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
         
      }
      
      
      
      
   }




?>
