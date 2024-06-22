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
if (isset($_POST['submit'])) {
    $setting_key = $_POST['setting_key'];
    $setting_value = $_POST['setting_value'];
    
    // Prepare the SQL query to insert the new setting
    $sql = "INSERT INTO tbl_site_settings (setting_key, setting_value) VALUES ('$setting_key', '$setting_value')";
    
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
