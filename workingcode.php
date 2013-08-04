<?php
$con = mysql_connect("localhost","tom","");
if (!$con) {
die('Could not connect: ' . mysql_error());
}
//select Database

mysql_select_db("sms", $con);

$result = mysql_query("SELECT * FROM dept_info", $con) or die(mysql_error());

echo "<table border='1'>";
echo '<tr> <th>Sl No</th> <th>USN</th> <th>Name</th><th>code1</th><th>code 2</th> <th>code 3</th> <th>code 4</th> <th>code 5</th> 
                <th>code 6</th> <th>code 7</th> <th>code 8</th></tr>';

echo '<form action = "insert.php" method = "post">';
while($row = mysql_fetch_array( $result )) {
    // Print out the contents of each row into a table
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['usn'];
    echo "</td><td>";
    echo $row['name'];
    echo "</td>";
    for ($i=1; $i <= 8; $i++) {
        echo "<td> <input type='text' name='sl[{$row['usn']}][$i]' size='2' /> </td>" ;
    }
    echo '</tr>';
}

?>

<div align="bottom">
<input type = "submit" align = "BOTTOM" value = "Proceed">
</div>
</form>

