<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	$name =$_POST['name'];
	$mnum = $_POST['mobile'];
	$query = $_POST['query'];

	$sql = "INSERT INTO ANYQUERY  (name, mnum, aqery) VALUES ('$name', '$mnum', '$query')";
	if ($conn->query($sql) === TRUE) {
  
  header("location: main.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>