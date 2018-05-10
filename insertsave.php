<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insertsave1</title>
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

	$sql = "INSERT INTO history1 (stdid,password , firstname , lastname , Email , Phone ) 
		VALUES (".$_POST["txtStudentid"].",".$_POST["txtpassword"].",'".$_POST["txtFirstname"]."','".$_POST["txtLastname"]."' ,'".$_POST["txtEmail"]."','".$_POST["txtPhone"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Insert successfully ";
	}

	mysqli_close($conn);
?>
<form action="Show.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>