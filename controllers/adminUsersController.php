<?php
session_start();

require_once "models/modelUser.php";

$users = getAllUsers();

// Affichage des utilisateurs en mobile
function displayUsers($users)
{
    foreach ($users as $user) {

        $card = <<<EOD
                        <form action="adminUsers" method="post" class="formulaire mb-1 mt-2 me-2" id="card">
                            <label for="id_role">Role : </label> <p>$user[id_role]</p> <br>
                            <label for="id_user">ID : </label><input type="text" id="id_user" name="id_user" value=$user[id_user]> <br>
                            <label for="lastname">Nom : </label> <p>$user[lastname]</p> <br>
                            <label for="firstname">Prénom : </label> <p>$user[firstname]</p> <br>
                            <label for="email">Email : </label> <p>$user[mail]</p> <br>
                            <label for="phone">Télephone : </label> <p>$user[phone]</p> <br>
                            <label for="adress">Adresse : </label> <p>$user[adress]</p> <br>
                            <label for="zip_code">Code Postal : </label> <p>$user[zip_code]</p>  <br>
                            <label for="city">Ville : </label> <p>$user[city]</p> <br>
                            <div id="dsubmit">
                                <input type="submit" value="Supprimer" name="deleteUser" id="deleteUser">
                            </div>
                        </form>
            EOD;

        echo $card;
    }
}

// Affichage des utilisateurs en desktop
function displayUsersTable($users)
{
    foreach ($users as $user) {
        $card = <<<EOD
                    <form id="formShowUser" class="formulaire" action="adminUsers" method="post">
                        <div id="info">
                            <div class="form-group">
                                <label for="id_role">Role</label>
                                <p>$user[id_role]</p>
                            </div>

                            <div class="form-group">
                                <label for="id_user">ID</label>
                                <input type="text" id="id_user" name="id_user" value=$user[id_user]>
                            </div>

                            <div class="form-group">
                                <label for="firstname">Prénom </label>
                                <p>$user[firstname]</p>
                            </div>

                            <div class="form-group">
                                <label for="name">Nom </label>
                                <p>$user[lastname]</p>
                            </div>

                            <div class="form-group">
                                <label for="mail">Email </label>
                                <p>$user[mail]</p>
                            </div>

                            <div class="form-group">
                                <label for="phone">Télephone </label>
                                <p>$user[phone]</p>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <p>$user[adress]</p>
                             </div>

                            <div class="form-group">
                                <label for="zip_code">Code postale </label>
                                <p>$user[zip_code]</p>
                            </div>

                            <div class="form-group">
                                <label for="city">Ville </label>
                                <p>$user[city]</p>
                            </div>
                        </div>
                            
                        <div class="form-actions" id="dsubmit">
                            <input type="submit" value="Supprimer" name="deleteUser" id="deleteUser">
                        </div>
                    </form>
            EOD;

        echo $card;
    }
}


if (!empty($_POST["deleteUser"])) {
    deleteUserInfos($_POST["id_user"]);
    deleteUser($_POST["id_user"]);
}

include "views/adminUsers.php";

