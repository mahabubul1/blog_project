<?php 
   class media{
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
      public function save_media_info($data){
         $sql="INSERT INTO tbl_media (facebook,twitter,linkedin,googleplus,publication_status) values( '$data[facebook]', '$data[twitter]','$data[linkedin]', '$data[googleplus]','$data[publication_status]' )";
         if(mysqli_query($this->db_connect, $sql)){
            $message=" save media info successfully";
            return $message;
         }else {
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function select_media_info(){
         $sql=" select * from tbl_media";
         if(mysqli_query($this->db_connect, $sql)){
         $result=mysqli_query($this->db_connect, $sql);
            return $result;
         }else {
             die('connection fail'. mysqli_error($this->db_connect));
         }
      }
       public function unpublished_media_info($media_id){
       $sql="update tbl_media set publication_status=0  where media_id='$media_id' ";
        if(mysqli_query($this->db_connect, $sql)){
         $message="update media info  successfully";
         return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function published_media_info($media_id){
        $sql="update tbl_media set publication_status=1  where media_id='$media_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message="update media info  successfully";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function delete_media_info($media_id){
       $sql="delete from tbl_media where media_id='$media_id' ";
        if(mysqli_query($this->db_connect, $sql)){
         $message="update media info  successfully";
          return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
    }
    public function select_update_info($media_id){
      $sql="select * from tbl_media";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
      
      } 
   public function update_media_info($data){
      $sql="update tbl_media set facebook='$data[facebook]', twitter='$data[twitter]',linkedin='$data[linkedin]', googleplus='$data[googleplus]', publication_status='$data[publication_status]' ";
      if(mysqli_query($this->db_connect, $sql)){
           $message="update media info  successfully";
             return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
   }   
      
      
   }
      



?>
