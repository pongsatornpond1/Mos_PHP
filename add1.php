<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=work", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
    $sql = "CREATE TABLE history1 (
    stdid INT(9) PRIMARY KEY, 
    password VARCHAR(20) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
     Email VARCHAR(50) NOT NULL,
 Phone INT(10) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table history created successfully";	

 

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
