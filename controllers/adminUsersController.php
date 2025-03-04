<?php
session_start();

require_once "models/modelUser.php";

$users = getAllUsers();


if (!empty($_POST["deleteUser"])) {
    deleteUserInfos($_POST["id_user"]);
    deleteUser($_POST["id_user"]);
}

include "views/adminUsers.php";

