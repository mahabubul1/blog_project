<?php 
   class formate{
      public function formatedate($date){
        return date('F j , y , g:i a. ', strtotime($date)); 
      } 
      public function textshorten($text,$limt=400){
         $text=$text. " ";
         $text= substr($text, 0, $limt);
         $text= substr($text, 0, strrpos($text, ' '));
         $text = $text ." -----";
         return $text;
      }
      
      public function title(){
         $path=$_SERVER['SCRIPT_FILENAME'];
         $title=basename($path, '.php');
         if($title=='index'){
           $title='home';
         }elseif($title=='contact'){
            $title='contact';
         }
         return $title = ucwords($title);
      }

   }
?>