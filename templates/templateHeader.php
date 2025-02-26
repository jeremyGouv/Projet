<header>
    <!--------------------------------------------------------NAVBAR-------------------------------------------------------->
    <nav class="navbar navbar-expand-lg text-black fs-4">
        <div class="container-fluid w-auto m-0">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar"
                aria-controls="navbarTogglerDemo01"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <a href="/"><img src="assets/img/logo.png" alt="logo du Site" id="logoSite" /></a>

        <div class="collapse navbar-collapse justify-content-evenly" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item p-2">
                    <?php if (empty($_SESSION)) {
                        echo '<a class="nav-link" href="inscription">S\'inscrire</a>';
                    }
                    ?>

                </li>
                <li class="nav-item p-2">
                    <?php if (isset($_SESSION["id_role"])) {
                        $link = ($_SESSION["id_role"] === 2) ? '<a class="nav-link" href="profil">Profil</a>' : '<a class="nav-link" href="adminUsers">Gestion utilisateurs</a>';
                        echo $link;
                    } else {
                        echo '<a class="nav-link" href="connexion">Se connecter</a>';
                    }
                    ?>
                </li>
                <?php 
                    if (isset($_SESSION["id_role"]) && $_SESSION["id_role"] === 1) {
                       echo '<li class="nav-item p-2">
                                <a class="nav-link" href="adminAnimals">Gestion animaux</a>
                            </li>';
                    } 
                ?>
                <li class="nav-item p-2">
                    <a class="nav-link" href="adopter">Adopter</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="separer">Se séparer</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="etablissements">Les établissements</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="don">Dons</a>
                </li>
                <li class="nav-item p-2">
                    <?php if (!empty($_SESSION)) {
                        echo '<a class="nav-link" href="deconnexion">Se deconnecter</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>