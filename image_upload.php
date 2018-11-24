

<?php 
   if(isset($_POST['btn'])){
        $directory='assets/font_end_assets/images/';
        //echo $directory;
        $target_file=$directory.$_FILES['post_image']['name'];
       /// echo $target_file;
        $image_type= pathinfo($target_file,PATHINFO_EXTENSION);
        ///echo $image_type;
        $image_size=$_FILES['post_image']['size'];
        // echo $image_size;
         
        $image=getimagesize($_FILES['post_image']['tmp_name']);
       if($image){
           if(file_exists($target_file)){
              die('This image already exists');
           }else{
              if($image_size>10000000){
                 die('image size too large');
              }else{
                 if($image_type!='jpg' && $image_type!='jpeg' && $image_type!='png' ){                    
                  die('image type is not valid');
                 }else {
                    move_uploaded_file($_FILES['post_image']['tmp_name'], $target_file);
                    echo 'successfully';
                 }
              }
           }

        }else{
             die('connection fail'. mysqli_error($this->db_connect));
        }
        
        
        
        
     
         
    
       
   }



?>





<form action=" "  method="post" enctype="multipart/form-data" >
   <div class="control-group">
      <label class="control-label"  for="textarea2">Category Image</label>
      <div class="controls">
         <input type="file" name="post_image" />
      </div>
   </div>
   <div class="control-group">
      <div class="controls">
         <input type="submit" name="btn" />
      </div>
   </div>
</form>