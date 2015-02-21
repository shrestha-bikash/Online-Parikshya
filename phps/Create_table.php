<?php
// connect to the MySQL server
$conn = new mysqli('localhost', 'root', '', 'yomari');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query for CREATE TABLE
$sql = "CREATE TABLE `Conductor` (
 `id` INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 `orgName` TEXT(20000),
 `email` TEXT(100) NOT NULL,
 `phoneNo` TEXT(100) NOT NULL,
 `pass` TEXT(100) NOT NULL,
 `cPass` TEXT(100) NOT NULL 
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 

// Performs the $sql query on the server to create the table
if ($conn->query($sql) === TRUE) {
  echo 'Table "conductor" successfully created';
}
else {
 echo 'Error: '. $conn->error;
}

$conn->close();
?>