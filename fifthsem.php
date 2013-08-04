<?php
session_start();

$usn1=$_SESSION['usn1'];
$sem1=$_SESSION['sem1'];

  
mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");
session_start();

$result = mysql_query("SELECT *  FROM $sem1 where usn='$usn1'");



$i=0;


  
  while($row = mysql_fetch_array($result))
  {
    
$s1= $row[0] ;
$s2= $row[1] ;
$s3= $row[2] ;
$s4=  $row[3] ;
$s5= $row[4];
$s5=$row[5];
$s6=$row[6];
 
   
  }




?>

<table width="576" border="0">
  <tr>
    <td width="215" height="36"><strong>
      <label><font size="4"> College Name</font></label>
    </strong></td>
    <td width="351">
      <label>        </label>
		 <input type="hidden" name="college" value='$college'/>
		 <?php echo $s1
		?> </td>
  </tr>
  <tr>
    <td height="42"><font size="4"> Student Name</font></td>
    <td>
      <label>
	  
	  <input type="hidden" name="name" value='$name'/>
 <?php echo $s1
		?>        </label>    </td>
  </tr>
  <tr>
    <td height="43"><font size="4"> USN </font></td>
    <td>
      <label>
        <input type="hidden" name="usn" value='$sem'/>
 <?php echo $s1
		?>      </label>	  </td>
  </tr>
  <tr>
    <td height="48"><font size="4"> Semester</font></td>
    <td>
	<input type="hidden" name="sem" value='$examtype'/>
	
	<?php echo $s1
		?></td>
  </tr>
</table>

<table width="582" border = "5">

<br>
<tr>
<th colspan="6">5th Sem</th>
</tr>

<tr>
  
  <th width="192">Subject Code</th>
 
  <th width="313"> Marks</th>
  </tr>
<tr>
 <th>06CS51</th>

 <td>
 <?php echo $row[0]
		?></tr>

<!--2nd subject-->
<tr>
 <th>06CS52</th>


 <td>
 <?php echo $s1
		?> 
 <tr>
 <th>06CS53</th>
 
 <td>  <?php echo $s1
		?> </tr>

<!--4th subject-->
<tr>
 <th>06CS54</th>

  <td>
 <?php echo $s1
		?></tr>

<!--5th subject-->
<tr>
 <th>06CS55</th>

 <td>
 <?php echo $s1
		?></tr>


<!--6th subject-->
<tr>
 <th>06CS56</th>

 <td>
 <?php echo $s1
		?></tr>

<!--7th subject-->
<tr>
 <th>06CSL57</th>

  <td>
   <?php echo $s1
		?> 
</tr>

<!--8th subject-->
<tr>
 <th>06CSL58</th>

  <td>
 <?php echo $s1
		?> 

</tr>
<tr>
 <th>Total</th>

  <td>
 <?php echo $s1
		?> </tr>
<tr>
 <th>Result</th>

  <td>

 <?php echo $s1
		?> 
</tr>
</table>



