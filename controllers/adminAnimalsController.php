<?php
session_start();

require_once "models/modelAnimals.php";
require_once "models/modelShelters.php";
require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";

$delete = "";
$animals = getAllAnimals();
$races = getAllRaces();
$species = getAllSpecies();
$shelters = getAllShelter();



function addAnimal()
{
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";



    foreach ($races as $race) {
        $raceOption .= "<option value=" . $race["id_race"] . ">" . $race["race_name"] . "</option>";
    }
    foreach ($species as $species) {
        $speciesOption .= "<option value=" . $species["id_species"] . ">" . $species["species_name"] . "</option>";
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $shelter["id_shelter"] . "'>" . $shelter["shelter_name"] . "</option>";
    }

    $card = <<<EOD
            <form action="adminAnimals" method="post" class="formulaire">
                <label for="id_species">Espèce : </label> <select id="id_species" name="id_species"> $speciesOption </select><br>
                <label for="race">Race : </label> <select id="id_race" name="id_race"> $raceOption </select> <br>
                <label for="name">Nom : </label> <input type="text" id="name" name="name"> <br>
                <label for="birthdate">Date de naissance : </label> <input type="date" id="birthdate" name="birthdate"> <br>
                <label for="sex">Sexe : </label> <select id="sex" name="sex"><option value="Male">Mâle</option><option value="Femelle">Femelle</option></select> <br>
                <label for="shelter">Etablissement : </label> <select id="id_shelter" name="id_shelter"> $shelterOption </select> <br>
                <label for="picture">Photo : </label> <input type="file" id="picture" name="picture"> <br>
                <div id="dsubmit">
                    <input type="submit" value="Enregistrer" name="saveAnimal" id="saveAnimal">
                </div>
            </form>
        EOD;

    echo $card;
}

function addAnimalTable()
{
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";


    foreach ($races as $race) {
        $raceOption .= "<option value=" . $race["id_race"] . ">" . $race["race_name"] . "</option>";
    }
    foreach ($species as $species) {
        $speciesOption .= "<option value=" . $species["id_species"] . ">" . $species["species_name"] . "</option>";
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $shelter["id_shelter"] . "'>" . $shelter["shelter_name"] . "</option>";
    }

    $table = <<<EOD
               <form  class="formulaire" action="adminAnimals" method="post">
                    <div id="infoadd">
                        <div class="form-group">
                            <label for="id_species">Espèce </label>
                            <select id="id_species" name="id_species"> $speciesOption </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="id_race">Race </label>
                            <select id="id_race" name="id_race" > $raceOption </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Nom </label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="birthdate">Date de naissance </label>
                            <input type="date" id="birthdate" name="birthdate" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="sex">Sexe </label>
                            <select id="sex" name="sex">
                                <option value="Male">Mâle</option>
                                <option value="Femelle">Femelle</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="id_shelter">Établissement </label>
                            <select id="id_shelter" name="id_shelter"> $shelterOption </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="picture">Photo </label>
                            <input type="file" id="picture" name="picture">
                        </div>
                       
                        <div class="form-actions">
                            <input type="submit" value="Enregistrer" name="saveAnimal" id="saveAnimal">
                        </div>
                    </div>
                </form>
            EOD;



    echo $table;
}

function displayAnimal()
{
    $animals = getAllAnimals();

    foreach ($animals as $animal) {
        $card = <<<EOD
                    <form action="adminAnimals" method="post" class="formulaire">
                        <label for="id_animal">ID : </label> <input type="text" id="id_animal" name="id_animal" value=$animal[id_animal] readonly> <br>
                        <label for="id_species">Espèce : </label> <p> $animal[species_name] </p> <br>
                        <label for="id_race">Race : </label> <p> $animal[race_name] </p> <br>
                        <label for="name">Nom : </label> <p> $animal[name] </p> <br>
                        <label for="sex">Sexe : </label> <p> $animal[sex] </p> <br>
                        <label for="birthdate">Date de naissance : </label> <p> $animal[birthdate] </p> <br>
                        <label for="id_shelter">Etablissement : </label> <p> $animal[shelter_name] </p> <br>
                        <label for="adress">Adresse : </label> <p> $animal[adress] </p> <br>
                        <label for="zip_code">Code postal : </label> <p> $animal[zip_code] </p> <br>
                        <label for="city">Etablissement : </label> <p> $animal[city] </p> <br>
                        <label for="phone">Télephone : </label> <p> $animal[phone] </p> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteAnimal" class="deleteAnimal">
                        </div>
                    </form>
                EOD;
        echo $card;
    }
}

function displayAnimalTable()
{
    $animals = getAllAnimals();

    foreach ($animals as $animal) {
        $card = <<<EOD
                    <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
                        <div id="info">
                        
                            <div class="form-group">
                                <label for="id_animal">ID</label>
                                <input type="text" id="id_animal" name="id_animal" value=$animal[id_animal] readonly>
                            </div>

                            <div class="form-group">
                                <label for="species_name">Espece</label>
                                <p>$animal[species_name]</p>
                            </div>

                            <div class="form-group">
                                <label for="race_name">Race </label>
                                <p>$animal[race_name]</p>
                            </div>

                            <div class="form-group">
                                <label for="name">Nom </label>
                                <p>$animal[name]</p>
                            </div>

                            <div class="form-group">
                                <label for="sec">Sexe </label>
                                <p>$animal[sex]</p>
                            </div>

                            <div class="form-group">
                                <label for="birthdate">Date de naissance </label>
                                <p>$animal[birthdate]</p>
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <p>$animal[phone]</p>
                            </div>

                            <div class="form-group">
                                <label for="shelter_name">Refuge </label>
                                <p>$animal[shelter_name]</p>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <p>$animal[adress]</p>
                             </div>

                            <div class="form-group">
                                <label for="zip_code">Code postale </label>
                                <p>$animal[zip_code]</p>
                            </div>

                            <div class="form-group">
                                <label for="city">Ville </label>
                                <p>$animal[city]</p>
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <p>$animal[phone]</p>
                            </div>
                        </div>
                            
                        <div class="form-actions" id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteAnimal" class="deleteAnimal">
                        </div>
                    </form>
            EOD;
        echo $card;
    }
}

