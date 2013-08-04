<?php
session_start();

$college=$_POST["cname"];
$name=$_POST["name"];
$usn=$_POST["usn"];
$sem=$_POST["sem"];

$_SESSION['college1']=$college;
$_SESSION['name1']=$name;
$_SESSION['usn1']=$usn;
$_SESSION['sem1']=$sem;


	if($sem==1)
		{

					header('location: add1stsem.php');
		
		}
		
		if($sem==2)
		{

					header('location: add2ndsem.php');
		
		}
		
		if($sem==3)
		{

				header('location: add3rdsem.php');
		
		}
		
		if($sem==4)
		{

						header('location: add4thsem.php');
		
		}
		
		if($sem==5)
		{

						header('location: add5thsem.php');		
		}
		
		if($sem==6)
		{

						header('location: add6thsem.php');
		
		}
		
		if($sem==7)
		{
						header('location: add7thsem.php');
		
		}
		
		if($sem==8)
		{

						header('location: add8thsem.php');
		
		}
		

?>

