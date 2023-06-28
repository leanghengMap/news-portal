<?php
include_once('../config.php');
$id = isset($_REQUEST['news_id']) ? $_REQUEST['news_id'] : '';
$query = "DELETE FROM `tblnews` WHERE `news_id`='$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo 'Can not delete' . mysqli_erorr($conn);
} else {
    header("Location:../admin/news-list.php");
}
?>