function modifyAnimal()
{
    $animalSex = ["Male", "Femelle"];
    $animals = getAllAnimals();
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";
    $sexOption = "";



    foreach ($species as $specie) {
        $speciesOption .= "<option value=" . $specie["id_species"] . ">" . $specie["species_name"] . "</option>";
    }
    
    foreach ($races as $race) {
        $raceOption .= "<option value=" . $race["id_race"] . ">" . $race["race_name"] . "</option>";
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value=" . $shelter["id_shelter"] . ">" . $shelter["shelter_name"] . "</option>";
    }
    foreach ($animalSex as $value) {
        $sexOption .= "<option value=" . $value . ">" . $value . "</option>";
    }

    foreach ($animals as $animal) {
        
        $card = '<form action="adminAnimals" method="post" class="formulaire">
                    <label for="id_animal">ID : </label> <input id="id_animal" name="id_animal" value=' . $animal["id_animal"] . '> <br>
                    <label for="id_species" class="$animal[species_name]">Espèce : </label> <select id="id_species" name="id_species">' . $speciesOption . '</select><br>
                    <label for="race" class="$animal[race_name]">Race : </label> <select id="id_race" name="id_race">' . $raceOption . '</select> <br>
                    <label for="name">Nom : </label> <input type="text" id="name" name="name" value=' . $animal["name"] . '> <br>
                    <label for="birthdate">Date de naissance : </label> <input type="date" id="birthdate" name="birthdate" value=' . $animal["birthdate"] . '> <br>
                    <label for="sex" class="$animal[sex]">Sexe : </label> <select id="sex" name="sex">' . $sexOption . '</select> <br>
                    <label for="shelter" class="$animal[shelter_name]">Etablissement : </label> <select id="id_shelter" name="id_shelter">' . $shelterOption . '</select> <br>
                    <label for="picture">Photo : </label> <input type="file" id="picture" name="picture"> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Enregistrer" name="updateAnimal" id="updateAnimal">
                    </div>
                </form>';



        echo $card;
    }
}

function modifyAnimalTable()
{
    $animals = getAllAnimals();
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";




    foreach ($races as $race) {
        $raceOption .= "<option value=" . $race["id_race"] . ">" . $race["race_name"] . "</option>";
    }
    foreach ($species as $species) {
        $selected = "";
        foreach ($animals as $animal) {
            if ($species["species_name"] == $animal["species_name"]) {
                $selected = "selected";
            } else {
                $selected = "";
            }
        }
        $speciesOption .= "<option value=" . $species["id_species"] .  $selected . ">" . $species["species_name"] . "</option>";
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $shelter["id_shelter"] . "'>" . $shelter["shelter_name"] . "</option>";
    }


    foreach ($animals as $animal) {
        $species = getAllSpecies();
        $table = <<<EOD
                <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
                        <div id="infoadd">
                            <div class="form-group">
                                <label for="id_animal">ID </label>
                                <input id="id_animal" name="id_animal" value=$animal[id_animal]>
                            </div>
                            
                            <div class="form-group">
                                <label for="id_species">Espèce</label>
                                <select id="id_species" name="id_species"> $speciesOption </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="id_race">Race </label>
                                <select id="id_race" name="id_race" > $raceOption </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">Nom </label>
                                <input type="text" id="name" name="name" value=$animal[name]>
                            </div>
                            
                            <div class="form-group">
                                <label for="birthdate">Date de naissance </label>
                                <input type="date" id="birthdate" name="birthdate" value=$animal[birthdate]>
                            </div>
                            
                            <div class="form-group">
                                <label for="sex">Sexe </label>
                                <select id="sex" name="sex">
                                    <option value="Male">Mâle</option>
                                    <option value="Femelle">Femelle</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="id_shelter">Établissement </label>
                                <select id="id_shelter" name="id_shelter"> $shelterOption </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="picture">Photo </label>
                                <input type="file" id="picture" name="picture">
                            </div>
                        
                            <div class="form-actions">
                                <input type="submit" value="Enregistrer" name="updateAnimal" id="updateAnimal">
                            </div>
                        </div>
                    </form>
                EOD;

        echo $table;
    }
}


if (!empty($_POST["saveAnimal"])) {

    $name = validData($_POST["name"]);
    $sex = validData($_POST["sex"]);
    $birthdate = validData($_POST["birthdate"]);
    $picture = validData($_POST["picture"]);
    $id_race = validData($_POST["id_race"]);
    $id_shelter = validData($_POST["id_shelter"]);
    $id_species = validData($_POST["id_species"]);

    createAnimal($name, $sex, $birthdate, $picture, $id_race, $id_shelter, $id_species);
}

if (!empty($_POST["updateAnimal"])) {
    updateAnimal($_POST["id_animal"], $_POST["name"], $_POST["sex"], $_POST["birthdate"], $_POST["picture"], $_POST["id_race"], $_POST["id_shelter"]);
}

if (!empty($_POST["deleteAnimal"])) {
    deleteAnimal($_POST["id_animal"]);
    $delete = "Suppression réussie";
}







include "views/adminAnimals.php";
