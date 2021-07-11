<?php  
	if(empty($_POST))
	{
		header("location:acclogin.php");
	}
	$error = array();

	if(empty($_POST['uname']))
	{
		$error[] = "name empty";
	}
	if(empty($_POST['pwd']))
	{
		$error[] = "pass empty";
	}
	if(!empty($error))
	{
		echo "error"."<hr>";
		foreach ($error as $e)
		{
			echo $e."<br>";
		}
		exit;
	}

	$conn = mysqli_connect("localhost","root","","wtshop");
		if(!$conn) {
			die("failed");
		}


		$emailid = $_POST['uname'];
		$firstname = $_POST['pwd'];

		$sql = "SELECT * FROM register WHERE username = '$emailid'";
		$result = mysqli_query($conn,$sql);

		while ($row = mysqli_fetch_assoc($result)) {
			$dbname = $row['username'];
			$dbpwd = $row['password'];
		}
		if(!$firstname == $dbpwd) {
			session_start();
			$_SESSION['emailid'] = $dbname;
			header("location:main.php");
		}
		else {
			header("location:main.php");
		}

?>