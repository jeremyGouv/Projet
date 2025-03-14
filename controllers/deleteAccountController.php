<?php
session_start();

require_once "models/modelUser.php";

$user = getUserById($_SESSION["id_user"]);

if (isset($_POST["delete"])){

    if (!empty($_POST["password"])) {
        $password = validData($_POST["password"]);
        $user = getUserById($_SESSION["id_user"]);

        if (password_verify($password, $user["password"])) {
            deleteUserInfos($_SESSION["id_user"]);
            deleteUser($_SESSION["id_user"]);
            header("location:deconnexion");
        }
    }
}

include "views/deleteAccount.php";
