<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);
$servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($con);
$sql="SELECT * FROM courses WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" font color=\"red\"><tr>
<th bgcolor=\"green\"><font color=\"white\">Course_Name</th>
<th bgcolor=\"green\"><font color=\"white\">Qualification</th>
<th bgcolor=\"green\"><font color=\"white\">Duration</th>
<th bgcolor=\"green\"><font color=\"white\">Program_Fee</th>
</font> </tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td bgcolor=\"yellow\" align=\"center\"><font color=\"green\">" . $row['Course_Name']. "</font></td>";
  echo "<td bgcolor=\"yellow\"><font color=\"green\">" . $row['Qualification'] . "</font></td>";
  echo "<td bgcolor=\"yellow\"><font color=\"green\">" . $row['Duration'] . "</font></td>";
  echo "<td align=\"center\" bgcolor=\"yellow\"><font color=\"green\">Rs." . $row['Fee'] . "/-</font></td>";
   echo "</tr>";
   }
     
echo "</table>";
mysqli_close($con);
?>
</body>
</html>