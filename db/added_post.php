<?php
include_once('../config.php');
$folder = "../images/";
$img = $_FILES['files']['name'];
$title = $_POST['txtTitle'];
$content = $_POST['txtContent'];
$category_id = $_POST['txtCategory'];
move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img);

$query = "INSERT INTO tblnews (`news_id`, `category_id`, `news_title`, `news_content`, `date_updated`, `news_status`, `comment_status`, `author_id`,`image`)
 VALUES (NULL,'$category_id','$title','$content',DATE(NOW()) ,1,1,1,'$img')";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not insert data: " . mysqli_error($conn);
} else {
    header("Location:../admin/news-list.php");
}
?>