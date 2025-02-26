<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/inscription.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>
        <!--------------------------------------------------------FORMULAIRE D'INSCRIPTION------------------------------------------------->
        <div class="container col-lg-10 p-0">
            <div class="formulaire">
                <h1>Inscrivez-vous</h1>
                <p>Pour créer un profil, veuillez vous inscrire.</p>
                <form name="inscription" id="inscription" method="post" action="inscription">
                    <div id="dlastname">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                    <div id="dfirstname">
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div id="dmail">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div id="dpassword">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" pattern="(\d{1,n})([a-z]{1,n})([A-Z]{1,n}).{8,}" title="wrong password" required>
                    </div>
                    <div class="dsubmit">
                        <input type="submit" id="submit" name="subscribe" value="S'inscrire">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/inscription.js"></script>
</body>

</html>