<?php
session_start();
if (isset($_POST["photo_id"], $_POST["text"], $_SESSION["user_id"])) {
    require  "DB.php";
    require "photos.php";
    $bd= new \photos\BD();
    $inserted_comment = $bd-> add_comment($_POST["photo_id"], $_SESSION["user_id"], $_POST["text"]);
    echo json_encode($inserted_comment);
}
