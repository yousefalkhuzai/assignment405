<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "yousef23";
$password = "";
$database = "bookdatabase";

$conn = new mysqli($servername, $username, $password, $database);

// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}

?>
