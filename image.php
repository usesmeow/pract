<?php

use photos\DB;

session_start();
    $user_id = $_SESSION['user_id'] ?? false;
    $photo_id=intval($_GET['id']);
    require "DB.php";
    require "photos.php";
    $db= new photos\DB();
    $photo=$db->get_photo_by_id($photo_id);
    $comments=$db->get_photo_comments($photo_id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="3p.css">
</head>
<body>
    <?php include "header.php"; ?>

    <div id="image">
        <img src="<?=$photo["image"] ?>" alt="">
        <h1><?= $photo["text"] ?></h1>
        <p><?= $photo["name"] ?></p>

    </div>



    <div class="comments">
        <div class="form">
            <textarea id="text" rows="5"></textarea>
            <button id="add_comment">ADD</button>
        </div>
        <h2>COMMENTS</h2>
        <?php foreach ($comments as $comment): ?>
        <div class="comment">
            <p class="author"><?=$comment["name"] ?></p>
            <p class="text"><?=$comment["text"] ?></p>
            <p class="date"><?=$comment["post_date"] ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <script src="image.js"></script>
</body>
</html>