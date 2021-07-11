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
	$email =$_POST['uname'];
	$psw = $_POST['pwd'];

	$sql = "INSERT INTO register (username, password) VALUES ('$email', '$psw')";
	if ($conn->query($sql) === TRUE) {
  
  header("location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>