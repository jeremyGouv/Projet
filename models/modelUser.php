<?php
require_once "models/modelDatabase.php";



// Récupérer tous les utilisateurs (id, nom, et prenom uniquement)
function getAllUsers()
{
    $pdo = getConnexion();
    $sql = "SELECT id_user, firstname, lastname FROM jkl_users";
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
    $sql = "SELECT * FROM jkl_users WHERE id_user = :id_user";
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
        // $stmt->bindParam(':id_role', $id_role, PDO::PARAM_INT);
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

// Mettre à jour un utilisateur
function updateUser($id_user, $firstname, $lastname, $email, $password)
{
    $pdo = getConnexion();
    $sql = "UPDATE jkl_users SET firstname = :firstname, lastname = :lastname , mail = :email, password = :password WHERE id_user = :id_user";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
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
    $sql = "DELETE FROM jlk_users WHERE id_user = :id_user";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
        return false;
    }
}
