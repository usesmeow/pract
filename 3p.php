<?php
//    $link = new mysqli("localhost", "root", "", "photos");
//    $link->set_charset("utf8");
    session_start();
    $user_id= $_SESSION["user_id"] ?? false;
    require "DB.php";
    require "photos.php";
    $db = new photos\DB();
    $data = $db->get_all_photos();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="3p.css">
    <title>Document</title>
</head>
<body>

<?php include("header.php"); ?>


    <h1>Галерея</h1>
    <div id="lok">
       <?php foreach ($data as $photo): ?>
        <?= (new photos\photo($photo["id"], $photo["image"], $photo["text"]))->get_html() ?>
        <?php endforeach; ?>
    </div>

 <?php include("add_form.php"); ?>

<div id="popup_photo">
    <img src="" alt="">
</div>



<script src="3p.js"></script>
</body>
</html>