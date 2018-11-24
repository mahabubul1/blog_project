
<?php 
   include_once 'classes/aplication.php';
    $obj_app=new aplication();
    $result=$obj_app->show_select_page_info()
?>
<div class="navsection templete">
   <?php 
      $path=$_SERVER['SCRIPT_FILENAME'];
      $currentpages=basename($path,'.php');
   ?>
   <ul>
      <li><a <?php if($currentpages=='index'){ echo 'id="active" '; }?> href="index.php">Home</a></li>
       <?php while ($pages_info = mysqli_fetch_assoc($result)){?>
          <li>             
            <a
              <?php if(isset($_GET['id'])&& $_GET['id']== $pages_info['pages_id'] ){
                echo 'id="active" ';
              } ?> href="about.php?id=<?php echo $pages_info['pages_id']; ?>"> <?php echo $pages_info['pages_name']; ?></a>
         </li>	
        <?php }?>
      <li><a <?php if($currentpages=='contact'){ echo 'id="active" '; }?> href="contact.php">Contact</a></li>
   </ul>
</div>
