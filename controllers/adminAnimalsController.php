<?php
session_start();

require_once "models/modelAnimals.php";
require_once "models/modelShelters.php";
require_once "models/modelRaces.php";
require_once "models/modelSpecies.php";


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
               <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
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
                        <label for="id_animal">ID : </label> <input type="text" id="id_animal" name="id_animal" value=$animal[id_animal]> <br>
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
                                <input type="text" id="id_animal" name="id_animal" value=$animal[id_animal]>
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
                            <input type="submit" value="Supprimer" name="deleteAnimal" id="deleteAnimal">
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

        // if ($specie["species_name"] == $animal["species_name"]) {
        // $speciesOption .= "<option value=" . $k . " selected>" . $specie["species_name"] . "</option>";
        // $k++;
        // } else {
        $speciesOption .= "<option value=" . $specie["id_species"] . ">" . $specie["species_name"] . "</option>";
        // }
    }
    foreach ($races as $race) {
        // if ($race["race_name"] == $animal["race_name"]) {
        //     $raceOption .= "<option value=" . $i . " selected>" . $race["race_name"] . "</option>";
        //     $i++;
        // } else {
        //     $raceOption .= "<option value=" . $i . ">" . $race["race_name"] . "</option>";
        //     $i++;
        // }
        $raceOption .= "<option value=" . $race["id_race"] . ">" . $race["race_name"] . "</option>";
    }
    foreach ($shelters as $shelter) {
        // if ($shelter["shelter_name"] == $animal["shelter_name"]) {
        //     $shelterOption .= "<option value=" . $j . " selected>" . $shelter["shelter_name"] . "</option>";
        //     $j++;
        // } else {
        //     $shelterOption .= "<option value=" . $j . ">" . $shelter["shelter_name"] . "</option>";
        //     $j++;
        // }
        $shelterOption .= "<option value=" . $shelter["id_shelter"] . ">" . $shelter["shelter_name"] . "</option>";
    }
    foreach ($animalSex as $value) {
        // if ($value == $animal["sex"]) {
        //     $sexOption .= "<option value=" . $value . " selected>" . $value . "</option>";
        // } else {
        //     $sexOption .= "<option value=" . $value . ">" . $value . "</option>";
        // }
        $sexOption .= "<option value=" . $value . ">" . $value . "</option>";
    }

    foreach ($animals as $animal) {

        $card = <<<EOD
                <form action="adminAnimals" method="post" class="formulaire">
                    <label for="id_animal">ID : </label> <input id="id_animal" name="id_animal" value=$animal[id_animal]> <br>
                    <label for="id_species">Espèce : </label> <select id="id_species" name="id_species"> $speciesOption </select><br>
                    <label for="race">Race : </label> <select id="id_race" name="id_race"> $raceOption </select> <br>
                    <label for="name">Nom : </label> <input type="text" id="name" name="name" value=$animal[name]> <br>
                    <label for="birthdate">Date de naissance : </label> <input type="date" id="birthdate" name="birthdate" value=$animal[birthdate]> <br>
                    <label for="sex">Sexe : </label> <select id="sex" name="sex"> $sexOption </select> <br>
                    <label for="shelter">Etablissement : </label> <select id="id_shelter" name="id_shelter"> $shelterOption </select> <br>
                    <label for="picture">Photo : </label> <input type="file" id="picture" name="picture"> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Enregistrer" name="updateAnimal" id="updateAnimal">
                    </div>
                </form>
            EOD;

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
        $speciesOption .= "<option value=" . $species["id_species"] . ">" . $species["species_name"] . "</option>";
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

function displayShelters()
{
    $shelters = getAllShelter();

    foreach ($shelters as $shelter) {
        $card = <<<CARD
                    <form action="adminAnimals" method="post" class="formulaire">
                        <label for="id_shelter">ID : </label> <input type="text" id="id_shelter" name="id_shelter" value=$shelter[id_shelter]> <br>
                        <label for="shelter_name">Nom : </label> <input type="text" id="shelter_name" name="shelter_name" value='$shelter[shelter_name]'> <br>
                        <label for="adress">Adresse : </label> <input type="text" id="adress" name="adress" value='$shelter[adress]' > <br>
                        <label for="zip_code">Code postal : </label> <input type="text" id="zip_code" name="zip_code" value='$shelter[zip_code]'> <br>
                        <label for="city">Ville : </label> <input type="text" id="city" name="city" value='$shelter[city]'> <br>
                        <label for="phone">Télephone : </label> <input type="text" id="phone" name="phone" value='$shelter[phone]'> <br>
                        <label for="infos">Informations : </label> <textarea id="infos" name="infos" cols="40" raw="10">$shelter[infos]</textarea> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteShelter" class="deleteShelter">
                            <input type="submit" value="Modifier" name="modifyShelter" class="modifyShelter">
                        </div>
                    </form>
                CARD;
        echo $card;
    }
}

function displaySheltersTable()
{
    $shelters = getAllShelter();

    foreach ($shelters as $shelter) {
        $card = <<<CARD
                    <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
                        <div id="info">
                        
                            <div class="form-group">
                                <label for="id_shelter">ID</label>
                                <input type="text" id="id_shelter" name="id_shelter" value=$shelter[id_shelter]>
                            </div>

                            <div class="form-group">
                                <label for="shelter_name">Nom</label>
                                <p>$shelter[shelter_name]</p>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <p>$shelter[adress]</p>
                             </div>

                            <div class="form-group">
                                <label for="zip_code">Code postale </label>
                                <p>$shelter[zip_code]</p>
                            </div>

                            <div class="form-group">
                                <label for="city">Ville </label>
                                <p>$shelter[city]</p>
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <p>$shelter[phone]</p>
                            </div>
                        </div>
                            
                        <div class="form-actions" id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteShelter" id="deleteShelter">
                        </div>
                    </form>
            CARD;
        echo $card;
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

    createAnimal($name, $sex, $birthdate, $picture, $id_race, "", $id_shelter, $id_species);
}

if (!empty($_POST["updateAnimal"])) {
    updateAnimal($_POST["id_animal"], $_POST["name"], $_POST["sex"], $_POST["birthdate"], $_POST["picture"], $_POST["id_race"], $_POST["id_shelter"]);
}

if (!empty($_POST["deleteShelter"])) {
    // deleteShelter($_POST["id_shelter"]);
}

if (!empty($_POST["modifyShelter"])) {
    updateShelter($_POST["id_shelter"], $_POST["shelter_name"], $_POST["adress"], $_POST["zip_code"], $_POST["city"], $_POST["infos"], $_POST["phone"]);
}



include "views/adminAnimals.php";
