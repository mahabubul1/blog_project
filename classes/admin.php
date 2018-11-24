<?php 
   class admin{
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
      public function insert_add_user_data($data){
         $password= md5($data['password']);
         $sql="insert into tbl_admin (admin_name,email_address,password, access_lavel)values( '$data[admin_name]', '$data[email_address]', '$password', '$data[access_lavel]')";
         if(mysqli_query($this->db_connect, $sql)){
            $message=" save admin info sucessfull ";
            return $message ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
         
      }
      public function admin_login_check($data){
         $email_address=$data['email_address'];
         $password= md5($data['password']); 
         $sql="select * from tbl_admin where email_address='$email_address' and password='$password' ";
         if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           $admin_info=mysqli_fetch_assoc($result);
           if($admin_info){
              session_start();
              $_SESSION['admin_name']=$admin_info['admin_name'];
              $_SESSION['admin_id']=$admin_info['admin_id'];
              $_SESSION['access_lavel']=$admin_info['access_lavel'];
              header('Location:admin_master.php');
           }else{
              $message="user name and passwors incorrect";
              return $message;
           }
         }else{
            die('connection fail'.' '.mysqli_error($this->db_connect));
         }
         
      }
     public function select_update_admin_info_id($admin_id){
          $access_lavel=$_SESSION['access_lavel'];
        $sql="select * from tbl_admin where admin_id='$admin_id'  and access_lavel='$access_lavel' ";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
     }
     public function update_admin_info_data($data){
         $admin_id=$_SESSION['admin_id'];
        $sql="update tbl_admin set admin_name='$data[admin_name]',email_address='$data[email_address]' where admin_id='$admin_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message="update username and email address";
           return $message ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
     }

     public function select_admin_user_list(){
         $sql="select * from tbl_admin";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
        
     }
     public function delete_admin_info($admin_id){
         $sql="delete from tbl_admin where admin_id='$admin_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $message=" delete admin info successfully ";
           return $message ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
        
     }
     
     
     public function select_admin_info_by_id($admin_id){
         $sql=" select * from tbl_admin  where admin_id='$admin_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result ;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
     }
     
      public function logout(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('Location:index.php');
     } 
      
      
   }

?>