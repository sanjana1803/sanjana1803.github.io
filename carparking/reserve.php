<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$status = $_GET['status'];
$plot = $_GET['plot'];



$sql = "UPDATE zones SET status='$status' WHERE plot='$plot'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>