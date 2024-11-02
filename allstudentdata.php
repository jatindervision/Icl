<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ALL STUDENT DATA</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.img {
    object-fit:cover;
    object-position:center;
    width:60px;
    height:60px;
}
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">STUDENT DATA</h2>
</div>

<a href="/index.php"><H2>---HOME---</H2></a> 
<table class='table table-bordered table-striped' border="5">
<tr >
<td bgcolor="#E6E600">ID</td>
<td bgcolor="#E6E600">ROLL_NO</td>
<td bgcolor="#E6E600">NAME</td>
<td bgcolor="#E6E600">PARENTAGE</td>
<td bgcolor="#E6E600">DOB</td>
<td bgcolor="#E6E600">SEX</td>
<td bgcolor="#E6E600">COURSE</td>
<td bgcolor="#E6E600">MOBILE</td>
<td bgcolor="#E6E600">IMAGE</td>
<td bgcolor="#E6E600">UPLOAD_DT</td>

</tr>

<tr><?php
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

</div>
</div>        
</div>
</div>

    
</body>
</html>