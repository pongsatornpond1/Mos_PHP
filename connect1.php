<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $user = "root";
   $Password = "";
   $dbName = "work";
  
	$conn = mysqli_connect($serverName,$user,$Password,$dbName);

	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		echo "Database Connected successfully";
	}

	mysqli_close($conn);
?>
</body>
</html>