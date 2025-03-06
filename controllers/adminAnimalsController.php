<?php
session_start();

require_once "models/modelAnimals.php";


function addAnimal()
{
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";

    $i = 1; // increment value $raceOption
    $j = 1; // increment value $shelterOption
    $k = 1; // increment value $speciesOption


    foreach ($races as $race) {
        $raceOption .= "<option value=" . $i . ">" . $race["race_name"] . "</option>";
        $i++;
    }
    foreach ($species as $species) {
        $speciesOption .= "<option value=" . $k . ">" . $species["species_name"] . "</option>";
        $k++;
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $j . "'>" . $shelter["shelter_name"] . "</option>";
        $j++;
    }

    $card = <<<EOD
            <form action="adminAnimals" method="post" class="formulaire">
                <label for="id_species">Espèce : </label> <select id="id_species" name="id_species"> $speciesOption </select><br>
                <label for="race">Race : </label> <select id="id_race" name="id_race"> $raceOption </select> <br>
                <label for="name">Nom : </label> <input type="text" id="name" name="name"> <br>
                <label for="birthdate">Date de naissance : </label> <input type="date" id="birthdate" name="birthdate"> <br>
                <label for="sex">Sexe : </label> <select id="sex" name="sex"><option value="Mâle">Mâle</option><option value="Femelle">Femelle</option></select> <br>
                <label for="shelter">Etablissement : </label> <select id="id_shelter" name="id_shelter"> $shelterOption </select> <br>
                <label for="more_infos">Infos : </label> <textarea id="more_infos" name="more_infos" rows="2" cols="30" placeholder="facultatif"></textarea> <br>
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

    $i = 1; // increment value $raceOption
    $j = 1; // increment value $shelterOption
    $k = 1; // increment value $speciesOption

    foreach ($races as $race) {
        $raceOption .= "<option value=" . $i . ">" . $race["race_name"] . "</option>";
        $i++;
    }
    foreach ($species as $species) {
        $speciesOption .= "<option value=" . $j . ">" . $species["species_name"] . "</option>";
        $j++;
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $k . "'>" . $shelter["shelter_name"] . "</option>";
        $k++;
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
                                <option value="Mâle">Mâle</option>
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
    $animalSex = ["Mâle", "Femelle"];
    $animals = getAllAnimals();
    $races = getAllRaces();
    $species = getAllSpecies();
    $shelters = getAllShelter();

    $raceOption = "";
    $speciesOption = "";
    $shelterOption = "";
    $sexOption = "";

    $i = 1; // increment value $raceOption
    $j = 1; // increment value $shelterOption
    $k = 1; // increment value $speciesOption

    // echo "<pre>";
    // print_r($animals);
    // print_r($_POST);
    // print_r($races);
    // print_r($species);
    // print_r($shelters);
    // print_r($animalSex);
    // echo "</pre>";

    foreach ($species as $specie) {

        // if ($specie["species_name"] == $animal["species_name"]) {
            // $speciesOption .= "<option value=" . $k . " selected>" . $specie["species_name"] . "</option>";
            // $k++;
        // } else {
            $speciesOption .= "<option value=" . $k . ">" . $specie["species_name"] . "</option>";
            $k++;
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
        $raceOption .= "<option value=" . $i . ">" . $race["race_name"] . "</option>";
        $i++;
    }
    foreach ($shelters as $shelter) {
        // if ($shelter["shelter_name"] == $animal["shelter_name"]) {
        //     $shelterOption .= "<option value=" . $j . " selected>" . $shelter["shelter_name"] . "</option>";
        //     $j++;
        // } else {
        //     $shelterOption .= "<option value=" . $j . ">" . $shelter["shelter_name"] . "</option>";
        //     $j++;
        // }
        $shelterOption .= "<option value=" . $j . ">" . $shelter["shelter_name"] . "</option>";
        $j++;
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
                    <label for="more_infos">Infos : </label> <textarea id="more_infos" name="more_infos" rows="2" cols="30" placeholder="facultatif"></textarea> <br>
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

    $i = 1; // increment value $raceOption
    $j = 1; // increment value $shelterOption
    $k = 1; // increment value $speciesOption

    foreach ($races as $race) {
        $raceOption .= "<option value=" . $i . ">" . $race["race_name"] . "</option>";
        $i++;
    }
    foreach ($species as $species) {
        $speciesOption .= "<option value=" . $j . ">" . $species["species_name"] . "</option>";
        $j++;
    }
    foreach ($shelters as $shelter) {
        $shelterOption .= "<option value='" . $k . "'>" . $shelter["shelter_name"] . "</option>";
        $k++;
    }

    foreach ($animals as $animal) {

        $table = <<<EOD
                <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
                        <div id="infoadd">
                            <div class="form-group">
                                <label for="id_animal">ID </label>
                                <input id="id_animal" name="id_animal" value=$animal[id_animal]>
                            </div>
                            
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
                                <input type="text" id="name" name="name" value=$animal[name]>
                            </div>
                            
                            <div class="form-group">
                                <label for="birthdate">Date de naissance </label>
                                <input type="date" id="birthdate" name="birthdate" value=$animal[birthdate]>
                            </div>
                            
                            <div class="form-group">
                                <label for="sex">Sexe </label>
                                <select id="sex" name="sex">
                                    <option value="Mâle">Mâle</option>
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

    createAnimal($name, $sex, $birthdate, $picture, $id_race, "", $id_shelter, $id_species);
}

if (!empty($_POST["deleteAnimal"])) {
    deleteAnimal($_POST["id_animal"]);
}

if (!empty($_POST["updateAnimal"])) {

    updateAnimal($_POST["id_animal"], $_POST["name"], $_POST["sex"], $_POST["birthdate"], $_POST["picture"], $_POST["id_race"], $_POST["id_shelter"]);
}


include "views/adminAnimals.php";




// <form id="animalForm">
//   <fieldset>
//     <legend>Informations sur l'animal</legend>

//     <label for="espece">Espèce :</label>
//     <input type="text" id="espece" name="espece" required><br><br>

//     <label for="race">Race :</label>
//     <input type="text" id="race" name="race" required><br><br>

//     <label for="nom">Nom :</label>
//     <input type="text" id="nom" name="nom" required><br><br>

//     <label for="age">Âge :</label>
//     <input type="number" id="age" name="age" required><br><br>

//     <label for="sexe">Sexe :</label>
//     <select id="sexe" name="sexe">
//       <option value="male">Mâle</option>
//       <option value="female">Femelle</option>
//     </select><br><br>

//     <label for="etablissement">Établissement :</label>
//     <input type="text" id="etablissement" name="etablissement" required><br><br>

//     <label for="photo">Photo :</label>
//     <input type="file" id="photo" name="photo"><br><br>

//     <input type="submit" value="Enregistrer" name="saveAnimal" id="saveAnimal">
//     <input type="button" value="Ajouter une ligne" name="addRow" id="addRow">
//   </fieldset>
// </form>
