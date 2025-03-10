<?php
session_start();

require_once "models/modelShelters.php";
require_once "models/modelAnimals.php";

$id_animal = $_GET["id_animal"];

$animal = getAnimalById($id_animal);
$shelters = getAllShelter();
$shelter = getShelterByName($animal["shelter_name"]);

$imgFolder = $animal["id_species"] === 1 ? "dog" : "cat";
$img = $animal["picture"];



include "views/information.php";
