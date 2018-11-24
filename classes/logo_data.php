
<?php 
   class category_logo{
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
      
      public function save_logo_info($data){
        $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['logo_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['logo_image']['size'];
        // echo $image_size;
        $image= getimagesize($_FILES['logo_image']['tmp_name']);
         if($image){
            if(file_exists($target_file)){
               die('Image Already is exists');
            }else {
               if($image_size>100000000){
                  die('file size is too');
               }else {
                  if(!$image_type='jpg' && !$image_type= 'png' && !$image_type='jpeg'){
                     die( 'file formate is not valid');
                  }else {  
                   $sql="INSERT INTO tbl_logo (web_titile,web_slogan,logo_image,publication_status) values('$data[web_titile]', '$data[web_slogan]', '$target_file', '$data[publication_status]')";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['logo_image']['tmp_name'], $target_file);
                      $message="post info successfully";
                      return $message;
                   }else{
                     die('connection fail'. mysqli_error($this->db_connect));
                   }
                  }
               }
            }
         }else {
            die('Upload file is not image' .' '. 'please use a image');
         }
      }
      
     public function select_logo_info(){
        $sql="select * from tbl_logo";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
     }
     
    public function unpublished_logo_info($logo_id){
       $sql="update tbl_logo set publication_status=0  where logo_id='$logo_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update logo info ";
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function published_logo_info($logo_id){
       $sql="update tbl_logo set publication_status=1 where logo_id='$logo_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update logo info ";
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function delete_logo_info($logo_id){
       $sql="delete from tbl_logo where logo_id='$logo_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" delete logo info ";
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
     
    public function update_all_logo_info($logo_id){
      $sql="select * from tbl_logo";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
      
      }  
    public function update_logo_info($data){
       $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['logo_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['logo_image']['size'];
        // echo $image_size;
        $image=$_FILES['logo_image']['tmp_name'];
         if(!empty($image)){
            if(file_exists($target_file)){
               die('Image Already is exists');
            }else {
               if($image_size>100000000){
                  die('file size is too');
               }else {
                  if(!$image_type='jpg' && !$image_type= 'png' && !$image_type='jpeg'){
                     die( 'file formate is not valid');
                  }else {  
                   $sql="update tbl_logo set web_titile='$data[web_titile]', web_slogan='$data[web_slogan]', logo_image='$target_file', publication_status='$data[publication_status]' ";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['logo_image']['tmp_name'], $target_file);
                      $message="post info successfully";
                      return $message;
                   }else{
                     die('connection fail'. mysqli_error($this->db_connect));
                   }
                  }
               }
            }
         }else {
            $sql="update tbl_logo set web_titile='$data[web_titile]', web_slogan='$data[web_slogan]', publication_status='$data[publication_status]' ";
            if(mysqli_query($this->db_connect, $sql)){
               $message="post info successfully";
               return $message;
            }else{
              die('connection fail'. mysqli_error($this->db_connect));
            }
         }
      
   }
      
      
      
   }



?>