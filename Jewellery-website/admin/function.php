<?php
$conn = new mysqli("localhost", "root", "", "jewelry-website");
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
function get_Setting($setting_key) { 
    global $conn;
    $query = "SELECT setting_value FROM tbl_site_settings where setting_key = '$setting_key'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
   return $row['setting_value'];
    }
    return "Your Setting Value from Function";

$conn->close();
?>