
<?php
session_start();
$cookie_name="loggedin";
include_once 'dbconnect.php';

if(isset($_SESSION['users'])!="")
{
	header("Location: personal.php");
}

if(isset($_POST['login']))
{
	$uname = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['password']);
	
	$uname = trim($uname);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_name, user_pass FROM users WHERE user_name='$uname'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); 
	
	if($count==1 && $row['user_pass']==md5($upass))
	{
		$cookie_value=$uname;
		$_SESSION['users'] = $row['user_id'];
		setcookie($cookie_name,$cookie_value,time()+(180),"/");
		header('Location: personal.php');
	}
	else
	{
			
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dean-office</title>
	<link rel="stylesheet" type="text/css" href="css/signIn.css">
</head>
<body>


<a href="index.php"><img class="back" src="store/back.png"></a>
<div class="form">

<img class="logo-blue" src="store/logo1.png">
	<form action="signin.php" method="post">
		<input type="text" name="username" placeholder="Login" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="submit" name="login" value="Sign In" >
	</form>
</div>



</body>
</html>

