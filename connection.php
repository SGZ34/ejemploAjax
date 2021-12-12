<?php

class connection{
 
   public function con(){
      return  mysqli_connect(
         'localhost',
         'root',
         '',
         'TallerPOO'
      );
   }
}

 


?>