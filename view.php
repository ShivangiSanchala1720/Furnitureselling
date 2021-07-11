<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM register");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
  
  <tr>
    <td>email ID</td>
    <td>password</td>
    </tr>

  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    </tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>