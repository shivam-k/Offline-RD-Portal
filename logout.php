<?php
session_start();
if($_SESSION['username']) {
  session_destroy();
  header("Location: index.php");
}
else {
	header ("Location: home.php");
}


?>