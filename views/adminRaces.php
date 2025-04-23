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
    <link rel="stylesheet" href="assets/css/adminRaces.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php" ?>

    <main>
        <h1>Espace administrateur</h1>
        <div class="container-fluid m-0 p-0 d-flex flex-column align-items-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Gestion des races</h2>
                    <div id="message"> <?= $message = !empty($add) ? $add : ""; ?> </div>
                    <div id="message"> <?= $message = !empty($delete) ? $delete : ""; ?> </div>
                    <div id="message"> <?= $message = !empty($update) ? $update : ""; ?> </div>
                </div>
            </div>
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-12 m-0 p-0" id="boutonGestion">
                    <form method="post" action="adminRaces" id="formButton">
                        <input type="submit" value="Ajouter une race" name="addRace" id="addRace">
                        <input type="submit" value="Afficher les races" name="showRaces" id="showRaces">
                    </form>
                </div>
            </div>
            <div class="row">
                <div id="divTable">
                    <!-- Les animaux s'affiche ici -->
                    <div id="card">
                        <?php
                        if (!empty($_POST["showRaces"])) {
                            displayRaces();
                        } elseif (!empty($_POST["addRace"])) {
                            addRace();
                        }
                        ?>
                    </div>
                    <div id="table" class="inactive">
                        <?php
                        if (!empty($_POST["showRaces"])) {
                            displayRacesTable();
                        } elseif (!empty($_POST["addRace"])) {
                            addRaceTable();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script src="assets/js/script.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/adminAnimals.js"></script>
</body>

</html>