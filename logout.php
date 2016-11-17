<?php
session_start();

if(!isset($_SESSION['users']))
{
	header("Location: index.php");
}
else if(isset($_SESSION['users'])!="")
{
	header("Location: personal.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['users']);
	setcookie("loggedin","val",time()-(120),"/");
	header("Location: index.php");
}
?>