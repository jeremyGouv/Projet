<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/connexion.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>
        <!--------------------------------------------------------FORMULAIRE DE CONNEXION-------------------------------------------------------->
        <div class="container col-lg-3">
            <div class="formulaire">
                <h1>Connexion</h1>
                <form name="connexion" id="connexion" method="post" action="connexion">
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" id="mail" name="mail" required>
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div id="dsubmit">
                        <input type="submit" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/connexion.js"></script> -->
</body>

</html>