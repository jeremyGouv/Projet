<?php 

require_once "models/modelDatabase.php";


// Récuperer tout les shelter
function getAllShelter()
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_shelter";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Erreur lors de la récupération des races : " . $e->getMessage();
        return false;
    }

}

// Récuperer shelter by name
function getShelterByName($shelterName)
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_shelter WHERE shelter_name = :shelterName";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':shelterName', $shelterName, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Erreur lors de la récupération des races : " . $e->getMessage();
        return false;
    }

}
