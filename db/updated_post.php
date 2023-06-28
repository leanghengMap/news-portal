<?php
include_once('../config.php');
include_once('../admin/session.php');
$id = isset($_REQUEST['news_id']) ? $_REQUEST['news_id'] : '';

$folder = "../images/";

$img = $_FILES['files']['name'];
$title1 = isset($_POST['txtTitle']) ? $_POST['txtTitle'] : '';
$content1 = isset($_POST['txtContent']) ? $_POST['txtContent'] : '';
$category_id1 = isset($_POST['txtCategory']) ? $_POST['txtCategory'] : '';
move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img);
$userID = $user['author_id'];

$query = "UPDATE
`tblnews`
SET
`category_id` = '$category_id1',
`news_title` = '$title1',
`news_content` = '$content1',
`author_id` = '$userID',
WHERE `news_id`='$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not insert data: " . mysqli_error($conn);
} else {
    echo $img;

    // header("Location:../admin/news-list.php");
}
?>