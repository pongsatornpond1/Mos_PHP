<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form method="post">
    <table>
        <tr><td>StudentID</td><td><input type="text" name="Studentid_input" /></td></tr>
        <tr><td>Password</td><td><input type="text" name="password_input" /></td></tr>
        <tr><td></td><td><input type="submit" name="submit" value="Login" /></td></tr>
    </table>
<form>

<?php

ini_set('display_errors', 1);
	error_reporting(~0);
    
	$serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "work";
  
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    $sql_result1 = $conn->query ("SELECT stdid , password FROM history1");
    $rad = mysqli_fetch_array ($sql_result1); 
	

    $stdid = $rad["stdid"];
    $password = $rad["password"];

    if (isset($_POST["submit"])) {
        if ($_POST["Studentid_input"] == $stdid && ($_POST["password_input"]) == $password) {
            $_SESSION["login"] = true;
            header("Location: show.php");
			
        }
        else {
            echo " Login Feil .";
        }
    }
    mysqli_close ($conn);
?>
</body>
</html>
