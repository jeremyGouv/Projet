<?php
session_start();

require_once "models/modelAnimals.php";

$animals = getAllAnimals();


function addAnimal(){

    $card = <<<EOD
            <form action="adminAnimals" method="post" class="formulaire">
                <label for="species">Espèce : </label> <select id="species" name="species"> <option value="dog">Chien</option><option value="cat">Chat</option></select><br>
                <label for="race">Race : </label> <input type="text" id="race" name="race" value= > <br>
                <label for="name">Nom : </label> <input type="text" id="name" name="name"> <br>
                <label for="age">Date de naissance : </label> <input type="date" id="age" name="age"> <br>
                <label for="sex">Sexe : </label> <select id="sexe" name="sexe"><option value="male">Mâle</option><option value="female">Femelle</option></select> <br>
                <label for="shelter">Etablissement : </label> <select id="shelter" name="shelter"> <option value="shelter">shelter</option></select> <br>
                <label for="picture">Photo : </label> <input type="file" id="picture" name="picture"> <br>
                <div id="dsubmit">
                    <input type="submit" value="Enregistrer" name="saveAnimal" id="saveAnimal">
                </div>
            </form>
        EOD;
        

    echo $card;
}

function addAnimalTable(){

    $table = <<<EOD
               <form id="formShowAnimal" class="formulaire" action="adminAnimals" method="post">
                    <div id="info">
                        <div class="form-group">
                            <label for="species">Espèce </label>
                            <select id="species" name="species"> <option value="dog">Chien</option><option value="cat">Chat</option></select>
                        </div>
                        
                        <div class="form-group">
                            <label for="race">Race </label>
                            <select id="race" name="race"> <option value="">race</option></select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nom">Nom </label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="age">Date de naissance </label>
                            <input type="date" id="birthdate" name="birthdate" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="sexe">Sexe </label>
                            <select id="sexe" name="sexe">
                                <option value="male">Mâle</option>
                                <option value="female">Femelle</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="shelter">Établissement </label>
                            <select id="shelter" name="shelter"> <option value="shelter">shelter</option></select>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo">Photo </label>
                            <input type="file" id="photo" name="photo">
                        </div>
                        
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Enregistrer" name="saveAnimal" id="saveAnimal">
                        
                    </div>
                </form>
            EOD;
        

    echo $table;
}

function displayAnimal(){

    // foreach ($animals as $animal) {
        $card = <<<EOD
                    <form action="adminAnimals" method="post" class="formulaire">
                        <label for="id_species">Espèce : </label> <p>d $animal [id_species] </p> <br>
                        <label for="id_race">Race : </label> <p> $animal[id_race] </p> <br>
                        <label for="name">Nom : </label> <p> $animal[name] </p> <br>
                        <label for="sex">Sexe : </label> <p> $animal[sex] </p> <br>
                        <label for="birthdate">Date de naissance : </label> <p> $animal[birthdate] </p> <br>
                        <label for="id_shelter">Etablissement : </label> <p> $animal[id_shelter] </p> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteAnimal" id="deleteAnimal">
                        </div>
                    </form>
                EOD;
        // $card = <<<CARD
        //         <div class="card" style="width: 18rem;">
        //             <img src="..." class="card-img-top" alt="...">
        //             <div class="card-body">
        //                 <h5 class="card-title">Card title</h5>
        //                 <p class="card-text">Espèce : 1</p>
        //                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        //                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        //                 <a href="#" class="btn btn-primary">Go somewhere</a>
        //             </div>
        //         </div>
        //     CARD;

        echo $card;
    // }
}

function displayAnimalTable(){

    // foreach ($animals as $animal) {
        $card = <<<EOD
                <form action="adminAnimals" method="post" class="formulaire">
                <label for="id_race">Espèce : </label> <input type="text" id="id_race" name="id_race" > <br>
                <label for="race">Race : </label> <input type="text" id="race" name="race" > <br>
                <label for="name">Nom : </label> <input type="text" id="name" name="name" > <br>
                <label for="sex">Sexe : </label> <input type="text" id="sexe" name="sexe" > <br>
                <label for="birthdate">Date de naissance : </label> <input type="text id="birthdate" name="birthdate" > <br>
                <label for="shelter">Etablissement : </label> <input type="text" id="shelter" name="shelter" > <br>
                <div id="dsubmit">
                    <input type="submit" value="Mise à jour" name="updateAnimal" id="updateAnimal">
                    <input type="submit" value="Supprimer" name="deleteAnimal" id="deleteAnimal">
                </div>
            </form>
            EOD;

        echo $card;
    // }
}



// value=$animal[id_race]
// value=$animal[id_race]
// value=$animal[name]
// value=$animal[sex]
// value=$animal[birthdate]
// value=$animal[id_shelter]



if (!empty($_POST["deleteAnimal"])) {
    
    deleteAnimal($_POST["id_animal"]);
}

if(!empty($_POST["saveAnimal"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}




include "views/adminAnimals.php";



// $card = <<<EOD
//                 <form action="adminAnimals" method="post" class="formulaire">
//                 <label for="id_species">Espèce : </label> <select id="id_species" name="species> <option value="dog">Chien</option><option value="cat">Chat</option></select> <br>
//                 <label for="id_race">Race : </label> <select id="id_race" name="race"> <option value="race">race</option></select><br>
//                 <label for="name">Nom : </label> <input type="text" id="name" name="name" > <br>
//                 <label for="sex">Sexe : </label> <select id="sex" name="sex"> <option value="male">Mâle</option> <option value="female">Femelle</option></select><br>
//                 <label for="birthdate">Date de naissance : </label> <input type="date" id="birthdate" name="birthdate" value="2025-03-04"> <br>
//                 <label for="id_shelter">Etablissement : </label> <select id="id_shelter" name="shelter"> <option value="shelter">shelter</option></select> <br>
//                 <div id="dsubmit">
//                     <input type="submit" value="Mise à jour" name="updateAnimal" id="updateAnimal">
//                     <input type="submit" value="Supprimer" name="deleteAnimal" id="deleteAnimal">
//                 </div>
//             </form>
//             EOD;


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
