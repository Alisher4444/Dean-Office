<?php 

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('localhost','root','');
mysql_select_db('dtest',$con);

mysql_query("INSERT INTO chat2 ('username','chat') VALUES ('$uname','$msg')");

$result = mysql_query("SELECT *FROM chat2 ORDER by id DESC");

while($extract = mysql_fetch_array($result)){

	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['chat2'] . "</span> <br/>";
}



?>