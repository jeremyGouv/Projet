<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/deleteAccount.css">
    <title>Suppression de compte</title>
</head>
<body>
    <?php include "templates/templateHeader.php" ?> 
    
    <main>
        <div class="container col-lg-6 col-md-8">
            <form class="formulaire" action="deleteAccount" method="post">
                <h1>Attention <?= $_SESSION["firstname"] ?>, voulez-vous vraiment supprimer votre compte ? </h1>
                <p>Confirmez avec votre mot de passe</p>
                <label for="password">Entrez votre mot de passe : </label>
                <input type="password" name="password" id="password">
                <div id="dsubmit">
                    <input type="submit" name="delete" value="Supprimer mon compte">
                    <input type="button" value="Retour" onclick="window.location.href='profil'">
                </div>
            </form>
        </div>
    </main>
    
    <?php include "templates/templateFooter.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>