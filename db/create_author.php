<?php
include_once('../config.php');
$folder = "../images/";
$img = $_FILES['files']['name'];
$lastName = $_POST['last-name'];
$firstName = $_POST['first-name'];
$email = $_POST['email'];
$address = $_POST['street-address'];
$password = $_POST['password'];
$phone = $_POST['phone'];

move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img);

$query = "INSERT INTO `tblauthor`(
    `author_id`,
    `author_name`,
    `author_email`,
    `author_account_status`,
    `password`,
    `create_date`,
    `img`,
    `phone`,
    `address`,
    `last_name`
)
VALUES(
    NULL,
    '$firstName',
    '$email',
    1,
    '$password',
    DATE(NOW()),
    '$img',
    '$phone',
    '$address',
    '$lastName'
)";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not insert data: " . mysqli_error($conn);
} else {
    header("Location:../admin/login.php");
}
?>