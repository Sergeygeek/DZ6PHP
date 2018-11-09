<?php
include('db.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        .galleryPreviewsContainer {
            display: flex;
        }
    </style>
</head>
<body>
<div class="galleryPreviewsContainer">
    <?php
    if(!empty($_GET['action'])
        && ($_GET['action'] == 'showGallery')):
        $sql = "SELECT * FROM images ORDER BY count DESC";
        $res = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($res)):
            ?>
        <div class="img">
            <a href="image.php?action=showImg&id=<?=$row['id']?>&add=count" target='_blank'>
                <img src="<?=$row['minSrc']?>" data-full_image_url="<?=$row['fullSrc']?>" alt="<?=$row['alt']?>"><br>
            </a>
            <span>Просмотрено: <?=$row['count']?></span>
        </div>

        <?php endwhile;
    endif;
    ?>
</div>
<form>
    <button id="show-img" value="showGallery" name="action">Show gallery</button>
</form>

</body>
</html>
