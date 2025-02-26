<?php
session_start();

require_once "models/modelUser.php";

//créer un pattern pour les mails admin
$patternMail = "/^[a-zA-Z0-9._-]+@admin+\.[a-zA-Z]{2,3}$/";

if (isset($_POST["subscribe"]) && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {

    $firstname = validData($_POST["firstname"]);
    $lastname = validData($_POST["lastname"]);
    $email = validData($_POST["email"]);
    $password = validData($_POST["password"]);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $validatedEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL);

    if (!empty($firstname) && !empty($lastname) && !empty($validatedEmail) && !empty($hashedPassword) && preg_match("/^[a-zA-Z-' ]+$/", $firstname) && preg_match("/^[a-zA-Z-' ]+$/", $lastname)) {

        if (preg_match($patternMail, $validatedEmail)) {
            $id_role = 1;
        } else {
            $id_role = 2;
        }
        // création d'un utilisateur et redirection vers la page d'accueil
        createUser($firstname, $lastname, $validatedEmail, $hashedPassword, $id_role);


        header("location:/");
    } else {
        echo "erreur";
    }
}


include "views/inscription.php";
