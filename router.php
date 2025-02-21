 <?php

    $path =  $_SERVER["REDIRECT_URL"];

    if ($path == "/") {
        require "controllers/indexController.php";
    } elseif ($path == "/verifForm") {
        require "verifForm.php";
    } else {
        $path = explode("/", $path);
        $controller =  "controllers/" . $path[1] . "Controller.php";

        if (file_exists($controller)) {
            require $controller;
        } else {
            require "views/404.php";
        }
    }
