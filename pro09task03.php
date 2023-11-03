<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "program09"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample data
$sql = "INSERT INTO semester_reg (id,name, session, phone_No, city, gender) VALUES (101,'Rani', '2017-2018', '01767890', 'Pabna', 'Female')";
if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
