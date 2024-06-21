<?php

use photos\DB;

if(isset($_POST['image'], $_POST['text'])){
        require "DB.php";
        require "photos.php";
        $db = new \photos\DB();
        session_start();
        $user_id=$_SESSION['user_id'];
        $db->new_photo($user_id, $_POST['image'], $_POST['text']);
        header('Location: user.php');



}