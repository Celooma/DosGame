<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//Drop database
$sql = 'DROP DATABASE gameDB';

if ($conn->query($sql) === TRUE) {
    echo " <br> Database Deleted successfully";
} else {
    echo " <br> Error creating database: " . $conn->error;
}


// Create database
$sql1 = "CREATE DATABASE gameDB";
if ($conn->query($sql1) === TRUE) {
    echo "<br> <br><br> Database Game created successfully";
} else {
    echo "<br> Error creating database: " . $conn->error;
}

$conn->close();
?>