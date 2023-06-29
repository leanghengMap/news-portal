<?php
include_once('../config.php');
$cmt_content = $_POST['comment'];
$news_id = isset($_REQUEST['news_id']) ? $_REQUEST['news_id'] : '';
$userId == isset($_REQUEST['subscriber_id']) ? $_REQUEST['subscriber_id'] : null;
$userId = isset($_POST['subscriber_id']) ? $_POST['subscriber_id'] : null;
$query = "INSERT INTO `tblcomment`(
    `comment_id`,
    `comment_content`,
    `subscriber_id`,
    `news_id`,
    `comment_date`,
    `comment_status`
)
VALUES(
    NULL,
    '$cmt_content',
    '$userId',
    '$news_id',
    DATE(NOW()),
    1
)";
if (!$userId) {
    header("Location: ../login.php");
} else {
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Can not insert data: " . mysqli_error($conn);
    }
    header("Location: ../news-detail.php?news_id=$news_id");
}
?>