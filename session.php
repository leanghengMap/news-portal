<?php
include('./config.php');
session_start();

$user_check = $_SESSION['login_user'];
$sql = "SELECT *  FROM `tblsubscriber` WHERE `subscriber_name` = '$user_check'";
$ses_sql = mysqli_query($conn, $sql);

$user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $user['subscriber_name'];
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    die();
}
?>