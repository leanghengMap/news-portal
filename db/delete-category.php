<?php
include_once('../config.php');
$id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';
$query = "DELETE FROM `tblnewscategory` WHERE `category_id`='$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo 'Can not delete' . mysqli_erorr($conn);
}
else {
    header("Location:../admin/category-list.php");
}
?>