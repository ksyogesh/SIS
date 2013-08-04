<?php
session_start();
if(!isset($_SESSION['id']))
header('location: index.html');

$uname=$_POST["uname"];
$pass=$_POST["pass"];


if(($uname=="admin")&&($pass=="admin"))
{
		header('location: addmarks.html');
}

else
{
		header('location:invaliduser.html');
}
	
?>
