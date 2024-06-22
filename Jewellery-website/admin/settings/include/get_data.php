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

$setting_key = '';
$setting_value = '';

// Check if an id is provided to fetch the setting
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the current setting
    $sql = "SELECT setting_key, setting_value FROM tbl_site_settings WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $setting_key = $row['setting_key'];
        $setting_value = $row['setting_value'];
    } else {
        die("Invalid setting ID.");
    }
}



// Close the database connection
$conn->close();
?>