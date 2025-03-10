<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
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
                    <h5><?= $animal["name"] ?></h5>
                    <p><img src='/assets/img/<?= $imgFolder ?>/<?= $img ?>' class="card-img-top" alt="chien"></p>
                </div>
                <div class="col-lg-5 offset-lg-2 h-25" id="info">
                    <p>NOM : <?= $animal["name"] ?> </p>
                    <p id="para">ESPECE : <?= $animal["species_name"] ?>
                    <p>RACE : <?= $animal["race_name"] ?> </p>
                    <p>Né(e) le : <?= $animal["birthdate"] ?></p>
                    <p> <?= $animal["shelter_name"] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="row col-lg-6 flex-column">
                    <div class="col-lg-8 offset-lg-2" id="plusInfo">
                        <h5>Plus d'informations</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatibus cumque et, assumenda ipsa autem iure ipsam! Explicabo sunt rerum aspernatur dicta ut reiciendis expedita unde, minus quas nemo eius?</p>
                    </div>

                    <div class="col-lg-6 offset-lg-2" id="horaires">
                        <p>Horaire : </p><p><?= $shelter[0]["infos"]  ?></p>
                        <p>Adresse : </p><p><?= $shelter[0]["adress"] ?>, <?= $shelter[0]["zip_code"] ?>, <span id="city"><?= $shelter[0]["city"] ?></span></p>
                        <p>Télephone : <?= $shelter[0]["phone"] ?></p>
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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/informations.js"></script>
</body>

</html>