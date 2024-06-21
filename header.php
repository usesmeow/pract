<header>
    <a href="3p.php">ГЛАВНАЯ</a>
        <?php if ($user_id): ?>
            <a id="show_add_photo" href="#">ФОТО</a>
        <?php endif; ?>
    <a href="#">Посты</a>
    <a href="user.php">Личный кабинет</a>
        <?php if($user_id): ?>
            <a href="logout.php">ВЫЙТИ</a>
        <?php endif; ?>
</header>