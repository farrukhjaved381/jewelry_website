<?php
// Adjust the include path to correctly point to config.php

$servername = "localhost";
$username = "root";
$password = "";
$database = "jewelry-website";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Prepare the SQL query to delete the setting
    $sql = "DELETE FROM tbl_site_settings WHERE id = $id";
    
    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        header("Location: showlisting.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
