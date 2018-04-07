<?php
  session_start();
  if(isset($_SESSION['loginname']) and isset($_SESSION['loginname']))
  {
	session_destroy();
	header("location:index.php");
  }
?>