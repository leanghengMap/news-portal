<?php
include_once('../config.php');
$name = $_POST['txtname'];
$description = $_POST['txtDescription'];
$query = "INSERT INTO tblnewscategory (category_id, category_name,category_description) VALUES (NULL,'$name', '$description')";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can not insert data: ". mysqli_error($conn);
} 
else {
    header("Location:../admin/category-list.php");
}
?>