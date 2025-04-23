<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>Les Compagnons du Bonheur</title>
</head>

<body>
    <?php include "templates/templateHeader.php"; ?>

    <main>
        <h1> Les Compagnons du Bonheur</h1>
        <!--------------------------------------------------------CAROUSEL-------------------------------------------------------->
        <div class="container d-flex justify-content-center">
            <div class="carousel slide mt-5 mb-5 col-md-8 col-lg-7 col-xl-6 col-xxl-6" data-bs-ride="carousel" id="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/img/chien_caroussel.jpg" class="d.block" alt="chien_caroussel" />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/chat_caroussel.webp" class="d.block" alt="chat_caroussel" />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/chien2_caroussel.jpg" class="d.block" alt="chien2_caroussel" />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/chat2_caroussel.jpg" class="d.block" alt="chat2_caroussel" />
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------------------------------HOME TEXT-------------------------------------------------------->

        <div id="home-text">
            <p>
                Adopter un animal, c'est bien plus qu'offrir un foyer à un être en détresse, c'est découvrir une relation unique faite de fidélité
                et d'affection iconditionnelle. Un animal adopté apporte une joie de vivre et une compagnie quotidienne qui enrichissent nos vies
                de manière inestimable. En choisissant d'adopter, vous contribuez à sauver une vie et à alléger la surcharge des refuges. De plus,
                vous permettez à ces adorables compagnons de connaître enfin la chaleur et la sécurité d'un foyer aimant. Chaque adoption est une
                histoire de sauvetage, de renouveau et de bonheur partagé, une chance de transformer votre vie et celle de votre nouvel ami à
                quatre pattes.
            </p>
        </div>

        <div class="consent">
            <p class="consent-title"> Ici, votre vie privée est respectée 🍪 </p>
            <p>J'utilise des cookies pour que vous puissiez avoir une navigation plus fluide et du contenu personnalisé. En cliquant sur « Tout accepter », vous consentez à mon utilisation des cookies.</p>    
            <div>
                <button class="consent-btn">Ne pas accepter</button>
                <button class="consent-btn">Tout accepter</button>
            </div>
        </div>

    </main>

    <?php include "templates/templateFooter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>