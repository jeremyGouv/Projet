<?php
session_start();

require_once "models/modelUser.php";

$user = getUserById($_SESSION["id_user"]);
$patternMailAdmin = "/^[a-zA-Z0-9._-]+@admin+\.[a-zA-Z]{2,3}$/";
$patternName = "/^[a-zA-Z\s'-]+$/";
$patternMail = "/^[a-zA-Z0-9._-]+@[a-z]+\.[a-zA-Z]{2,3}$/";
$patterPhone = "/^[0-9]{10}$/";
$patterZip = "/^[0-9]{5}$/";


$error = "";
$change = "";

if (isset($_POST["update"])) {
    $user = getUserById($_SESSION["id_user"]);

    $password = validData($_POST["password"]);

    if (password_verify($password, $user["password"])) {
        if (preg_match($patternName, $_POST["firstname"])) {
            $firstname = validData($_POST["firstname"]);
        }
        if (preg_match($patternName, $_POST["lastname"])) {
            $lastname = validData($_POST["lastname"]);
        }
        if (preg_match($patternMail, $_POST["mail"])) {
            $mail = validData($_POST["mail"]);
        }

        // Update user info
        updateUser($_SESSION["id_user"], $firstname, $lastname, $mail);

        // Update session info
        foreach ($_SESSION as $key => $value) {
            if (isset($_POST[$key])) {
                $_SESSION[$key] = $_POST[$key];
            }
        }

        if (preg_match($patterPhone, $_POST["phone"])) {
            $phone = validData($_POST["phone"]);
        } else {
            $error = "Téléphone invalide";
        }
        if (preg_match($patterZip, $_POST["zip_code"])) {
            $zip_code = validData($_POST["zip_code"]);
        } else {
            $error = "Téléphone invalide";
        }


        $adress = validData($_POST["adress"]);
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
