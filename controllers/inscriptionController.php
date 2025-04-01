<?php
session_start();

require_once "models/modelUser.php";

//create a pattern for admin email
$patternMail = "/^[a-zA-Z0-9._-]+@admin+\.[a-zA-Z]{2,3}$/";

// Check if the subscription form has been submitted and if all required fields are filled.
if (isset($_POST["subscribe"]) && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {

    // Sanitize and validate the form data.
    $firstname = validData($_POST["firstname"]); 
    $lastname = validData($_POST["lastname"]);   
    $email = validData($_POST["email"]);        
    $password = validData($_POST["password"]);   

    // Hash the password.
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Sanitize and validate the email address.
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove illegal characters from the email.
    $validatedEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL); // Validate the email format.

    // Check if all fields are non-empty and if the firstname and lastname match the expected format.
    if (!empty($firstname) && !empty($lastname) && !empty($validatedEmail) && !empty($hashedPassword) && preg_match("/^[a-zA-Z-' ]+$/", $firstname) && preg_match("/^[a-zA-Z-' ]+$/", $lastname)) {

        // Determine the user's role based on their email address.
        if (preg_match($patternMail, $validatedEmail)) {
            $id_role = 1; // Admin role.
        } else {
            $id_role = 2; // User role.
        }

        // Create a new user.
        createUser($firstname, $lastname, $validatedEmail, $hashedPassword, $id_role);

        // Create empty additional user information to be updated later via the profile page.
        $user = getUserByMail($validatedEmail);        
        createUserInfos($user["id_user"]);
        
        // redirect to the home page.
        header("location:/");
            
        
    } else {
        echo "error"; // Display an error message if the data is invalid.
    }
}

// Include the "inscription.php" view, which contains the subscription form.
include "views/inscription.php";
