<?php

use photos\DB;

if(isset($_POST['login'], $_POST['password'])){
        require "DB.php";
        require "photos.php";

        $db=new \photos\DB();
        $login_exist=$db->check_login($_POST['login']);
        if($login_exist){
            header("Location: user.php?sign_error=login");

        }
        else{
            $db->new_user($_POST['login'], $_POST['password']);
            header( "Location: user.php?sign_success=OKAY");
        }
    }