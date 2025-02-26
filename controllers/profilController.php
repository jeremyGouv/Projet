<?php
session_start();

require_once "models/modelUser.php";

$user = getUserById($_SESSION["id_user"]);

echo "<pre>";
print_r($user);
echo "<br>";
echo "</pre>";

if (isset($_POST["update"])) {

    if (password_verify($_POST["password"], $user["password"])) {

        updateUser();
        foreach ($_SESSION as $key => $value) {

            if (isset($_POST[$key])) {
                $_SESSION[$key] = $_POST[$key];
            }
        }

        updateUserInfos($_POST["phone"], $_POST["adress"], $_POST["zip_code"], $_POST["city"]);
    } else {
        echo "mdp incorrect";
    }
}

include "views/profil.php";
