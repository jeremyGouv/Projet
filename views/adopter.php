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
    <link rel="stylesheet" href="assets/css/adopter.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>
        <h1>Retrouvez nos petits compagnons à l'adoption</h1>
        <div id="burger_icon"><img src="./assets/img/burger_icon.svg" alt="burger icon" id="burger_icon_img">Filtres</div>
        <div class="container-fluid">
            <div class="row" id="rowFilter">        
                <div class="filtres_hidden">
                    <form action="adopter" method="post">
                        <div class="accordion " id="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Nom de l'établissements
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <select name="id_shelter" id="id_shelter">
                                            <option value="none" selected> - </option>
                                            <?php foreach ($shelters as $shelter) {
                                                echo "<option value=" . $shelter["id_shelter"] . "> $shelter[shelter_name] </option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Nom
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <input type="text" id="nom_animal" name="nom_animal">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Espèces
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <label for="chien">Chien</label>
                                        <input type="checkbox" name="chien" id="chien"> <br>
                                        <label for="chat">Chat</label>
                                        <input type="checkbox" name="chat" id="chat">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-item">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="race_accordion">
                                        Race
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <select name="race" id="race">
                                            <option value="none" selected> - </option>
                                            <?php foreach ($races as $race) {
                                                if($race["id_species"] == 1) {
                                                    echo "<option value=" . $race["id_race"] . " id=".$race["id_race"]." class=dog> $race[race_name] </option>";
                                                }else{
                                                    echo "<option value=" . $race["id_race"] . " id=".$race["id_race"]." class=cat> $race[race_name] </option>";
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-item">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Sexe
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <label for="male">Mâle</label>
                                        <input type="checkbox" name="male" id="male"> <br>
                                        <label for="femelle">Femelle</label>
                                        <input type="checkbox" name="femelle" id="femelle">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion-item">
                                <h2 class="accordion-item">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        age
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <label for="junior">Junior</label>
                                        <input type="checkbox" name="junior" id="junior"> <br>
                                        <label for="adulte">Adulte</label>
                                        <input type="checkbox" name="adulte" id="adulte"> <br>
                                        <label for="senior">Sénior</label>
                                        <input type="checkbox" name="senior" id="senior">
                                    </div>
                                </div>
                            </div> -->

                            <input type="submit" id="valid" name="valid" value="Valider">
                        </div>
                    </form>
                </div>
                <div class="animaux_trouve col-lg-9 col-xl-9 d-flex justify-content-center flex-wrap"> <?php showAnimals() ?> </div>
            </div>
        </div>
    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/adopter.js"></script>
</body>

</html>