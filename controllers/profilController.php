<?php
session_start();

require_once "models/modelUser.php";

$user = getUserById($_SESSION["id_user"]);
$error = "";
$change = "";

if (isset($_POST["update"])) {
    $user = getUserById($_SESSION["id_user"]);

    $password = validData($_POST["password"]);

    if (password_verify($password, $user["password"])) {

        $lastname = validData($_POST["lastname"]);
        $firstname = validData($_POST["firstname"]);
        $mail = validData($_POST["mail"]);

        // Update user info
        updateUser($_SESSION["id_user"], $lastname, $firstname, $mail);

        // Update session info
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

        // Update user info on profil view
        $user = getUserById($_SESSION["id_user"]);

        $change = "Changements effectués.";
    } else {
        $error = "Mot de passe incorrect.";
    }
}


include "views/profil.php";
