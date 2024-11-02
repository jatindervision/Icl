<html>
<head>
<title>ICL</title>
<style>
.img {
    object-fit:cover;
    object-position:center;
    width:50px;
    height:50px;
}
  
</style>
</head>
<body>

<?php
    display();
    function display(){
        $servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
       echo "<TABLE BORDER=2 style='border-color: #f8c300; border: collapse;' CELLPADDING=2 CELLSPACING=2 WIDTH=100%>";
        $sql="select * from STUDENT";
        $query=mysqli_query($con,$sql);
        $num=mysqli_num_rows($query);
        for ($i=0; $i <$num; $i++){
            $result=mysqli_fetch_array($query);
            $img=$result['image'];
            $d=$result['id'];
              $r=$result['rno'];
                $n=$result['name'];
                $p=$result['parentage'];
                $dob=$result['dob'];
                $s=$result['sex'];
                $c=$result['course'];
		        $m=$result['mobile'];
	        	$u=$result['uploaded'];
      $photo='<img class="img" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
                      echo "<tr>";
            echo "<td> $d</td>";
            echo "<td>$r</td>";
            echo "<td>$n</td>";
            echo "<td>$p</td>";
            echo "<td>$dob</td>";
            echo "<td>$s</td>";
            echo "<td>$c</td>";
            echo "<td>$m</td>";
            echo "<td>$photo</td>";
            
            echo "<td> $u </td>";
            echo "</tr>"."<br>";


          
        }
        echo "</table>"; 
    }
?>
</body>
</html>
