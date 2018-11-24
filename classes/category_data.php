<?php 
   class category{
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
      
     public function save_category_info($data){
        $category_name=$data['category_name'];
        $publication_status=$data['publication_status'];
        $sql=" INSERT INTO tbl_category (category_name,publication_status) values('$category_name','$publication_status') ";
        if(mysqli_query($this->db_connect,  $sql)){ 
           $message="congraculation! save category info";
            return $message;
           
        } else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
        
        
     }
    public function select_category_info(){
       $sql="SELECT * from  tbl_category";
       if(mysqli_query($this->db_connect, $sql)){
          $result=mysqli_query($this->db_connect, $sql);
          return $result;
       }else{
          die(' code problem'.' '.mysqli_error($this->db_connect));
       }
    }
     public function unpublished_category_info($category_id)  {
        $sql="update tbl_category set publication_status= 0 where category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $message=" update category info successfully";
        }else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
     }
     public function published_category_info($category_id){
        $sql="update tbl_category set publication_status= 1 where category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $message="update category info successfully";
           return $message;
        }else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
     }
     public function delete_category_info($category_id){
        $sql="delete from tbl_category where category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $message="delete category info successfully";
           return $message;
        }else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
     }
     
     public function select_category_info_by($category_id){
        $sql="select * from tbl_category ";
        if(mysqli_query($this->db_connect, $sql)){
          $result=mysqli_query($this->db_connect, $sql);
          return $result;
        }else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
        
     }
    public function update_category_info($data){
        $sql=" UPDATE  tbl_category set category_name='$data[category_name]',publication_status='$data[publication_status]' where category_id='$data[category_id]' ";
        if(mysqli_query($this->db_connect,  $sql)){ 
           $message="updata category info";
            return $message;
           
        }else{
           die(' code problem'.' '.mysqli_error($this->db_connect));
        }
    } 
     
     
   }

?>
