<?php
$servername = "localhost"; 
$username = "root"; 
$password="";
$database = "program09"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id_to_update = 1; 
$sql = "UPDATE Semester_Reg SET Name = 'Update' WHERE ID = $id_to_update";
if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id_to_update updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
