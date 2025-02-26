<?php
session_start();

require_once "models/modelUser.php";



if (!empty($_POST)) {
    $email = validData($_POST["mail"]);
    $password = validData($_POST["password"]);

    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $validatedEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL);

    // Récupération des informations de l'utilisateur
    $user = getUser($validatedEmail);

    // Vérification email et mot de passe, création des variables de session
    if (isset($user) && $email === $user["mail"] && password_verify($password, $user["password"])) {

        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["id_role"] = $user["id_role"];
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        $_SESSION["mail"] = $user["mail"];

        header("location:/");

    }
}

include "views/connexion.php";
