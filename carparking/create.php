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

$sql="INSERT INTO zones (street,plot,status,model,vehicle,platenumber,email,account,d1,d2,charge)VALUES (' ','$plot','$status','asdad','adsasd','adsadad','asddaa','asdads','asdad','adasd', 'asdad')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();

?>