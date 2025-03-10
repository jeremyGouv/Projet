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

// Supprimer un refuge
function deleteShelter($id_shelter)
{
    $pdo = getConnexion();
    $sql = "DELETE FROM jkl_shelter WHERE id_shelter = :id_shelter";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_shelter", $id_shelter, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'animal : " . $e->getMessage();
        return false;
    }
}

// Update shelter
function updateShelter($id_shelter, $shelter_name, $adress, $zip_code, $city, $infos, $phone){
    $pdo = getConnexion();
    $sql = "UPDATE jkl_shelter SET id_shelter = :id_shelter, shelter_name = :shelter_name, adress = :adress, zip_code = :zip_code, city = :city, infos = :infos, phone = :phone WHERE id_shelter = :id_shelter";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_shelter", $id_shelter, PDO::PARAM_INT);
        $stmt->bindParam(":shelter_name", $shelter_name, PDO::PARAM_STR);
        $stmt->bindParam(":adress", $adress, PDO::PARAM_STR);
        $stmt->bindParam(":zip_code", $zip_code, PDO::PARAM_INT);
        $stmt->bindParam(":city", $city, PDO::PARAM_STR);
        $stmt->bindParam(":infos", $infos, PDO::PARAM_STR);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour du refuge : " . $e->getMessage();
        return false;
    }

    }
