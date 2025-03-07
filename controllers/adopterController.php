<?php
session_start();

require_once "models/modelShelters.php";
require_once "models/modelAnimals.php";
require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";

$shelters = getAllShelter();
$animals = getAllAnimals();
$races = getAllRaces();
$species = getAllSpecies();


// echo "<pre>";
// print_r($shelters);
// print_r($animals);
// print_r($races);
// print_r($species);
// echo "</pre>";

function showAnimals(){
    $animals = getAllAnimals();
    
    foreach($animals as $animal){
        $imgFolder = $animal["id_species"] === 1 ? "dog" : "cat";
        $img = $animal["picture"];

        $card = <<<CARD
                    <div class="card p-2">
                                <a href="information"><img src="/assets/img/$imgFolder/$img" class="card-img-top" alt="chien"></a>
                                <div class="card-body">
                                    <h5 class="card-title"> $animal[name] </h5>
                                    <p class="card-text"> Nom : $animal[shelter_name] </p>
                                    <p class="card-text"> Race : $animal[race_name] </p>
                                </div>
                            </div>
                CARD;
        
        echo $card;
    }
    
}










include "views/adopter.php";
