
<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
<!--	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {
				background-image: url("image.jpg");

			}

			table {
  				border-collapse: collapse;
  				background-color: black;
  				color: white;
  				width: 100%;
  				border: 2px;
  				margin: auto;
  			}

th, td {
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

h1{
	text-align: center;
	font-family: serif;
	color: white;
}

tr:hover {background-color: green;}
	</style>
</head>
<body>

<table>

<tr><th>Phone</th><th>Desktop</th></tr> -->




<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userdb";




	$device = $_POST['name'];


// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if(mysqli_connect_error())
{
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}

$sql = "INSERT INTO userson (device) VALUES ('$device')";


if ($conn->query($sql) === TRUE) {
    echo "<h1>" . "Number of visited person" . "</h1>" . "<br>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*foreach ($conn->query('SELECT count(*) from userson where device='phone' ';) as $row)
{
	echo "<tr>";
//echo "<td>" . $row['device'] . "</td>";
	echo "<td>" . $row['count(*)'] . "</td>";
	echo "</tr>";
}*/

/*$sql1="SELECT count(*) FROM userson where device = 'phone' ";

$sql2="SELECT count(*) FROM userson where device = 'desktop' ";

$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);

  // Return the number of rows in result set
  $rowcount1=mysqli_fetch_assoc($result1);
  $rowcount2=mysqli_fetch_assoc($result2);

 echo "<tr>";
 echo "<td>" . $rowcount1['count(*)'] . "</td>";
 echo "<td>" . $rowcount2['count(*)'] . "</td>";
 echo "</tr>";
  // Free result set
  mysqli_free_result($result1);
  mysqli_free_result($result2);*/


$conn->close();

?>
</head>
</body>
</html>