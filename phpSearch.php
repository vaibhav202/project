<!DOCTYPE html>
<html>
<head>
<link href="style1.css" rel="stylesheet">
</head>
<?php
$search = $_POST['search'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "ride";

$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * FROM data WHERE Cities_and_Towns LIKE '%$search%' LIMIT 5";


$results = $conn->query($sql);
if ($results->num_rows > 0){
while($row = $results->fetch_assoc() ){
	echo "<a class='cityselector' href='signupforride.php?city=".$row["Cities_and_Towns"]."'>".$row["Cities_and_Towns"]."  "."</a>";
}
} else {
	echo "0 records";
}

$conn->close();

?>
</html>