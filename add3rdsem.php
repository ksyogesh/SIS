<?php
session_start();

$college=$_SESSION['college1'];
$name=$_SESSION['name1'];
$usn=$_SESSION['usn1'];
$sem=$_SESSION['sem1'];

	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>3rd Sem Marks</title>

<script type="text/javascript">

  function checkForm()
  {
      
 
    if(isNaN(form1.si1.value))
   {
     alert("Error:sub1 internal marks should be no");
     form1.si1.focus();
     return (false);
   }
	  
   
   if((form1.si1.value< 0) || (form1.si1.value > 25)  ) {
        alert("Error: sub1 internal marks should be witin 0 to 25!");
        form1.si1.focus();
        return false;
      }
	   if(isNaN(form1.se1.value))
   {
     alert("Error:sub1 external marks should be no");
     form1.se1.focus();
     return (false);
   }
	  if((form1.se1.value< 0) || (form1.se1.value> 100)  ) {
        alert("Error: sub1 external marks should be witin 0 to 100!");
        form1.se1.focus();
        return false;
      }
      
	  if(isNaN(form1.si2.value))
   {
     alert("Error:sub2 internal marks should be no");
     form1.si2.focus();
     return (false);
   }

 if((form1.si2.value.length < 0) || (form1.si2.value.length > 25)  ) {
        alert("Error: sub2 internal marks should be witin 0 to 25!");
        form1.si2.focus();
        return false;
      }
	  
	   if(isNaN(form1.se2.value))
   {
     alert("Error:sub2 external marks should be no");
     form1.se2.focus();
     return (false);
   }
   
	  if((form1.se2.value < 0) || (form1.se2.value > 100)  ) {
        alert("Error: sub2 external marks should be witin 0 to 100!");
        form1.se2.focus();
        return false;
      }
	  
 if(isNaN(form1.si3.value))
   {
     alert("Error:sub3 internal marks should be no");
     form1.si3.focus();
     return (false);
   }

 if((form1.si3.value < 0) || (form1.si3.value > 25)  ) {
        alert("Error: sub3 internal marks should be witin 0 to 25!");
        form1.si3.focus();
        return false;
      }
	  
	   if(isNaN(form1.se3.value))
   {
     alert("Error:sub3 external marks should be no");
     form1.se3.focus();
     return (false);
   }
   
	  if((form1.se3.value < 0) || (form1.se3.value > 100)  ) {
        alert("Error: sub3 external marks should be witin 0 to 100!");
        form1.se3.focus();
        return false;
      }

if(isNaN(form1.si4.value))
   {
     alert("Error:sub4 internal marks should be no");
     form1.si4.focus();
     return (false);
   }

 if((form1.si4.value < 0) || (form1.si4.value > 25)  ) {
        alert("Error: sub4 internal marks should be witin 0 to 25!");
        form1.si4.focus();
        return false;
      }
	  
	   if(isNaN(form1.se4.value))
   {
     alert("Error:sub4 external marks should be no");
     form1.se4.focus();
     return (false);
   }
	  if((form1.se4.value < 0) || (form1.se4.value > 100)  ) {
        alert("Error: sub4 external marks should be witin 0 to 100!");
        form1.se4.focus();
        return false;
      }
if(isNaN(form1.si5.value))
   {
     alert("Error:sub5 internal marks should be no");
     form1.si5.focus();
     return (false);
   }

 if((form1.si5.value < 0) || (form1.si5.value > 25)  ) {
        alert("Error: sub5 internal marks should be witin 0 to 25!");
        form1.si5.focus();
        return false;
      }
	  if(isNaN(form1.se5.value))
   {
     alert("Error:sub5 external marks should be no");
     form1.se5.focus();
     return (false);
   }
	  if((form1.se5.value < 0) || (form1.se5.value > 100)  ) {
        alert("Error: sub5 external marks should be witin 0 to 100!");
        form1.se5.focus();
        return false;
      }
	  
if(isNaN(form1.si6.value))
   {
     alert("Error:sub6 internal marks should be no");
     form1.si6.focus();
     return (false);
   }
   
 if((form1.si6.value < 0) || (form1.si6.value > 25)  ) {
        alert("Error: sub6 internal marks should be witin 0 to 25!");
        form1.si6.focus();
        return false;
      }
	  if(isNaN(form1.se6.value))
   {
     alert("Error:sub6 external marks should be no");
     form1.se6.focus();
     return (false);
   }
	  if((form1.se6.value < 0) || (form1.se6.value > 100)  ) {
        alert("Error: sub6 external marks should be witin 0 to 100!");
        form1.se6.focus();
        return false;
      }
if(isNaN(form1.si7.value))
   {
     alert("Error:sub7 internal marks should be no");
     form1.si7.focus();
     return (false);
   }
 if((form1.si7.value < 0) || (form1.si7.value > 25)  ) {
        alert("Error: sub7 internal marks should be witin 0 to 25!");
        form1.si7.focus();
        return false;
      }
	  
	   if(isNaN(form1.se7.value))
   {
     alert("Error:sub7 external marks should be no");
     form1.se7.focus();
     return (false);
   }
   
	  if((form1.se7.value < 0) || (form1.se7.value > 50)  ) {
        alert("Error: sub8 external marks should be witin 0 to 50!");
        form1.se7.focus();
        return false;
      }
if(isNaN(form1.si8.value))
   {
     alert("Error:sub7 internal marks should be no");
     form1.si8.focus();
     return (false);
   }
 if((form1.si8.value < 0) || (form1.si8.value > 25)  ) {
        alert("Error: sub8 internal marks should be witin 0 to 25!");
        form1.si8.focus();
        return false;
      }
	  if(isNaN(form1.se8.value))
   {
     alert("Error:sub8 external marks should be no");
     form1.se8.focus();
     return (false);
   }
	  if((form1.se8.value < 0) || (form1.se8.value > 50)  ) {
        alert("Error: sub8 external marks should be witin 0 to 50!");
        form1.se8.focus();
        return false;
      }


	 
	   
	
return true;
	
  }

