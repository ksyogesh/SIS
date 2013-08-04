<?php
session_start();

$usn1=$_SESSION['usn1'];
$sem1=$_SESSION['sem1'];


  
mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");
session_start();

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

<table width="576" border="0">
  <tr>
    <td width="215" height="36"><strong>
      <label><font size="4"> College Name</font></label>
    </strong></td>
    <td width="351">
      <label>        </label>
		 <input type="hidden" name="college" value='$college'/>
		 <?php echo $row[0]
		?> </td>
  </tr>
  <tr>
    <td height="42"><font size="4"> Student Name</font></td>
    <td>
      <label>
	  
	  <input type="hidden" name="name" value='$name'/>
 <?php echo $row[1]
		?>        </label>    </td>
  </tr>
  <tr>
    <td height="43"><font size="4"> USN </font></td>
    <td>
      <label>
        <input type="hidden" name="usn" value='$sem'/>
 <?php echo $usn1
		?>      </label>	  </td>
  </tr>
  <tr>
    <td height="48"><font size="4"> Semester</font></td>
    <td>
	<input type="hidden" name="sem" value='$examtype'/>
	
	<?php echo $sem1
		?></td>
  </tr>
</table>

<table width="582" border = "5">

<br>
<tr>
<th colspan="6">2nd Sem</th>
</tr>

<tr>
  
  <th width="192">Subject Code</th>
 
  <th width="313"> Marks</th>
  </tr>
<tr>
 <th>06CS21</th>

 <td>
 <?php echo $row[3]
		?></tr>

<!--2nd subject-->
<tr>
 <th>06CS22</th>


 <td>
 <?php echo $row[4]
		?> 
 <tr>
 <th>06CS23</th>
 
 <td>  <?php echo $row[5]
		?> </tr>

<!--4th subject-->
<tr>
 <th>06CS24</th>

  <td>
 <?php echo $row[3]
		?></tr>

<!--5th subject-->
<tr>
 <th>06CS25</th>

 <td>
 <?php echo $row[6]
		?></tr>


<!--6th subject-->
<tr>
 <th>06CS26</th>

 <td>
 <?php echo $row[7]
		?></tr>

<!--7th subject-->
<tr>
 <th>06CSL27</th>

  <td>
   <?php echo $row[8]
		?> 
</tr>

<!--8th subject-->
<tr>
 <th>06CSL28</th>

  <td>
 <?php echo $row[9]
		?> 

</tr>
<tr>
 <th>Total</th>

  <td>
 <?php echo $row[10]
		?> </tr>
<tr>
 <th>Result</th>

  <td>

 <?php echo $row[11]
		?> 
</tr>
</table>



