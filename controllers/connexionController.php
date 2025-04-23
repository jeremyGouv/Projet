<?php
session_start();

require_once "models/modelUser.php";

$error = "";

// Check if the form has been submitted (if $_POST is not empty).
if (!empty($_POST)) {

    // Data cleaning.
    $email = validData($_POST["mail"]);
    $password = validData($_POST["password"]);

    // Sanitize and validate the email to remove illegal characters.
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $validatedEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL);

    // Retrieve user information from the database based on the validated email.
    $user = getUserByMail($validatedEmail);

    // Check if a user was found and if the provided email and password are corrects.
    if (!empty($user) && $validatedEmail === $user["mail"] && password_verify($password, $user["password"])) {

        // Create session variables to store user information.
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["id_role"] = $user["id_role"];
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        $_SESSION["mail"] = $user["mail"];

        // Redirect the user based on their role.
        if ($user["id_role"] === 1) {
            // If the user is an admin (id_role 1), redirect to the home page.
            header("location:/");
        } else {
            // Otherwise, redirect to the profile page.
            header("location:profil");
        }
    } else {
        $error = "Email ou mot de passe incorrect";
    }
}

include "views/connexion.php";
