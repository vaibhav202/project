<!DOCTYPE html>
<html>
<head>
<link href="style1.css" rel="stylesheet">
</head>
<?php
$pickup = $_POST['pickup'];
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "ride";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * FROM data WHERE Cities_and_Towns LIKE '%$pickup%' LIMIT 5";

$results = $conn->query($sql);
if ($results->num_rows > 0){
while($row = $results->fetch_assoc() ){
	echo "<option class='cityselector' value=".$row["Cities_and_Towns"]."'>".$row["Cities_and_Towns"]."  "."</option>";
}
} else {
	echo "0 records";
}

$conn->close();

?>
</html>