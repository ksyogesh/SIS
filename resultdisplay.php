<?php
session_start();

$usn1=$_SESSION['usn1'];



  
mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");
session_start();

$result = mysql_query("SELECT *  FROM 1cs where usn='$usn1'");


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

<p>&nbsp;</p>
<p>&nbsp;</p>

<table border = "5">

<br>
<tr>
<th colspan="6">1st sem</th>
<th colspan="6">2nd sem</th>
</tr>

<tr>
  
  <th width="75">Subject Code</th>

  <th width="94"> Marks</th>
  <th width="53">&nbsp;</th>
  <th width="76">&nbsp;</th>
  <th width="68">&nbsp;</th>

  <th width="75">Subject Code</th>
  <th width="90">Subject Name</th>
  <th width="80"> Marks</th>
  <th width="84">&nbsp;</th>
  <th width="76">&nbsp;</th>
  <th width="75">&nbsp;</th>
</tr>
<tr>
 <th>06CS01</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS01</th>
 <th>Mathematics</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--2nd subject-->
<tr>
 <th>06CS02</th>


 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>
<th>06CS02</th>
 <th>2nd Subject</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<!-- 3rd subject-->
<tr>
 <th>06CS03</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS03</th>
 <th>3rd subject</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--4th subject-->
<tr>
 <th>06CS04</th>

  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS04</th>
 <th>4th subject</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--5th subject-->
<tr>
 <th>06CS05</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS05</th>

 <th>5th subject</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>


<!--6th subject-->
<tr>
 <th>06CS06</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS06</th>
 <th>6th subject</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--7th subject-->
<tr>
 <th>06CSL07</th>

  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL07</th>
 <th>Lab 1</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--8th subject-->
<tr>
 <th>06CSL08</th>

  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL08</th>
 <th>Lab 2</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>
</table>




<!--3nd Sem-->

<table border = "5">

<br>
<tr>
<th colspan="6">3rd sem</th>
<th colspan="6">4th sem</th>
</tr>
<tr>
  <th width="88">Subject Code</th>
  <th width="4">&nbsp;</th>
  <th width="46"> Marks</th>
  <th width="4">&nbsp;</th>
  <th width="4">&nbsp;</th>
  <th width="123">&nbsp;</th>

  <th width="69">Subject Code</th>
  <th width="164">&nbsp;</th>
  <th width="103"> Marks</th>
  <th width="107">&nbsp;</th>
  <th width="85">&nbsp;</th>
  <th width="68">&nbsp;</th>
</tr>
<tr>
 <th>06MAT31</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06MAT41</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--2nd subject-->
<tr>
 <th>06CS32</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS42</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<!-- 3rd subject-->
<tr>
 <th>06CS33</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>


<th>06CS43</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--4th subject-->
<tr>
 <th>06CS34</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS44</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--5th subject-->
<tr>
 <th>06CS35</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS45</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>


<!--6th subject-->
<tr>
 <th>06CS36</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS46</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--7th subject-->
<tr>
 <th>06CSL37</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL47</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--8th subject-->
<tr>
 <th>06CSL38</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL48</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>
</table>


<!--5rd sem-->


<table border = "5">

<br>
<tr>
<th colspan="6">5th sem</th>
<th colspan="6">6th sem</th>
</tr>
<tr>
  <th width="88">Subject Code</th>
  <th width="4">&nbsp;</th>
  <th width="46"> Marks</th>
  <th width="4">&nbsp;</th>
  <th width="4">&nbsp;</th>
  <th width="283">&nbsp;</th>

  <th width="76">Subject Code</th>
  <th width="47">&nbsp;</th>
  <th width="150"> Marks</th>
  <th width="66">&nbsp;</th>
  <th width="65">&nbsp;</th>
  <th width="41">&nbsp;</th>
</tr>
<tr>
 <th>06CS01</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS01</th>
 <th>&nbsp;</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--2nd subject-->
<tr>
 <th>06CS02</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS02</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>



<!-- 3rd subject-->
<tr>
 <th>06CS03</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>


<th>06CS03</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--4th subject-->
<tr>
 <th>06CS04</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS04</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--5th subject-->
