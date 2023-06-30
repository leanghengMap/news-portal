<?php
$server = "localhost";
$user = "root";
$psw = "";
$db = "news_portal";
// Create connection
$conn = mysqli_connect($server, $user, $psw);
$sql = mysqli_select_db($conn, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>