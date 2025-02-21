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
    <link rel="stylesheet" href="assets/css/informations.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>
        <div class="container-fluid">
            <div class="row mt-lg-5">
                <div class="col-lg-3 offset-lg-1 mt-lg-0" id="photo">
                    <h5>NOM</h5>
                    <p>PHOTO</p>
                </div>
                <div class="col-lg-5 offset-lg-2" id="info">
                    <p>NOM : </p>
                    <p id="para">ESPECE : <span>RACE : </span></p>
                    <p>Né(e) le : </p>
                    <p>Refuge de </p>
                </div>
            </div>

            <div class="row">
                <div class="row col-lg-6 flex-column">
                    <div class="col-lg-8 offset-lg-2" id="plusInfo">
                        <h5>Plus d'informations</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatibus cumque et, assumenda ipsa autem iure ipsam! Explicabo sunt rerum aspernatur dicta ut reiciendis expedita unde, minus quas nemo eius?</p>
                    </div>

                    <div class="col-lg-6 offset-lg-2" id="horaires">
                        <p>Horaire</p>
                        <p>Adresse</p>
                        <p>01.02.03.04.05</p>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-1">
                    <div class="m-lg-0" id="map">
                        <!-- La carte s'affiche ici -->
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
    <script src="assets/js/informations.js"></script>
</body>

</html>