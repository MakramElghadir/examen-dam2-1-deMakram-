<?php
$servername = "db"; // Name of the MySQL service in docker-compose.yml
$username = "user";
$password = "user_password";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
}

$conn->close();
?>
