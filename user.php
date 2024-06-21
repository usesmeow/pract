<?php
//$user_id= $_SESSION["user_id"] ?? false;
session_start();
if(isset($_SESSION['user_id'])){
    $user_id= $_SESSION["user_id"];
}
else{
    $user_id=false;
}

    require "DB.php";
    require "photos.php";
    $db = new photos\DB();

    if($user_id){
        $data = $db->get_user_photos($user_id);
    }

if(isset($_GET["error"])){
    $error = "НЕВЕРНЫЙ ЛОГИН ИЛИ ПАРОЛЬ!";
}
if(isset($_GET["sign_error"])){
    $sign_error = "ТАКОЙ ЛОГИН ЗАНЯТ!";
}
if(isset($_GET["sign_success"])){
    $sign_success = "УСПЕШНАЯ РЕГИСТРАЦИЯ!";
}
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

<div class="popup">
    <?php include "header.php" ?>
</div>

<h1>ГАЛЕРЕЯ ПОЛЬЗОВАТЕЛЯ</h1>

<?php if($user_id): ?>

    <div id="lok">
        <?php foreach ($data as $photo): ?>
            <?= (new photos\photo($photo["id"], $photo["image"], $photo["text"], $photo["UID"]))->get_html()?>
        <?php endforeach; ?>
    </div>


<!--FOTOp-->
<?php else: ?>


    <div class="form">
        <form action="login.php" method="post">
            <h2>АВТОРИЗАЦИЯ</h2>
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="password">
            <button>ВХОД</button>
            <?php if(isset($_GET["error"])): ?>
                <p class="error"><?= $error ?> </p>
            <?php endif ?>
        </form>

        <form action="signup.php" method="post">
            <h2>РЕГИСТРАЦИЯ</h2>
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="password">
            <button>ЗАРЕГИСТРИРОВАТЬСЯ</button>
            <?php if(isset($_GET["sign_error"])): ?>
                <p class="error"><?= $sign_error ?></p>
            <?php endif ?>
            <?php if(isset($_GET["sign_success"])): ?>
                <p class="success"><?= $sign_success ?></p>
            <?php endif ?>
        </form>
    </div>
<?php endif; ?>

<?php include "add_form.php"; ?>

<div id="popup_photo">
    <img src="" alt="">
</div>

<script src="3p.js"></script>
</body>
</html>