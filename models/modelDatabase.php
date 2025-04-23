<?php

// Configuration de la connexion à la base de données
function getConnexion()
{
    try {
        $dsn = "mysql:host=localhost;dbname=compagnon_db;charset=utf8";
        $user = "root";
        $pass = "";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
}

// Nettoyer les données des formulaires
function validData($data)
{
    $dataTrim = trim($data);
    $dataStrip = stripslashes($dataTrim);
    $finalData = htmlspecialchars($dataStrip);
    return $finalData;
}
