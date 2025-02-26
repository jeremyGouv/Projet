<?php
require_once "models/modelDatabase.php";



// Récupérer tous les animaux
function getAllAnimals()
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_animals";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des animaux : " . $e->getMessage();
        return false;
    }
}

// Récupérer un animal par son ID
function getAnimalById($id_animal)
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_animals WHERE id_animal = :id_animal";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération de l'animal : " . $e->getMessage();
        return false;
    }
}

// Créer un nouvel animal
function createAnimal($name, $sex, $birthdate, $moreInfos, $picture, $id_race, $id_user, $id_shelter)
{
    $pdo = getConnexion();
    $sql = "INSERT INTO jkl_animals (name, sex, birthdate, more_infos, id_race, id_user, id_shelter) VALUES (:name, :sex, :birthdate, :moreInfos, :picture, :id_race, :id_user, :id_shelter)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $stmt->bindParam(':moreInfos', $moreInfos, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        $stmt->bindParam(':id_race', $id_race, PDO::PARAM_INT);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_shelter', $id_shelter, PDO::PARAM_INT);
        
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la création de l'animal : " . $e->getMessage();
        return false;
    }
}

// Mettre à jour un animal
function updateAnimal($name, $sex, $birthdate, $moreInfos, $picture, $id_race, $id_user, $id_shelter)
{
    $pdo = getConnexion();
    $sql = "UPDATE jkl_animals SET name = :name, sex = :sex , birthdate = :birthdate, more_infos = :moreInfos, picture = :picture, id_race = :id_race, id_user = :id_user, id_shelter = :id_shelter, WHERE id_animal = :id_animal";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $stmt->bindParam(':moreInfos', $moreInfos, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        $stmt->bindParam(':id_race', $id_race, PDO::PARAM_INT);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_shelter', $id_shelter, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'animal : " . $e->getMessage();
        return false;
    }
}

// Supprimer un animal
function deleteAnimal($id_animal)
{
    $pdo = getConnexion();
    $sql = "DELETE FROM jkl_animals WHERE id_animal = :id_animal";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_animal", $id_animal, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'animal : " . $e->getMessage();
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