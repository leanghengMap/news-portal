<?php
include_once('../config.php');
$folder = "../images/";
$img = $_FILES['files']['name'];
$lastName = $_POST['last-name'];
$firstName = $_POST['first-name'];
$email = $_POST['email'];
$password = $_POST['password'];

move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img);

$query = "INSERT INTO `tblsubscriber`(
    `subscriber_id`,
    `subscriber_name`,
    `subscriber_email`,
    `lastname`,
    `password`,
    `account_status`,
    `iamge`
)
VALUES(
    NULL,
    '$firstName',
    '$email',
    '$lastName ',
    '$password',
    1,
    '$img'
)";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not insert data: " . mysqli_error($conn);
} else {
    header("Location:../login.php");
}
?>