<?php
session_start();

require_once "models/modelShelters.php";
require_once "models/modelAnimals.php";
require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";

$shelters = getAllShelter();
$races = getAllRaces();
$species = getAllSpecies();


// echo "<pre>";
// print_r($shelters);
// print_r($animals);
// print_r($races);
// print_r($species);
// echo "</pre>";

function showAnimals()
{
    $animals = getAllAnimals();

    foreach ($animals as $animal) {
        $imgFolder = $animal["id_species"] === 1 ? "dog" : "cat";
        $img = $animal["picture"];
        $species = $animal["id_species"] === 1 ? "chien" : "chat";
        $animalName = $animal["name"];
        $shelterName = $animal["shelter_name"];
        $raceName = $animal["race_name"];

        $card = <<<CARD
                    <div class="card p-2 $species ">
                                <a href="information?id_animal=$animal[id_animal]"><img src="/assets/img/$imgFolder/$img" class="card-img-top" alt="photo_animal"></a>
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

// function showFilteredAnimals($id_shelter, $name, $chien, $chat, $race, $male, $femelle)
// {
//     $filteredAnimals = getFilteredAnimals($id_shelter, $name, $chien, $chat, $race, $male, $femelle);

//     foreach ($filteredAnimals as $filteredAnimal) {
//         $imgFolder = $filteredAnimal["id_species"] === 1 ? "dog" : "cat";
//         $img = $filteredAnimal["picture"];
//         $species = $filteredAnimal["id_species"] === 1 ? "dog" : "cat";
//         $animalName = $filteredAnimal["name"];
//         $shelterName = $filteredAnimal["shelter_name"];
//         $raceName = $filteredAnimal["race_name"];

//         $card = <<<CARD
//                     <div class="card p-2 $species">
//                                 <a href="information?id_animal=$filteredAnimal[id_animal]"><img src="/assets/img/$imgFolder/$img" class="card-img-top" alt="photo_animal"></a>
//                                 <div class="card-body">
//                                     <h5 class="card-title" id="animalName"> $filteredAnimal[name] </h5>
//                                     <p class="card-text" id="shelterName"> $filteredAnimal[shelter_name] </p>
//                                     <p class="card-text" id="animalRace"> Race : $filteredAnimal[race_name] </p>
//                                 </div>
//                             </div>
//                 CARD;

//         echo $card;
//     }




// }






include "views/adopter.php";
