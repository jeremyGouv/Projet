<?php 
require_once "models/modelDatabase.php";

// Récuperer toutes les races
function getAllRaces()
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_race JOIN jkl_species ON jkl_race.id_species = jkl_species.id_species";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Erreur lors de la récupération des races : " . $e->getMessage();
        return false;
    }

}

// // Récuperer shelter by name
// function getShelterByName($shelterName)
// {
//     $pdo = getConnexion();
//     $sql = "SELECT * FROM jkl_shelter WHERE shelter_name = :shelterName";
//     try {
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindParam(':shelterName', $shelterName, PDO::PARAM_STR);
//         $stmt->execute();
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }catch (PDOException $e) {
//         echo "Erreur lors de la récupération des races : " . $e->getMessage();
//         return false;
//     }

// }

// Créer une race
function createRace($race_name, $id_species)
{
    $pdo = getConnexion();
    $sql = "INSERT INTO jkl_race (race_name, id_species) VALUES (:race_name, :id_species)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':race_name', $race_name, PDO::PARAM_STR);
        $stmt->bindParam(':id_species', $id_species, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la création de la race : " . $e->getMessage();
        return false;
    }
}

// Supprimer une race
function deleteRace($id_race)
{
    $pdo = getConnexion();
    $sql = "DELETE FROM jkl_race WHERE id_race = :id_race";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_race", $id_race, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de la race : " . $e->getMessage();
        return false;
    }
}

// Update race
function updateRace($id_race, $race_name, $id_species){

    $pdo = getConnexion();
    $sql = "UPDATE jkl_race SET id_race = :id_race, race_name = :race_name, id_species = :id_species WHERE id_race = :id_race";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_race", $id_race, PDO::PARAM_INT);
        $stmt->bindParam(":id_species", $id_species, PDO::PARAM_INT);
        $stmt->bindParam(":race_name", $race_name, PDO::PARAM_STR);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour du la race : " . $e->getMessage();
        return false;
    }

}



