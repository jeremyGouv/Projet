<?php
session_start();

require_once "models/modelUser.php";

$users = getAllUsers();

function displayUsers($users)
{
    foreach ($users as $user) {
        $card = <<<EOD
                <form action="adminUsers" method="post" class="formulaire mb-1 mt-2">
                    <label for="id_role">Role : </label> <input type="text" id="id_role" name="id_role" value=$user[id_role]> <br>
                    <label for="id_user">ID : </label> <input type="text" id="id_user" name="id_user" value=$user[id_user]> <br>
                    <label for="lastname">Nom : </label> <input type="text" id="lastname" name="lastname" value=$user[lastname]> <br>
                    <label for="firstname">Prénom : </label> <input type="text" id="firstname" name="firstname" value=$user[firstname]> <br>
                    <label for="email">Email : </label> <input type="email" id="email" name="email" value=$user[mail]> <br>
                    <div id="dsubmit">
                        <input type="submit" value="Supprimer" name="deleteUser" id="deleteUser">
                    </div>
                </form>
            EOD;

        echo $card;
    }
}

if(!empty($_POST["deleteUser"])){
    deleteUser($_POST["id_user"]);
}

include "views/adminUsers.php";
