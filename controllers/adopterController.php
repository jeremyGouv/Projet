<?php
session_start();

require_once "models/modelShelters.php";
require_once "models/modelAnimals.php";
require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";

$shelters = getAllShelter();
$races = getAllRaces();
$species = getAllSpecies();

function showAnimals()
{
    $animals = getAllAnimals();

    foreach ($animals as $animal) {
        $imgFolder = $animal["id_species"] === 1 ? "dog" : "cat";
        $img = $animal["picture"];
        $species = $animal["id_species"] === 1 ? "chien" : "chat";

        $card = <<<CARD
                    <div class="card p-2 $species ">
                                <a href="information?id_animal=$animal[id_animal]"><img src="/assets/img/$imgFolder/$img" class="card-img-top" alt="photo de l'animal à l'adoption" width="300" height="225"></a>
                                <div class="card-body">
                                    <h5 class="card-title" id="animalName"> $animal[name] </h5>
                                    <p class="card-text" id="shelterName"> $animal[shelter_name] </p>
                                    <p class="card-text" id="animalRace"> Race : $animal[race_name] </p>
                                    <p class="card-text" id="animalSex"> Sexe : $animal[sex] </p>
                                </div>
                            </div>
                CARD;

        echo $card;
    }
}







include "views/adopter.php";
