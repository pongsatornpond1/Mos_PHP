<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>Update</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$user = "root";
	$Password = "";
	$dbName = "work";

	$conn = mysqli_connect($serverName,$user,$Password,$dbName);

	
	$sql = "UPDATE history1 SET
			password = '".$_POST["txtpassword"]."',
			firstname = '".$_POST["txtFirstname"]."',
			lastname = '".$_POST["txtLastname"]."',
			Email = '".$_POST["txtEmail"]."',
			Phone = '".$_POST["txtPhone"]."'
			WHERE stdid = '".$_POST["txtStudentid"]."'  ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		
		echo "Update successfully";
	}

	mysqli_close($conn);
?>
<form action="Show.php" name="frmUp" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>