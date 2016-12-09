<?php
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
?>
