<html>
<head>
  <title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO NEWS (sno,news)VALUES('$_POST[quantity3]','$_POST[quantity2]')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();

include("/home/icljkcom/users/htdocs/security/newsinsert.html"); 
?>

</body>

</html>
