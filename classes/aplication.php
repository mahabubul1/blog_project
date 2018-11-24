<?php 
   class aplication{
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
      
      
      public function select_all_pagination_info($pages){
         $sql="select *from tbl_post where publication_status =1 limit $pages,3 ";
         if(mysqli_query($this->db_connect, $sql)){
            $result= mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      public function select_all_post_info(){
         $sql="select *from tbl_post where publication_status =1";
         if(mysqli_query($this->db_connect, $sql)){
            $result= mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
     
      
      public function details_post_info_by_id($post_id){
         $sql=" select * from tbl_post  where post_id='$post_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $result= mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function relate_post_info($category_id){
         $sql=" select * from tbl_post where  publication_status=1 and category_id='$category_id' limit 6";
         if(mysqli_query($this->db_connect, $sql)){
            $rel_result=mysqli_query($this->db_connect, $sql);
             return $rel_result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function select_category_all_info(){
         $sql="SELECT * FROM tbl_category where publication_status=1;";
         if(mysqli_query($this->db_connect, $sql)){
           $cat_result=mysqli_query($this->db_connect, $sql);
             return $cat_result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function post_info_by_id($category_id){
          $sql="select  p.*,c.category_name from tbl_post as p,tbl_category as c where p.category_id=c.category_id  AND p.category_id='$category_id'";
          if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      public function lasted_post_info(){
          $sql=" select * from tbl_post where publication_status= 1 order by post_id DESC limit  4";
          if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function search_post_info_by_id(){
         $sql=" select * from tbl_post where post_title like %'$search'% OR post_discription like %'$search%' ";
          if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function select_logo_info(){
         $sql="select * from tbl_logo where publication_status=1";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      public function select_media_info(){
          $sql="select * from tbl_media where publication_status=1";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
         
      }
      
      public function show_select_page_info(){
         $sql="select * from tbl_pages where publication_status=1 limit 5";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function show_page_info($pages_id){
          $sql="select * from tbl_pages where pages_id='$pages_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
             return $result;
         }else{
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      /** category_name **/
      public function select_category_name($category_id){
         $sql=" select * from tbl_category where  category_id='$category_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $cat_result= mysqli_query($this->db_connect, $sql);
             return $cat_result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      public function insert_customer_contact_data($data){
         $first_name=$data['first_name'];
         $last_name=$data['last_name'];
         $email_address=$data['email_address'];
         $message_box=$data['message_box'];
      
         if(empty($first_name)){
            $meassage= "<p style='color:red'>First name must not ne empty!</p>"; 
            return  $meassage; 
         }elseif(empty($last_name)){
            $meassage= "<p style='color:red'>Last name must not ne empty!</p>"; 
            return  $meassage; 
         }elseif(empty($email_address)){
             $meassage= "<p style='color:red'>Email  must not ne empty! </p>"; 
             return  $meassage;  
         }elseif(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
            $meassage= "<p style='color:red'>email is not valid! </p>"; 
            return  $meassage;    
         }elseif(empty($message_box)){
             $meassage= "<p style='color:red'>Message  must not ne empty! </p>"; 
              return  $meassage;
         }else{
            $sql="INSERT INTO tbl_contact(first_name,last_name,email_address,message_box) values('$first_name' ,'$last_name','$email_address','$message_box')";
            if(mysqli_query($this->db_connect, $sql)){
               $meassage= "<p style='color:green'> Message send successfully! </p>"; 
               return  $meassage;
            }else{
                die('connection fail'. mysqli_error($this->db_connect));
            }
           
         }
      }
      public function show_slider_info(){
          $sql=" select * from tbl_slider where publication_status=1 order by slider_id limit 3";
         if(mysqli_query($this->db_connect, $sql)){
            $sli_result=mysqli_query($this->db_connect, $sql);
             return $sli_result;
         }else{
            die('connection fail'. mysqli_error($this->db_connect));
         }
      }
     
      
      
      
      
   }





?>

