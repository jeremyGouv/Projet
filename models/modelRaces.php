<?php 
require_once "models/modelDatabase.php";

// Récuperer toutes les races
function getAllRaces()
{
    $pdo = getConnexion();
    $sql = "SELECT * FROM jkl_race";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Erreur lors de la récupération des races : " . $e->getMessage();
        return false;
    }

}
