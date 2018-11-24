<?php 
   class category_post{
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
      public function save_product_info($data){
        $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['post_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['post_image']['size'];
        // echo $image_size;
        $image= getimagesize($_FILES['post_image']['tmp_name']);
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
                   $sql="INSERT INTO tbl_post (category_id,post_title,post_discription,post_image,post_authors,post_tags,publication_status) values('$data[category_id]', '$data[post_title]', '$data[post_discription]', '$target_file', '$data[post_authors]', '$data[post_tags]', '$data[publication_status]')";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['post_image']['tmp_name'], $target_file);
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
      
      public function select_category_post_all_info(){
         $sql=" select * from tbl_post";
         if(mysqli_query($this->db_connect, $sql)){
            $result=mysqli_query($this->db_connect, $sql);
            return $result;
         }else{
           die('connection fail'. mysqli_error($this->db_connect)); 
         }
      }
      public function unpublished_post_info($post_id){
         $sql="update tbl_post set publication_status=0 where  post_id='$post_id' ";
          if(mysqli_query($this->db_connect, $sql)){
            $message="update post intfo ";
            return $message;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
      }
      
     public function published_post_info($post_id){
         $sql="update tbl_post set publication_status=1 where  post_id='$post_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $message="update post intfo ";
            return $message;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
     }  
      
     public function delete_post_info($post_id){
          $sql="delete from tbl_post where  post_id='$post_id' ";
         if(mysqli_query($this->db_connect, $sql)){
            $message="delete post intfo successfully";
            return $message;
         }else{
            die('connection fail'. mysqli_error($this->db_connect)); 
         }
     }
     
     public function select_post_all_info($post_id){
        $sql=" select p.*,c.category_name from tbl_post as p, tbl_category as c where p.post_id=c.category_id";
        if(mysqli_query($this->db_connect, $sql)){
           $result= mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
           die('connection fail'. mysqli_error($this->db_connect)); 
        }
     }
     public function select_update_post_all_info($post_id){
          $sql=" select * from tbl_post  where post_id='$post_id' ";
          if(mysqli_query($this->db_connect, $sql)){
           $result= mysqli_query($this->db_connect, $sql);
           return $result;
        }else{
           die('connection fail'. mysqli_error($this->db_connect)); 
        }
     }
     
     public function update_post_all_info($data){
         $diectory='../assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$diectory.$_FILES['post_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['post_image']['size'];
        // echo $image_size;
       $image=$_FILES['post_image']['tmp_name'];
         if(!empty($image)){
               if($image_size>100000000){
                  die('file size is too');
               }else {
                  if(!$image_type='jpg' && !$image_type= 'png' && !$image_type='jpeg'){
                     die( 'file formate is not valid');
                  }else {  
                   $sql="UPDATE tbl_post SET post_title='$data[post_title]', post_discription='$data[post_discription]', post_image='$target_file', post_authors='$data[post_authors]', post_tags='$data[post_tags]', publication_status='$data[publication_status]'  WHERE post_id='$data[category_id]' ";
                   if(mysqli_query($this->db_connect, $sql)){
                      move_uploaded_file($_FILES['post_image']['tmp_name'], $target_file);
                      $message="post info successfully";
                      return $message;
                   }else{
                     die('connection fail'. mysqli_error($this->db_connect));
                   }
                  }
               }
            }else {
            $sql="UPDATE tbl_post SET post_title='$data[post_title]', post_discription='$data[post_discription]',post_authors='$data[post_authors]', post_tags='$data[post_tags]', publication_status='$data[publication_status]'  WHERE post_id='$data[category_id]' ";
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
