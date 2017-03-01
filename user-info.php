<?php  
include("db_conection.php");
session_start();
   if($_SESSION['username']) {
        $username = $_SESSION['username'];
   }
   else {
      header("Location: index.php");
   }

?>