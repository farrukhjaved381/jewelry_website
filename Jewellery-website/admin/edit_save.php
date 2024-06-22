<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jewelry-website";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $setting_key = $_POST['setting_key'];
    $setting_value = $_POST['setting_value'];
    $id = $_POST['id'];
    $setting_key = $conn->real_escape_string($setting_key);
    $setting_value = $conn->real_escape_string($setting_value);
    $sql = "UPDATE tbl_site_settings SET setting_value = '$setting_value', setting_key = '$setting_key' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: showlisting.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
