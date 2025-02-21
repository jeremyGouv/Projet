<?php
require_once "models/modelUser.php";
$patternMail = "/^[a-zA-Z0-9._-]+@admin+\.[a-zA-Z]{2,3}$/";
// recuperer le chemin du formulaire
$whereForm = explode("t/", $_SERVER["HTTP_REFERER"]);


//nettoyer les données des formulaires
function valid_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($whereForm[1] === "inscription") {                          // si le formulaire est celui d'inscription                   

    $firstname = valid_data($_POST["firstname"]);
    $lastname = valid_data($_POST["lastname"]);
    $email = valid_data($_POST["email"]);
    $password = valid_data($_POST["password"]);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $validatedEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL);
    

    if (!empty($firstname) && !empty($lastname) && !empty($validatedEmail) && !empty($hashedPassword) && preg_match("/^[a-zA-Z-' ]+$/", $firstname) && preg_match("/^[a-zA-Z-' ]+$/", $lastname)) {

        // création d'un utilisateur et redirection vers la page de profil ou si le le mail match le regex admin
        // createUser($firstname, $lastname, $validatedEmail, $hashedPassword, $id_role);
        
        if (preg_match($patternMail, $validatedEmail)) {
            header("location:admin");
            
        } else {
            header("location:profil");
            
        }
    }
} 
// else if ($whereForm[1] === "connexion") {
//     if (!empty($_POST)) {
//         $email = valid_data($_POST["email"]);
//         $password = valid_data($_POST["password"]);

//         $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//         $email = filter_var($email, FILTER_VALIDATE_EMAIL);

//         header("location:connexion");
//     }
// }
