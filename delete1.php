<html>
<head>
<title>Delete</title>
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

	$sql = "DELETE FROM history1
			WHERE stdid = '".$_POST["txtStudentid"]."'  ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Delete successfully ";
	}

	mysqli_close($conn);
?>
<form action="Show.php" name="frmDel" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>