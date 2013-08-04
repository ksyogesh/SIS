<?php
session_start();

$usn1=$_POST["usn"];
$sem1=$_POST["sem"];


 $select = 'SELECT * from';
  $where  = ' WHERE usn=';
  
mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");
session_start();

$res=mysql_query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='student'  AND `TABLE_NAME`='$sem1' ");

$result = mysql_query("SELECT *  FROM $sem1 where usn='$usn1'");


echo "<table border='1'>";
$i=0;


while(($row = mysql_fetch_array($res)))
  {
 
   
  echo "<tr>";
  
  echo "<td>" . $row[0] . "</td>";
  }
  
  while(($row = mysql_fetch_array($result)))
  {
    
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "<td>" . $row[5] . "</td>";
  echo "<td>" . $row[6] . "</td>";
  echo "<td>" . $row[7] . "</td>";
  echo "<td>" . $row[8] . "</td>";
  echo "<td>" . $row[9] . "</td>";
  echo "<td>" . $row[10] . "</td>";
  echo "<td>" . $row[11] . "</td>";
  echo "<td>" . $row[12] . "</td>";
  echo "<td>" . $row[13] . "</td>";
    echo "</tr>";
  }
echo "</table>";



?>



