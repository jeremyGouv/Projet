<?php
require_once "models/modelDatabase.php";



// Récupérer tous les utilisateurs (id, nom, et prenom uniquement)
function getAllUsers()
{
    $pdo = getConnexion();
    $sql = "SELECT id_user, firstname, lastname, mail, id_role FROM jkl_users";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
        return false;
    }
}

// Récupérer un utilisateur par son ID
function getUserById($id_user)
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_users left join jkl_users_infos on jkl_users.id_user = jkl_users_infos.id_user where jkl_users.id_user = :id_user";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Récupérer un utilisateur par email
function getUser($email)
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_users where mail = :mail";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Créer un nouvel utilisateur
function createUser($firstname, $lastname, $validatedEmail, $hashedpassword, $id_role)
{
    $patternMail = "/^[a-zA-Z0-9._-]+@admin+\.[a-zA-Z]{2,3}$/";
    $pdo = getConnexion();
    $sql = "INSERT INTO jkl_users (firstname, lastname, mail, password, id_role) VALUES (:firstname, :lastname, :mail, :password, :id_role)";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $validatedEmail, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedpassword, PDO::PARAM_STR);

        if (preg_match($patternMail, $validatedEmail)) {
            $id_role = 1;
            $stmt->bindParam(':id_role', $id_role, PDO::PARAM_INT);
        } else {
            $id_role = 2;
            $stmt->bindParam(':id_role', $id_role, PDO::PARAM_INT);
        }
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la création de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Mettre à jour les informations d'inscription d'un utilisateur
function updateUser()
{
    // {$id_user, $firstname, $lastname, $email, $password
    $pdo = getConnexion();
    $sql = "UPDATE jkl_users SET firstname = :firstname, lastname = :lastname, mail = :mail where id_user = :id_user";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_user', $_SESSION["id_user"], PDO::PARAM_INT);
        $stmt->bindParam(':firstname', $_POST["firstname"], PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $_POST["lastname"], PDO::PARAM_STR);
        $stmt->bindParam(':mail', $_POST["mail"], PDO::PARAM_STR);
        // $stmt->bindParam(':password', $_POST["password"], PDO::PARAM_STR);

        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Mettre à jour les informations complémentaire d'un utilisateur
// function updateUserInfos($phone, $owned_animal, $adress, $zip_code, $city, $max_age, $animal_preference)
// {
//     $pdo = getConnexion();
//     $sql = "UPDATE jkl_users_info SET phone = :phone, owned_animal = :owned_animal , adress = :adress, zip_code = :zip_code, city = :city, max_age= :max_age, animal_preference = :animal_preference, id_user = :id_user WHERE id_user = :id_user";
//     try {
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
//         $stmt->bindParam(':owned_animal', $owned_animal, PDO::PARAM_STR);
//         $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
//         $stmt->bindParam(':zip_code', $zip_code, PDO::PARAM_INT);
//         $stmt->bindParam(':city', $city, PDO::PARAM_STR);
//         $stmt->bindParam(':max_age', $max_age, PDO::PARAM_STR);
//         $stmt->bindParam(':animal_preference', $animal_preference, PDO::PARAM_STR);
//         $stmt->bindParam(':id_user', $_SESSION["id_user"], PDO::PARAM_INT);
//         return $stmt->execute();
//     } catch (PDOException $e) {
//         echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
//         return false;
//     }
// }
function updateUserInfos($phone, $adress, $zip_code, $city)
{
    $pdo = getConnexion();
    $sql = "INSERT INTO jkl_users_infos (phone, adress, zip_code, city, id_user) VALUES (:phone, :adress, :zip_code, :city, :id_user)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        // $stmt->bindParam(':owned_animal', $owned_animal, PDO::PARAM_STR);
        $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':zip_code', $zip_code, PDO::PARAM_INT);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        // $stmt->bindParam(':max_age', $max_age, PDO::PARAM_STR);
        // $stmt->bindParam(':animal_preference', $animal_preference, PDO::PARAM_STR);
        $stmt->bindParam(':id_user', $_SESSION["id_user"], PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
        return false;
    }
}
// Supprimer un utilisateur
function deleteUser($id_user)
{
    $pdo = getConnexion();
    $sql = "DELETE FROM jkl_users WHERE id_user = :id_user";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Vérifier les données des formulaires
function validData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
