<?php
session_start();

$usn=$_POST["usn"];



$_SESSION['usn1']=$usn;



	
						header('location: dis.php');


?>

