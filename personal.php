<!--
<?php
session_start();
include_once 'dbconnect.php';
$s=$_SESSION['users'];
if(isset($_SESSION['users']))
{
	header('Location: personal.php');
	

}
	$c=null;
	if($_SESSION['counter']){
		$c=$_SESSION['counter']+=1;
	}else{
		$c=$_SESSION['counter']+=1;
	}

$res=mysql_query("SELECT * FROM users WHERE user_id='$s'");
//$userRow=mysql_fetch_array($res);
$cookie_name="loggedin";
if(isset($_COOKIE[$cookie_name])){
	$cookie_value=$_COOKIE[$cookie_name];
	echo "Welcome to your personal are $cookie_value!";
	echo '<a href="logout.php">Logout</a>';
	echo "You was online : $c";
}

?>-->
<!DOCTYPE html>
<html>
<head>
	<title>DeanOffice</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/personal.css">
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
	<a href="#">My Profile</a>
	<a href="#">Student List</a>
	<a href="#">User profile</a>
	<a href="#">Statistics</a>
	<a href="#">Contact</a>
</div>

<div class="container">
      
    <img src="tiger.jpg" height="65" width="65" alt="Avatar">
  	<div class="card">
	<h4><b>John Doe</b></h4>
    <p>Architect & Engineer</p>
    </div>
</div>
<div class="footer">
</div>


</body>
</html>