<?php
$path =  $_SERVER["REDIRECT_URL"];
$path = explode("/", $path);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>404</h1>
    <?= $path[1] ?>
    <a href="/index">Retour à l'acceuil</a>
</body>

</html>