<tr>
 <th>06CS05</th>
 <th>&nbsp;</th>
 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS05</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>


<!--6th subject-->
<tr>
 <th>06CS06</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS06</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--7th subject-->
<tr>
 <th>06CSL07</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL07</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--8th subject-->
<tr>
 <th>06CSL08</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CSL08</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>
</table>

<!--7th sem-->
<table width="958" border = "5">


<tr>
<th colspan="6">7th sem</th>
<th colspan="6">8th sem</th>
</tr>

<tr>
  <th>Subject Code</th>
  <th width="6">&nbsp;</th>
  <th width="142"> Marks</th>
  <th width="84">&nbsp;</th>
  <th width="19">&nbsp;</th>
  <th width="40">&nbsp;</th>

  <th width="134">Subject Code</th>
  <th width="59">&nbsp;</th>
  <th width="83"> Marks</th>
  <th width="1">&nbsp;</th>
  <th width="106">&nbsp;</th>
  <th width="90">&nbsp;</th>
</tr>
<tr>
 <th>06CS01</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS01</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--2nd subject-->
<tr>
 <th>06CS02</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS02</th>
 <th>&nbsp;</th>

 <td>
<input type = "number" name = "s1i" size = "2" />
 <td>
 
 <td>&nbsp;</td>

<td>&nbsp;</td>

<!-- 3rd subject-->
<tr>
 <th>06CS03</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>


<th>06CS03</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--4th subject-->
<tr>
 <th>06CS04</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS04</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--5th subject-->
<tr>
 <th>06CS05</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS05</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>


<!--6th subject-->
<tr>
 <th>06CS06</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<th>06CS06</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>
</tr>

<!--7th subject-->
<tr>
 <th>06CSL07</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>

<!--<th>06CSL07</th>
 <th>Lab 1</th>
 <td><select name="Internal marks" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>


 <td><select name="External marks" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>
<option value=" ">26</option>
<option value=" ">27</option>
<option value=" ">28</option>
<option value=" ">29</option>
<option value=" ">30</option>
<option value=" ">31</option>
<option value=" ">32</option>
<option value=" ">33</option>
<option value=" ">34</option>
<option value=" ">35</option>
<option value=" ">36</option>
<option value=" ">37</option>
<option value=" ">38</option>
<option value=" ">39</option>
<option value=" ">40</option>
<option value=" ">41</option>
<option value=" ">42</option>
<option value=" ">43</option>
<option value=" ">44</option>
<option value=" ">45</option>
<option value=" ">46</option>
<option value=" ">47</option>
<option value=" ">48</option>
<option value=" ">49</option>
<option value=" ">50</option>

</select></td>

 <td><select name="Total" width ="2" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>
<option value=" ">26</option>
<option value=" ">27</option>
<option value=" ">28</option>
<option value=" ">29</option>
<option value=" ">30</option>
<option value=" ">31</option>
<option value=" ">32</option>
<option value=" ">33</option>
<option value=" ">34</option>
<option value=" ">35</option>
<option value=" ">36</option>
<option value=" ">37</option>
<option value=" ">38</option>
<option value=" ">39</option>
<option value=" ">40</option>
<option value=" ">41</option>
<option value=" ">42</option>
<option value=" ">43</option>
<option value=" ">44</option>
<option value=" ">45</option>
<option value=" ">46</option>
<option value=" ">47</option>
<option value=" ">48</option>
<option value=" ">49</option>
<option value=" ">50</option>
<option value=" ">51</option>
<option value=" ">52</option>
<option value=" ">53</option>
<option value=" ">54</option>
<option value=" ">55</option>
<option value=" ">56</option>
<option value=" ">57</option>
<option value=" ">58</option>
<option value=" ">59</option>
<option value=" ">60</option>
<option value=" ">61</option>
<option value=" ">62</option>
<option value=" ">63</option>
<option value=" ">64</option>
<option value=" ">65</option>
<option value=" ">66</option>
<option value=" ">67</option>
<option value=" ">68</option>
<option value=" ">69</option>
<option value=" ">70</option>
<option value=" ">71</option>
<option value=" ">72</option>
<option value=" ">73</option>
<option value=" ">74</option>
<option value=" ">75</option>

