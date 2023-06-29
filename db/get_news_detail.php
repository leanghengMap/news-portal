<?php
$ID = isset($_REQUEST['news_id']) ? $_REQUEST['news_id'] : '';
$query = "SELECT
  `tblnews`.`news_id`,
  `news_title`,
  `news_content`,
  `tblnewscategory`.`category_name`,
  `tblauthor`.`author_name`,
  `tblnews`.`created_date`,
  `tblnews`.`image`,
  `news_status`
  FROM `tblnews`
  INNER JOIN `tblnewscategory` ON `tblnewscategory`.`category_id` = `tblnews`.`category_id`
  INNER JOIN `tblauthor` ON `tblauthor`.`author_id` = `tblnews`.`author_id`
  WHERE `news_id`='$ID'";
$result = mysqli_query($conn, $query);
$item = mysqli_fetch_array($result);
?>