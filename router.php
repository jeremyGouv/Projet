<?php

$path =  $_SERVER["REDIRECT_URL"];

if ($path == "/") {
    require "controllers/indexController.php";
} else if ($path === "/robots.txt") {
    include_once "robots.txt";
} else {
    $path = explode("/", $path);
    $controller =  "controllers/" . $path[1] . "Controller.php";

    if (file_exists($controller)) {
        require $controller;
    } else {
        require "views/404.php";
    }
}