</select></td>

<td>
<select name="Result" size="1">
<option value=" ">PASS</option>
<option value=" ">FAIL</option>
<option value=" ">AB</option>
</select>
</td>-->
</tr>

<!--8th subject-->
<tr>
 <th>06CSL08</th>
 <th>&nbsp;</th>
  <td>
<input type = "number" name = "s1i" size = "2" />
  <td>
  
  <td>&nbsp;</td>

<td>&nbsp;</td>


<!-- no 8th subject<th>06CSL08</th>
 <th>Lab 2</th>
 <td><select name="Internal marks" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>


 <td><select name="External marks" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>
<option value=" ">26</option>
<option value=" ">27</option>
<option value=" ">28</option>
<option value=" ">29</option>
<option value=" ">30</option>
<option value=" ">31</option>
<option value=" ">32</option>
<option value=" ">33</option>
<option value=" ">34</option>
<option value=" ">35</option>
<option value=" ">36</option>
<option value=" ">37</option>
<option value=" ">38</option>
<option value=" ">39</option>
<option value=" ">40</option>
<option value=" ">41</option>
<option value=" ">42</option>
<option value=" ">43</option>
<option value=" ">44</option>
<option value=" ">45</option>
<option value=" ">46</option>
<option value=" ">47</option>
<option value=" ">48</option>
<option value=" ">49</option>
<option value=" ">50</option>
</select></td>

 <td><select name="Total" size="1">
<option value=" ">1</option>
<option value=" ">2</option>
<option value=" ">3</option>
<option value=" ">4</option>
<option value=" ">5</option>
<option value=" ">6</option>
<option value=" ">7</option>
<option value=" ">8</option>
<option value=" ">9</option>
<option value=" ">10</option>
<option value=" ">11</option>
<option value=" ">12</option>
<option value=" ">13</option>
<option value=" ">14</option>
<option value=" ">15</option>
<option value=" ">16</option>
<option value=" ">17</option>
<option value=" ">18</option>
<option value=" ">19</option>
<option value=" ">20</option>
<option value=" ">21</option>
<option value=" ">22</option>
<option value=" ">23</option>
<option value=" ">24</option>
<option value=" ">25</option>
<option value=" ">26</option>
<option value=" ">27</option>
<option value=" ">28</option>
<option value=" ">29</option>
<option value=" ">30</option>
<option value=" ">31</option>
<option value=" ">32</option>
<option value=" ">33</option>
<option value=" ">34</option>
<option value=" ">35</option>
<option value=" ">36</option>
<option value=" ">37</option>
<option value=" ">38</option>
<option value=" ">39</option>
<option value=" ">40</option>
<option value=" ">41</option>
<option value=" ">42</option>
<option value=" ">43</option>
<option value=" ">44</option>
<option value=" ">45</option>
<option value=" ">46</option>
<option value=" ">47</option>
<option value=" ">48</option>
<option value=" ">49</option>
<option value=" ">50</option>
<option value=" ">51</option>
<option value=" ">52</option>
<option value=" ">53</option>
<option value=" ">54</option>
<option value=" ">55</option>
<option value=" ">56</option>
<option value=" ">57</option>
<option value=" ">58</option>
<option value=" ">59</option>
<option value=" ">60</option>
<option value=" ">61</option>
<option value=" ">62</option>
<option value=" ">63</option>
<option value=" ">64</option>
<option value=" ">65</option>
<option value=" ">66</option>
<option value=" ">67</option>
<option value=" ">68</option>
<option value=" ">69</option>
<option value=" ">70</option>
<option value=" ">71</option>
<option value=" ">72</option>
<option value=" ">73</option>
<option value=" ">74</option>
<option value=" ">75</option>

</select></td>

<td>
<select name="Result" size="1">
<option value=" ">PASS</option>
<option value=" ">FAIL</option>
<option value=" ">AB</option>
</select>
</td>
</tr>
-->
</table>
<table width="392" height="302" border = "5">
<tr>
  <td>
</tr>
<tr>



