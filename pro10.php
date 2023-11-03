<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS programmmer";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db("programmmer");

$sql = "CREATE TABLE IF NOT EXISTS stu_reg (
      id VARCHAR(30) PRIMARY KEY,
      name TEXT,
      image VARCHAR(400),
      password VARCHAR(20) NOT NULL 
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
