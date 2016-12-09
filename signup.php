 <?php include_once 'dbconnect.php';


if(isset($_POST['signUp']) && $_FILES['image'])
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



		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$file_name)));

		$expensions= array("jpeg","jpg","png");
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
		}
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"images/".$file_name);
			
		}else{

		}

    $file_titile = trim($file_name);



	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result);

	if($count == 0 ) {


		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass,first_name,
      sec_name,pin,group_name,image_name)
       VALUES('$uname','$email','$upass','$fname','$sname',
			'$pin','$gname','$file_titile')"))
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
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>


<a href="index.php"><img class="back" src="store/back.png"></a>
<div class="form">

<img class="logo-blue" src="store/logo1.png">
	<form action="signup.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="username" placeholder="Login" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
    <input type="text" name="f_name" placeholder="First name" class="f_name" required><br>
    <input type="text" name="s_name" placeholder="Second name" required><br>
    <input type="text" name="g_name" placeholder="Group name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="iin" placeholder="Personal Identification Number" required><br>
    <input type="file" name="image"><br>
		<input type="submit" name="signUp" value="Sign Up" >
	</form>
</div>


</body>
</html>
