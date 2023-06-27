<?php
include_once('../config.php');
$query = "SELECT * FROM `tblnewscategory` ORDER BY `category_id`";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$json = json_encode($rows);
$array = json_decode($json, true);
?>