</script>
</head>

<body bgcolor="#FFCCCC">
<h2 align="center">&nbsp;</h2>
<h2 align="center">Student Marks of Computer Science Department Form </h2>
<form id="form1" name="form1" method="post" action="add3rdsemres.php">
<table width="576" border="0" align="center">
  <tr>
    <td width="215" height="36"><strong>
      <label><font size="4"> College Name</font></label>
    </strong></td>
    <td width="351">
      <label>        </label>
		 <input type="hidden" name="college" value='$college'/>
		 <?php echo $college
		?> </td>
  </tr>
  <tr>
    <td height="42"><font size="4"> Student Name</font></td>
    <td>
      <label>
	  
	  <input type="hidden" name="name" value='$name'/>
 <?php echo $name
		?>        </label>    </td>
  </tr>
  <tr>
    <td height="43"><font size="4"> USN </font></td>
    <td>
      <label>
        <input type="hidden" name="usn" value='$sem'/>
 <?php echo $usn
		?>      </label>	  </td>
  </tr>
  <tr>
    <td height="48"><font size="4"> Semester</font></td>
    <td>
	<input type="hidden" name="sem" value='$examtype'/>
	
	<?php echo $sem
		?></td>
  </tr>
</table>


<table width="582" border = "5" align="center">

<br>
<tr>
<th colspan="6">3rd Sem</th>
</tr>

<tr>
  
  <th width="192">Subject Code</th>
  <th width="200">Subject Name</th> 
  <th width="121">Internal Marks</th>
  <th width="193">External Marks</th>
 
 
  </tr>
<tr>
 <th>10MAT31</th>
 <th>Engineering Mathematics - III</th>

 <td>
<input type = "number" name = "si1" size = "2" />
 <td>
<input type = "number" name = "se1" size = "2" />

</tr>

<!--2nd subject-->
<tr>
 <th>10CS32</th>
 <th>Electronic Circuits</th>


 <td>
<input type = "number" name = "si2" size = "2" />
 <td>
<input type = "number" name = "se2" size = "2" />
 
<!-- 3rd subject-->
<tr>
 <th>10CS33</th>
 <th>Logic Design</th>
 
 <td>
<input type = "number" name = "si3" size = "2" />
 <td>
<input type = "number" name = "se3" size = "2" />
 
</tr>

<!--4th subject-->
<tr>
 <th>10CS34</th>
 <th>Discrete Mathematical Structures</th>

  <td>
<input type = "number" name = "si4" size = "2" />
 <td>
<input type = "number" name = "se4" size = "2" />

</tr>

<!--5th subject-->
<tr>
 <th>10CS35</th>
 <th>Data Structures with C</th>

 <td>
<input type = "number" name = "si5" size = "2" />
 <td>
<input type = "number" name = "se5" size = "2" />
 
</tr>


<!--6th subject-->
<tr>
 <th>10CS36</th>
 <th>Object Oriented Programming with C++</th>

 <td>
<input type = "number" name = "si6" size = "2" />
 <td>
<input type = "number" name = "se6" size = "2" />

</tr>

<!--7th subject-->
<tr>
 <th>10CSL37</th>
 <th>Data Structures with C/C++ Laboratory</th>

  <td>
<input type = "number" name = "si7" size = "2" />
 <td>
<input type = "number" name = "se7" size = "2" />

</tr>

<!--8th subject-->
<tr>
 <th>10CSL38</th>
 <th>Electronic Circuits & Logic Design Laboratory</th>

  <td>
<input type = "number" name = "si8" size = "2" />
 <td>
<input type = "number" name = "se8" size = "2" />

</tr>
</table>

<br>
<br>
<p align="center">
<input type=submit value="submit" onClick="return checkForm(this);">
<input type=reset value="reset">
</p>
</form>
</body>
</html>
