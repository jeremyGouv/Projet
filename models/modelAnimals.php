<?php
require_once "models/modelDatabase.php";



// Récupérer tous les animaux
function getAllAnimals()
{
    $pdo = getConnexion();
    $sql = "SELECT *, jkl_shelter.shelter_name, jkl_race.race_name, jkl_species.species_name FROM jkl_animals JOIN jkl_shelter ON jkl_animals.id_shelter = jkl_shelter.id_shelter JOIN jkl_race ON jkl_animals.id_race = jkl_race.id_race JOIN jkl_species ON jkl_animals.id_species = jkl_species.id_species";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des animaux : " . $e->getMessage();
        return false;
    }
}

//Récuperer animauc filtrés
function getFilteredAnimals($id_shelter, $name, $chien, $chat, $race, $male, $femelle)
{
    $pdo = getConnexion();
    $sql = "SELECT *, jkl_shelter.shelter_name, jkl_race.race_name, jkl_species.species_name FROM jkl_animals JOIN jkl_shelter ON jkl_animals.id_shelter = jkl_shelter.id_shelter JOIN jkl_race ON jkl_animals.id_race = jkl_race.id_race JOIN jkl_species ON jkl_animals.id_species = jkl_species.id_species WHERE id_shelter = :id_shelter OR name = :name OR id_species = :chien OR id_species = :chat OR id_race = :race OR sex = :male OR sex = :femelle";
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
    $sql = "SELECT *, jkl_shelter.shelter_name, jkl_race.race_name, jkl_species.species_name FROM jkl_animals JOIN jkl_shelter ON jkl_animals.id_shelter = jkl_shelter.id_shelter JOIN jkl_race ON jkl_animals.id_race = jkl_race.id_race JOIN jkl_species ON jkl_animals.id_species = jkl_species.id_species WHERE id_animal = :id_animal";
    // $sql = "SELECT * FROM jkl_animals WHERE id_animal = :id_animal";
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
function createAnimal($name, $sex, $birthdate, $picture, $id_race, $id_user, $id_shelter, $id_species)
{
    $pdo = getConnexion();
    $sql = "INSERT INTO jkl_animals (name, sex, birthdate, picture, id_race, id_user, id_shelter, id_species) VALUES (:name, :sex, :birthdate, :picture, :id_race, null, :id_shelter, :id_species)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        $stmt->bindParam(':id_race', $id_race, PDO::PARAM_INT);
        // $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_shelter', $id_shelter, PDO::PARAM_INT);
        $stmt->bindParam(':id_species', $id_species, PDO::PARAM_INT);
        
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la création de l'animal : " . $e->getMessage();
        return false;
    }
}

// Mettre à jour un animal
function updateAnimal($id_animal,$name, $sex, $birthdate, $picture, $id_race, $id_shelter)
{
    $pdo = getConnexion();
    $sql = "UPDATE jkl_animals SET name = :name, sex = :sex , birthdate = :birthdate, picture = :picture, id_race = :id_race, id_shelter = :id_shelter WHERE id_animal = :id_animal";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        $stmt->bindParam(':id_race', $id_race, PDO::PARAM_INT);
        // $stmt->bindParam(':id_user', $id_user, PDO::PARAM_NULL);
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

