<?php
session_start();

require_once "models/modelUser.php";

if (isset($_POST["delete"])) {

    if (!empty($_POST["password"])) {
        $password = validData($_POST["password"]);
        $user = getUserById($_SESSION["id_user"]);

        if (password_verify($password, $user["password"])) {
            deleteUser($user["id_user"]);
            header("location:deconnexion");
        }
    }
}

include "views/deleteAccount.php";
