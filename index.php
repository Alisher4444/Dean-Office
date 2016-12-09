<?php
session_start();
if(isset($_SESSION['users'])!="")
{
	header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['SignUp']))
{
	$uname = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['password']));

	$fname = mysql_real_escape_string($_POST['first-name']);
	$sname = mysql_real_escape_string($_POST['second-name']);
	$pin = mysql_real_escape_string($_POST['PIN']);
	$gname = mysql_real_escape_string($_POST['group-name']);

	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
	$fname = trim($fname);
	$sname = trim($sname);
	$pin = trim($pin);
	$gname = trim($gname);

	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result);

	if($count == 0){

		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass,first_name,sec_name,pin,group_name) VALUES('$uname','$email','$upass','$fname','$sname',
			'$pin','$gname')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
			header("Location: personal.php");
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dean-office</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

	<div class="main-page">
			<div class="header">

					<div class="links">
						<a class="links1" href="index.php">Main page</a>
						<a class="links2" href="">Examples</a>
						<a class="links3" href="">About admin</a>
						<a class="links4" href="">Dean office</a>
					</div>
					<div class="login">
						<a href="signup.php">Sign Up</a>
						<a href="signin.php">Sign In</a>
					</div>

			</div>
			<hr class="line">
			<div class="logo">
				<img src="store/logo.png">
			</div>
			<h1 class="heading" style="color:#ccc;">Welcome to the Dean Office</h1>
			<p class="parag" style="color:#ccc;">International IT University</p>
			<a href="signup.php"><input type="button" name="button" class="btn" value="Registration"></a>
	</div>
	<div class="example-page">
		<div class="definition">
			<div class="row">
				<div class="col-sm-3 design">
					<img  width="40px" src="store/features-1.png">
					<h2>Design</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
				</div>
				<div class="col-sm-3 example">
					<img width="40px" src="store/features-1.png">
					<h2>Applications</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
				</div>
				<div class="col-sm-3 time">
					<img  width="40px" src="store/features-1.png">
					<h2>Gain Time</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
				</div>
				<div class="col-sm-3 aim">
					<img  width="40px" src="store/features-1.png">
					<h2>Website aim</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
				</div>
			</div>
		</div>
	</div>



	<div class="about-admin">
		<div class="definition">
			<h3 class="hello">Hello my name is</h3>
			<h1 class="Name">Alisher Bazarkhanov</h1>
			<div class="row">
				<div class="col-md-6-pro portfo	lio-item-pro">
					<img class="img-responsive-pro" width="300px" src="store/profile.jpg">
					<p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><a class="readmore" href="about_admin.html">Read more...</a>
				</div>
			</div>
		</div>
	</div>
	<div class="dean-office">
		<div class="portfolios">
			<div class="row">
			<div class="col-sm-4">
				<img class="round2" src="store/shyngys.jpg">
				<p class="about_dean">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="col-sm-4">
				<img  class="round" src="store/dean.jpg">
				<p class="about_dean col-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="col-sm-4">
				<img class="round3" src="store/images.jpg">
				<p class="about_dean col-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			</div>
		</div>
	</div>

	<div class="registration">
		<h1 class="headingReg">Are you student of IT University? <br>Get Started Now!</h1>

		<div class="list">
			<form action="index.php" method="post">
			<input type="text" name="username" class="form id" placeholder="Your ID" required>

			<input type="password" name="password" class="form password" placeholder="Password" required>

			<input type="text" name="first-name" class="form first_name" placeholder="First Name" >

			<input type="text" name="second-name" class="form surname" placeholder="Second Name" >

			<input type="text" name="group-name" class="form group" placeholder="Group Name" >

			<input type="text" name="email" class="form year" placeholder="Email" >

			<input type="text" name="PIN" class="form iin" placeholder="Personal Identification Number" >

			<div class="roundedOne">
				<input type="checkbox" value="None" id="roundedOne" name="check" />
				<label for="roundedOne"></label>
			</div>
			<p class="term">I agree to the Terms of IT University</p>
			<input type="submit" name="SignUp" value="Sign Up" class="signBtn">

			</form>

		</div>
	</div>
	<div class="main-footer">
		<div class="footer">
			<img class ="sad" src="store/vk.png">
			<img src="store/facebook.png">
			<img src="store/instagram.png">
			<a href="">Home</a>
			<a href="">Examples</a>
			<a href="">About Admin</a>
			<a href="">Dean Office</a>
		<div class="bf">
			<a href="">Contact</a>
			<a href="">|</a>
			<a href="">Blog</a>
		</div>
		</div>

		<div class="under-footer">
			<h4 class="footer_h4">Almaty, Kazakhstan</h4>
			<p>@Alisher Bazarkhanov | Creating New Inc.</p>
		</div>
	</div>
</body>
</html>
