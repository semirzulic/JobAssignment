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

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
} 


// Create Table

$mysql = "CREATE TABLE IF NOT EXISTS mydb.users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(30)
)";

if ($conn->query($mysql) === FALSE) {
  	echo "Error creating table: " . $conn->error;
	}

$conn->close();
?>













