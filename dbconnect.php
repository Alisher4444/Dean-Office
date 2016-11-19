<?php
$host = "localhost";
$dbname="dtest";
$user="root";
$pass="";


$con = new mysqli($host,$user,$pass,$dbname);

function formatDate($date){
	return date('g:i a',strtotime($date));

}


?>