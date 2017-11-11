<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: sign_in.php");
   }
?>