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

$sql = "select * FROM data WHERE Cities_and_Towns LIKE '%$search%'";


$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["Cities_and_Towns"]."  "."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>