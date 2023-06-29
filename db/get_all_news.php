<?php
include_once('./config.php');
$query = "SELECT * FROM `tblnews` ORDER BY `news_id` DESC LIMIT 8";
$result = mysqli_query($conn, $query);
$newsList = mysqli_num_rows($result);
?>
<?php
if (
    mysqli_num_rows($result) >
    0
) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="newsCard">
            <a href="./news-detail.php?news_id=<?php echo $row['news_id'] ?>">
                <img src="./images/<?= $row['image'] ?>" class="newsImage" alt="">
                <h6 style=" font-size:14px" class="newsTitle ">
                    <?= $row['news_title'] ?>
                </h6>
            </a>
        </div>
        <?php
    }
}
?>