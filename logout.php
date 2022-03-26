<?php
ob_start();
session_start();
  ob_end_clean();


  if(isset($_SESSION["Username"])){
   	   	session_id = $_SESSION["Username"];
			  
   	   }
        else{
            ob_start();
            header ("./login.php");
            ob_end_clean();
        }


?>