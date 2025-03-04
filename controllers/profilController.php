<?php
session_start();

require_once "models/modelUser.php";

$user = getUserById($_SESSION["id_user"]);


if (isset($_POST["update"])) {
    $user = getUserById($_SESSION["id_user"]);

    if (password_verify($_POST["password"], $user["password"])) {

        updateUser();

        foreach ($_SESSION as $key => $value) {
            if (isset($_POST[$key])) {
                $_SESSION[$key] = $_POST[$key];
            }
        }

        $phone = validData($_POST["phone"]);
        $adress = validData($_POST["adress"]);
        $zip_code = validData($_POST["zip_code"]);
        $city = validData($_POST["city"]);

        updateUserInfos($phone, $adress, $zip_code, $city);

        $user = getUserById($_SESSION["id_user"]);
    } else {
        echo "mdp incorrect";
    }
}


include "views/profil.php";
