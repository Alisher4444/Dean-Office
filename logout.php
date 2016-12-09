<?php
session_start();

if(!isset($_SESSION['users']))
{
	header("Location: index.php");
	
}
else if(isset($_SESSION['users'])=="")
{
	header("Location: index.php");
	
}


if(isset($_GET['logout']))
{
	
	session_destroy();
	unset($_SESSION['users']);
	setcookie("loggedin","",time()-0,"/");
	header("Location: index.php");
	session_destroy();
	
}
?>