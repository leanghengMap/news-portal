<?php
include_once('../config.php');
$id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';

$name1 = isset($_POST['txtname']) ? $_POST['txtname'] : '';
$description1 = isset($_POST['txtDescription']) ? $_POST['txtDescription'] : '';

$query = "UPDATE `tblnewscategory` SET `category_name`='$name1',`category_description`='$description1' WHERE `category_id`='$id'";

$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not update data: " . mysqli_error($conn);
} else {
    header("Location:../admin/category-list.php");
}
?>