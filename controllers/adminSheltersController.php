<?php
session_start();

require_once "models/modelShelters.php";



function addShelter()
{
    $card = <<<CARD
                <form action="adminShelters" method="post" class="formulaire">
                    <label for="shelter_name">Nom : </label> <input type="text" id="shelter_name" name="shelter_name"> <br>
                    <label for="adress">Adresse : </label> <input type="text" id="adress" name="adress"> <br>
                    <label for="zip_code">Code postal : </label> <input type="text" id="zip_code" name="zip_code"> <br>
                    <label for="city">Ville : </label> <input type="text" id="city" name="city"> <br>
                    <label for="phone">Télephone : </label> <input type="text" id="phone" name="phone"> <br>
                    <label for="infos">Informations : </label> <textarea id="infos" name="infos" cols="40" raw="10"></textarea> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Ajouter" name="saveShelter" class="saveShelter">
                    </div>
                </form>
            CARD;
    echo $card;
}

function addShelterTable()
{
    $card = <<<CARD
                <form id="formShowAnimal" class="formulaire" action="adminShelters" method="post">
                        <div id="infoadd">
                            <div class="form-group">
                                <label for="shelter_name">Nom</label>
                                <input type="text" id="shelter_name" name="shelter_name">
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <input type="text" id="adress" name="adress">
                             </div>

                            <div class="form-group">
                                <label for="zip_code">Code postale </label>
                                <input type="text" id="zip_code" name="zip_code">
                            </div>

                            <div class="form-group">
                                <label for="city">Ville </label>
                                <input type="text" id="city" name="city">
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="infos">Informations : </label>
                                <textarea id="infos" name="infos" cols="40" raw="10"></textarea> <br>
                            </div>
                        </div>
                            
                        <div class="form-actions" id="dsubmit">
                            <input type="submit" value="Ajouter" name="saveShelter" class="saveShelter">
                        </div>
                </form>
        CARD;
    echo $card;
}

function displayShelters()
{
    $shelters = getAllShelter();

    foreach ($shelters as $shelter) {
        $card = <<<CARD
                    <form action="adminShelters" method="post" class="formulaire">
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
                    <form id="formShowAnimal" class="formulaire" action="adminShelters" method="post">
                        <div id="info">
                            <div class="form-group">
                                <label for="id_shelter">ID</label>
                                <input type="text" id="id_shelter" name="id_shelter" value='$shelter[id_shelter]'>
                            </div>

                            <div class="form-group">
                                <label for="shelter_name">Nom</label>
                                <input type="text" id="shelter_name" name="shelter_name" value='$shelter[shelter_name]'>
                            </div>
                        
                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <input type="text" id="adress" name="adress" value='$shelter[adress]'>
                            </div>

                            <div class="form-group">
                                <label for="zip_code">Code postale </label>
                                <input type="text" id="zip_code" name="zip_code" value='$shelter[zip_code]'>
                            </div>

                            <div class="form-group">
                                <label for="city">Ville </label>
                                <input type="text" id="city" name="city" value='$shelter[city]'>
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <input type="text" id="phone" name="phone" value='$shelter[phone]'>
                            </div>

                            <div class="form-group">
                                <label for="infos">Informations : </label>
                                <textarea id="infos" name="infos" cols="40" raw="10">$shelter[infos]</textarea> <br>
                            </div>
                        </div>
                            
                        <div class="form-actions" id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteShelter" class="deleteShelter">
                            <input type="submit" value="Modifier" name="modifyShelter" class="modifyShelter">
                        </div>
                </form>
            CARD;
        echo $card;
    }
}



if (!empty($_POST["saveShelter"])) {

    $shelter_name = validData($_POST["shelter_name"]);
    $adress = validData($_POST["adress"]);
    $zip_code = validData($_POST["zip_code"]);
    $city = validData($_POST["city"]);
    $phone = validData($_POST["phone"]);
    $infos = validData($_POST["infos"]);

    createShelter($shelter_name, $adress, $zip_code, $city, $phone, $infos);
}

if (!empty($_POST["deleteShelter"])) {
    deleteShelter($_POST["id_shelter"]);
}

if (!empty($_POST["modifyShelter"])) {
    updateShelter($_POST["id_shelter"], $_POST["shelter_name"], $_POST["adress"], $_POST["zip_code"], $_POST["city"], $_POST["infos"], $_POST["phone"]);
}



include "views/adminShelters.php";
