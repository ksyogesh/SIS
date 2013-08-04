<?php
session_start();
$usn1=$_SESSION['usn1'];

mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");

$result1 = mysql_query("SELECT *  FROM 1cs where usn='$usn1'");
$result2 = mysql_query("SELECT *  FROM 2cs where usn='$usn1'");
$result3 = mysql_query("SELECT *  FROM 3cs where usn='$usn1'");
$result4 = mysql_query("SELECT *  FROM 4cs where usn='$usn1'");
$result5 = mysql_query("SELECT *  FROM 5cs where usn='$usn1'");
$result6 = mysql_query("SELECT *  FROM 6cs where usn='$usn1'");
$result7 = mysql_query("SELECT *  FROM 7cs where usn='$usn1'");
$result8 = mysql_query("SELECT *  FROM 8cs where usn='$usn1'");


if(!$result1)
echo "";
else
{
	if($row=mysql_fetch_row($result1))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title><link rel=\"stylesheet\" type=\"text/css\" href=\"css/styleofdis.css\" /></head><body>";
	echo "<div id= \"details\">";
	echo "<table border=2 bgcolor='#E6E6E6' width=300>";
	echo "<tr><td colspan='2' align='center'><b><font color='maroon' size=4>Student Details</td></tr>";
	echo "<tr><td align = 'center'><b><font color='maroon' size=4>College Name</td><td align = 'center'><font size=4>" . $cname ."</td><tr>";
	echo "<td align = 'center'><b><font color='maroon' size=4>Student Name</td><td align = 'center'><font size=4>" . $sname ."</td><tr>" ;
	echo "<td align = 'center'><b><font color='maroon' size=4>USN</td><td align = 'center'><font size=4>" . $reg ."</td><tr>";
	echo "</table>";
	echo "</div>";
	echo "</body></html>";
			echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
		echo "<html><head></head><body>";
		echo "<div id=\"group1\">";
		echo "<div id=\"firstsem\">";
		echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
		echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>1st Sem Result Page</td></tr>";
		echo "<td><b><font color='maroon' size=4>10 MAT-11</td><td align = 'center'><b><font color='maroon' size=4>Maths-I</td><td align = 'right'>" . $sub1 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 PHY-12</td><td align = 'center'><b><font color='maroon' size=4>Physics</td><td align = 'right'>" . $sub2 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 CIV-13</td><td align = 'center'><b><font color='maroon' size=4>ECE</td><td align = 'right'>" . $sub3 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 EME-14</td><td align = 'center'><b><font color='maroon' size=4>EME</td><td align = 'right'>" . $sub4 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 ELE-15</td><td align = 'center'><b><font color='maroon' size=4>ELE</td><td align = 'right'>" . $sub5 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 CIP-18</td><td align = 'center'><b><font color='maroon' size=4>CIP</td><td align = 'right'>" . $sub6 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 WSL-16</td><td align = 'center'><b><font color='maroon' size=4>Workshop Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
		echo "<td><b><font color='maroon' size=4>10 PHYL-17</td><td align = 'center'><b><font color='maroon' size=4>Physics Lab</td><td align = 'right'>" . $sub8 . "</td><tr>";
		echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
		echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";
	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result2)
echo "";
else
{
	if($row=mysql_fetch_row($result2))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"secondsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>2nd Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10 MAT-11</td><td align = 'center'><b><font color='maroon' size=4>Maths-II</td><td align = 'right'>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 CHE-12</td><td align = 'center'><b><font color='maroon' size=4>Chemistry</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 CCP-13</td><td align = 'center'><b><font color='maroon' size=4>CCP</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CED 14</td><td align = 'center'><b><font color='maroon' size=4>CADD</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 ELN-15</td><td align = 'center'><b><font color='maroon' size=4>Electronics</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 CPL-16</td><td align = 'center'><b><font color='maroon' size=4>CPL</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 CHEL-17</td><td align = 'center'><b><font color='maroon' size=4>Chemistry Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10 CIV-18</td><td align = 'center'><b><font color='maroon' size=4>CIV</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total:-</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result:-</td><td align = 'right'>" . $res . "</td><tr>";

	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result3)
echo "";
else
{
	if($row=mysql_fetch_row($result3))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"thirdsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>3rd Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10MAT31</td><td align = 'center'><b><font color='maroon' size=4>Maths-III</td><td align = 'right'>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS32</td><td align = 'center'><b><font color='maroon' size=4>EC</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS33</td><td align = 'center'><b><font color='maroon' size=4>LD</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS34</td><td align = 'center'><b><font color='maroon' size=4>DMS</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS35</td><td align = 'center'><b><font color='maroon' size=4>DS</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS36</td><td align = 'center'><b><font color='maroon' size=4>OOPS</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL37</td><td align = 'center'><b><font color='maroon' size=4>DS Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL38</td><td align = 'center'><b><font color='maroon' size=4>EC & LD Lab</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";
	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result4)
