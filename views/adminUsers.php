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
    <link rel="stylesheet" href="assets/css/adminUsers.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php" ?>

    <main>
        <h1 class="text-center">Espace administrateur</h1>
        <div class="container-fluid m-0 p-0">
            <div class="row w-100">
                <div class="col-12">
                    <h2 class="text-center">Gestion des utilisateurs</h2>
                </div>
            </div>
            <div class="row">
                <div id="divTable">
                    <!-- Les utilisateurs s'affiche ici -->
                    <div id="cards" class="d-flex justify-content-center flex-wrap">
                        <?php 

                            displayUsers($users);
                        ?>
                    </div>
                    <div id="table" class="inactive">
                        <?php 

                            displayUsersTable($users);

                        ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/adminUsers.js"></script>
</body>

</html>