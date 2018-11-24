<?php 
   class info_all {
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
      public function save_pages_info($data){
         $sql="INSERT INTO tbl_pages(pages_name,pages_discription,publication_status) values('$data[pages_name]', '$data[pages_discription]', '$data[publication_status]')";
         if(mysqli_query($this->db_connect, $sql)){
            $message=" save pages info successfully";
            return $message;
         }else{
           die('connection fail'. mysqli_error($this->db_connect));
         }
      }
      
      public function select_update_pages_info(){
        $sql="select * from tbl_pages";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
     }
     
      public function unpublished_pages_info($pages_id){
       $sql="update tbl_pages set publication_status=0  where pages_id='$pages_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update pages info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function published_pages_info($pages_id){
        $sql="update tbl_pages set publication_status=1  where pages_id='$pages_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update pages info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function delete_pages_info($pages_id){
       $sql="delete from tbl_pages where pages_id='$pages_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update pages info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
     
    public function update_pages_info($data){
        $sql="UPDATE  tbl_pages set pages_name='$data[pages_name]', pages_discription='$data[pages_discription]', publication_status='$data[publication_status]' ";
         if(mysqli_query($this->db_connect, $sql)){
            $message=" update save pages info successfully";
             return $message;
         }else{
           die('connection fail'. mysqli_error($this->db_connect));
         }
       
    }
   
     public function save_slider_info($data){
        $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['slider_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['slider_image']['size'];
        // echo $image_size;
        $image= getimagesize($_FILES['slider_image']['tmp_name']);
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
                   $sql="INSERT INTO tbl_slider (slider_title,slider_image,publication_status) values('$data[slider_title]', '$target_file', '$data[publication_status]')";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
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
     public function select_slider_info_by_id(){
        $sql="select * from tbl_slider";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
     }
      
     
      public function unpublished_slider_info($slider_id){
       $sql="update tbl_slider set publication_status=0  where slider_id='$slider_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update slider info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function published_slider_info($slider_id){
        $sql="update tbl_slider set publication_status=1 where slider_id='$slider_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update slider info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
    public function delete_slider_info($slider_id){
       $sql="delete from tbl_slider where slider_id='$slider_id' ";
        if(mysqli_query($this->db_connect, $sql)){
          $message=" update slider info successfully ";
           return $message;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
       
    }
   public function update_all_slider_info($slider_id){
      $sql="select * from tbl_slider where slider_id='$slider_id' ";
        if(mysqli_query($this->db_connect, $sql)){
           $result=mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
            die('connection fail'. mysqli_error($this->db_connect));
        }
   }
      
   public function update_slider_info($data){
       $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['slider_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['slider_image']['size'];
        // echo $image_size;
        $image=$_FILES['slider_image']['tmp_name'];
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
                   $sql="update tbl_slider set slider_title='$data[slider_title]',  slider_image='$target_file', publication_status='$data[publication_status]'   where slider_id='$data[slider_id]'";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
                      $message="slider info successfully";
                      return $message;
                   }else{
                     die('connection fail'. mysqli_error($this->db_connect));
                   }
                  }
               }
            }
         }else {
              $sql="update tbl_slider set slider_title='$data[slider_title]', publication_status='$data[publication_status]'  where slider_id='$data[slider_id]'";
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
