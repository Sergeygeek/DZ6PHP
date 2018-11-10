<?php
include('db.php');

if(!empty($_GET['action']) && ($_GET['action'] == 'showImg') && !empty($_GET['id'])) {
    $idImg = $_GET['id'];
    if($_GET['add'] == 'count'){
        $sqlUpdate = "UPDATE images SET count = count + 1 WHERE id = " . $idImg;
        mysqli_query($link, $sqlUpdate);
    }
    $sql = "SELECT fullSrc, count FROM images WHERE id = " . $idImg;
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    $src = $row['fullSrc'];
    $count = $row['count'];
    $sql = "SELECT id, name, feedback FROM feedback WHERE id_image = " . $idImg;
    $res = mysqli_query($link, $sql);
    $contentFeedback = '';
        while ($row = mysqli_fetch_assoc($res)){
            $contentFeedback .= '
        <div class="feedback">
            <div class=\"user_name\">'.$row['name'].'</div>
            <div class=\"user_feedback\">'.$row['feedback'].'</div>
            <a href="image.php?action=showImg&id='.$idImg.'&id_feed='.$row['id'].'&add=delFeedback">X</a>
        </div>';
        }
}

if($_GET['add'] == 'addFeedback'){
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $idImg = $_GET['id'];
    $sql = "INSERT INTO feedback (id_image, name, feedback) VALUES ('$idImg', '$name', '$feedback')";
    $res = mysqli_query($link, $sql);
    header("location: image.php?action=showImg&id=$idImg");
    exit;
}

if($_GET['add'] == 'delFeedback'){
    $sql = "DELETE FROM feedback WHERE id = " . $_GET['id_feed'];
    $res = mysqli_query($link, $sql);
    header("location: image.php?action=showImg&id=$idImg");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        img{
            width: 500px;
        }
        .feedback{
            display: flex;
        }
        .user_name{
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div>
    <?php
        if(!empty($src) && !empty($count)){
            echo "<img src=$src><br><span>Просмотров: $count</span>";
        }
    ?>
    </div>
    <h2>Отзывы:</h2>
        <?=$contentFeedback;?>
    <h2>Оставьте отзыв</h2>
    <form action="image.php?action=showImg&id=<?=$idImg?>&add=addFeedback" method="post">
        <label>Введите имя:</label><br>
        <input type="text" name="name" placeholder="Имя"><br>
        <label>Введите отзыв:</label><br>
        <textarea name="feedback" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Отправить">
    </form>

</body>
</html>