echo "";
else
{
	if($row=mysql_fetch_row($result4))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"fourthsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>4th Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10MAT41</td><td align = 'center'><b><font color='maroon' size=4>Maths-IV</td><td align = 'right'>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS42</td><td align = 'center'><b><font color='maroon' size=4>GT</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS43</td><td align = 'center'><b><font color='maroon' size=4>ADA</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS44</td><td align = 'center'><b><font color='maroon' size=4>USP</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS45</td><td align = 'center'><b><font color='maroon' size=4>MP</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS46</td><td align = 'center'><b><font color='maroon' size=4>CO</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL47</td><td align = 'center'><b><font color='maroon' size=4>ADA Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL48</td><td align = 'center'><b><font color='maroon' size=4>MP Lab</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";
	echo "</table></b>";
	echo "</div>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result5)
echo "";
else
{
	if($row=mysql_fetch_row($result5))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"group2\">";
	echo "<div id=\"fifthsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>5th Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10CS52</td><td align = 'center'><b><font color='maroon' size=4>SE</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS53</td><td align = 'center'><b><font color='maroon' size=4>SS</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS54</td><td align = 'center'><b><font color='maroon' size=4>OS</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS55</td><td align = 'center'><b><font color='maroon' size=4>DBMS</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS56</td><td align = 'center'><b><font color='maroon' size=4>CN-I</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL57</td><td align = 'center'><b><font color='maroon' size=4>FLAT</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL58</td><td align = 'center'><b><font color='maroon' size=4>DBMS Lab-1</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";


	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}



if(!$result6)
echo "";
else
{
	if($row=mysql_fetch_row($result6))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"sixthsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>6th Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10AL61</td><td align = 'center'><b><font color='maroon' size=4>M&E</td><td align = 'right'>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS62</td><td align = 'center'><b><font color='maroon' size=4>USP</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS63</td><td align = 'center'><b><font color='maroon' size=4>CD</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS64</td><td align = 'center'><b><font color='maroon' size=4>CN-II</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS65</td><td align = 'center'><b><font color='maroon' size=4>CG&V</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS66x</td><td align = 'center'><b><font color='maroon' size=4>Elective-I</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL67</td><td align = 'center'><b><font color='maroon' size=4>CG&V Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL68</td><td align = 'center'><b><font color='maroon' size=4>USP & CD Lab</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";


	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result7)
echo "";
else
{
	if($row=mysql_fetch_row($result7))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$sub7=$row[9];
		$sub8=$row[10];
		$tot=$row[11];
		$res=$row[12];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"seventhsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>7th Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10CS71</td><td align = 'center'><b><font color='maroon' size=4>OOMD</td><td align = 'right'>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS72</td><td align = 'center'><b><font color='maroon' size=4>ECS</td><td align = 'right'>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS73</td><td align = 'center'><b><font color='maroon' size=4>PW</td><td align = 'right'>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS74</td><td align = 'center'><b><font color='maroon' size=4>ACA</td><td align = 'right'>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS75x</td><td align = 'center'><b><font color='maroon' size=4>Elective-II</td><td align = 'right'>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS76x</td><td align = 'center'><b><font color='maroon' size=4>Elective-III</td><td align = 'right'>" . $sub6 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL77</td><td align = 'center'><b><font color='maroon' size=4>Network Lab</td><td align = 'right'>" . $sub7 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CSL78</td><td align = 'center'><b><font color='maroon' size=4>Web Lab</td><td align = 'right'>" . $sub8 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td align = 'right'>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td align = 'right'>" . $res . "</td><tr>";

	echo "</table></b>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

if(!$result8)
echo "";
else
{
	if($row=mysql_fetch_row($result8))
	{
		$cname=$row[0];
		$sname=$row[1];
		$reg=$row[2];
		$sub1=$row[3];
		$sub2=$row[4];
		$sub3=$row[5];
		$sub4=$row[6];
		$sub5=$row[7];
		$sub6=$row[8];
		$tot=$row[9];
		$res=$row[10];
		
	
	echo "<html><head><title> RESULT</title></head><body>";
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";
	echo "<div id=\"eighthsem\">";
	echo "<table border=2 bgcolor='#FFFFCC' height=400 width=300>";
	echo "<tr><td colspan='3' align='center'><b><font color='maroon' size=4>8st Sem Result Page</td></tr>";
	//echo "<tr><td><b><font color='maroon' size=4>College Name:-</td><td>" . $cname . "</td><tr>";
	//echo "<td><b><font color='maroon' size=4>Student Name:-</td><td>" . $sname . "<tr>";
	//echo "<td><b><font color='maroon' size=4>USN:-</td><td>" . $reg . "<tr>";
	echo "<td><b><font color='maroon' size=4>10IS81</td><td align = 'center'><b><font color='maroon' size=4>ACA</td><td>" . $sub1 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS82</td><td align = 'center'><b><font color='maroon' size=4>SMS</td><td>" . $sub2 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS83x</td><td align = 'center'><b><font color='maroon' size=4>Elective-IV</td><td>" . $sub3 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS84x</td><td align = 'center'><b><font color='maroon' size=4>Elective-VI</td><td>" . $sub4 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS85</td><td align = 'center'><b><font color='maroon' size=4>Project work</td><td>" . $sub5 . "</td><tr>";
	echo "<td><b><font color='maroon' size=4>10CS86</td><td align = 'center'><b><font color='maroon' size=4>Seminar</td><td>" . $sub6 . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Total</td><td>" . $tot . "</td><tr>";
	echo "<td colspan = '2'><b><font color='maroon' size=4>Result</td><td>" . $res . "</td><tr>";


	echo "</table></b>";
	echo "</div>";
	echo "</div>";
	echo "</body></html>";	
	}
	else
	{
		echo "";
	}
}

?><title>Result Page</title>
<p><a href="resultselect.html"><font color="#3333FF" face="Courier New, Courier, monospace">Back To Home</font></a></p>
