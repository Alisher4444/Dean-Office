<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dtest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

function formatDate($date){
	return date('g:i a',strtotime($date));

}


?>