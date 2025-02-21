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
    <link rel="stylesheet" href="assets/css/admin.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>

        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-12">
                    <h1 class="text-center">Espace administrateur</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Gestion des animaux</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 col-lg-7" id="boutonGestion">
                    <button class="btn btn-primary mb-2" id="addAnimal">Ajouter un animal</button>
                    <button class="btn btn-primary mb-2" id="showAnimal">Afficher les animaux</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-12 col-lg-12 col-xxl-12" id="divTable">
                    <!-- Le panneau administrateur s'affiche ici -->
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
    <script src="assets/js/admin.js"></script>
</body>

</html>




<!-- <div class="row">
    <div class="col-12">
        <h1 class="text-center">Espace administrateur</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Gestion des animaux</h2>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button class="btn btn-primary mb-2" id="btnAddAnimal">Ajouter un animal</button>
        <button class="btn btn-primary mb-2" id="btnAddAnimal">Afficher les animaux</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Espèce</th>
                    <th scope="col">Race</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Etablissement</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </tbody>
        </table>
    </div>
</div> -->

<!-- <table>
                        <tbody>
                            <tr>
                                <th>
                                    <label for="id">ID</label>
                                </th>
                                <td>
                                    <input type='text' id='id' name='id'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="species">Espèce</label>
                                </th>
                                <td>
                                    <input type='text' id='species' name='animal_species'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="species">Race</label>
                                </th>
                                <td>
                                    <input type='text' id='race' name='animal_race'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="name">Nom</label>
                                </th>
                                <td>
                                    <input type='text' id='name' name='animal_name'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="age">Age</label>
                                </th>
                                <td>
                                    <input type='text' id='age' name='animal_age'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="sex">Sexe</label>
                                </th>
                                <td>
                                    <input type='text' id='sex' name='animal_sex'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="etablissement">Etablissement</label>
                                </th>
                                <td>
                                    <input type='text' id='etablissement' name='animal_etablissement'>
                                </td>
                            </tr>
                            

                            
                        </tbody>
                    </table> -->

<!-- <form action="" class="formulaire">
                        <label for="">Espece : </label> <input type="text"> <br>
                        <label for="">Race : </label> <input type="text"> <br>
                        <label for="">Nom : </label> <input type="text"> <br>
                        <label for="">Sexe : </label> <input type="text"> <br>
                        <label for="">Age : </label> <input type="text"> <br>
                        <label for="">Etablissement : </label> <input type="text"> <br>
                        <div id="dsubmit">
                            <input type="submit" value="Ajouter">
                        </div>
                    </form> -->