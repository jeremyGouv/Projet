<?php
session_start();

require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";

$add = "";
$delete = "";
$update = "";


function addRace()
{
    $card = <<<CARD
                <form action="adminRaces" method="post" class="formulaire">
                    <label for="race_name">Nom : </label> <input type="text" id="race_name" name="race_name"> <br>
                    <label for="id_species">Espèce : </label>
                    <select id="id_species" name="id_species">
                        <option value="1">Chien</option>
                        <option value="2">Chat</option>
                    </select> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Ajouter" name="saveRace" class="saveRace">
                    </div>
                </form>
            CARD;
    echo $card;
}

function addRaceTable()
{
    $card = <<<CARD
                <form action="adminRaces" method="post" class="formulaire" id="addTable">
                    <label for="race_name">Nom : </label> <input type="text" id="race_name" name="race_name"> <br>
                    <label for="id_species">Espèce : </label>
                    <select id="id_species" name="id_species">
                        <option value="1">Chien</option>
                        <option value="2">Chat</option>
                    </select> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Ajouter" name="saveRace" class="saveRace">
                    </div>
                </form>
            CARD;
    echo $card;

}

function displayRaces()
{
    $races = getAllRaces();
    $species = getAllSpecies();

    foreach ($races as $race) {
        

        $card = <<<CARD
                    <form action="adminRaces" method="post" class="formulaire">
                        <label for="id_race">ID : </label> <p>$race[id_race]</p> <br>
                        <label for="race_name">Nom : </label> <input type="text" id="race_name" name="race_name" value='$race[race_name]'> <br>
                        <label for="id_species">Espèce : </label>
                        <select id="id_species" name="id_species">                        
                            <option value=1> Chien </option>
                            <option value=2> Chat </option>
                        </select> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteRace" class="deleteRace">
                            <input type="submit" value="Modifier" name="updateRace" class="updateRace">
                        </div>
                    </form>
                CARD;
        echo $card;
    }
}

function displayRacesTable()
{
    $races = getAllRaces();
    $species = getAllSpecies();

    foreach ($races as $race) {
    
        $card = <<<CARD
                    <form action="adminRaces" method="post" class="formulaire" id="updateTable">
                        <label for="id_race">ID : </label> <input type="text" id="id_race" name="id_race" value='$race[id_race]' readonly> <br>
                        <label for="race_name">Nom : </label> <input type="text" id="race_name" name="race_name" value='$race[race_name]'> <br>
                        <label for="id_species">Espèce : </label>
                        <select id="id_species" name="id_species">                        
                            <option value=1> Chien </option>
                            <option value=2> Chat </option>
                        </select> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteRace" class="deleteRace">
                            <input type="submit" value="Modifier" name="updateRace" class="updateRace">
                        </div>
                    </form>
                CARD;
        echo $card;
    }
}



if (!empty($_POST["saveRace"])) {
    $race_name = validData($_POST["race_name"]);
    $id_species = validData($_POST["id_species"]);
    createRace($race_name, $id_species);
    $add = "Race ajoutée";
}


if (!empty($_POST["updateRace"])) {
    $race_name = validData($_POST["race_name"]);
    $id_race = validData($_POST["id_race"]);
    $id_species = validData($_POST["id_species"]);

    updateRace($id_race, $race_name, $id_species);
    $update = "Race modifiée";
    
}

if (!empty($_POST["deleteRace"])) {
    deleteRace($_POST["id_race"]);
    $delete = "Race supprimée";
}




include "views/adminRaces.php";
