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
	<link rel="stylesheet" href="assets/css/profil.css" />
	<title>Les Compagnons du Bonheur</title>
</head>

<body>
	<?php include "templates/templateHeader.php"; ?>

	<main>
		<div class="container col-lg-8 col-md-8">
			<form name="profil" id="user_profil" method="post" action="">
				<div class="formulaire">
					<fieldset>
						<legend>Profil adoptant</legend>
						<label for="civilite">Civilité</label>
						<select name="civilite" id="civilite">
							<option value="monsieur">M</option>
							<option value="madame">Mme</option>
						</select>

						<label for="nom">Nom</label>
						<input type="text" id="nom" name="nom" required>

						<label for="prenom">Prénom</label>
						<input type="text" id="prenom" name="prenom" required>

						<label for="mail">Email</label>
						<input type="email" id="mail" name="mail" required>

						<label for="telephone">Téléphone</label>
						<input type="tel" id="telephone" name="telephone" required>

						<label for="numero_voie">Numéro et nom de voie</label>
						<input type="text" id="numero_voie" name="numero_voie" required>

						<label for="postal">Code Postal</label>
						<input type="text" id="postal" name="postal" required>

						<label for="ville">Ville</label>
						<input type="text" id="ville" name="ville" required>
					</fieldset>
				</div>

				<div class="formulaire">
					<fieldset>
						<legend>Animal déjà possédé</legend>
						<label for="aucun_animal">Aucun animal</label>
						<input type="checkbox" id="aucun_animal" name="animal_possede" class="checkbox">

						<label for="chienPossede">Un chien ou plus</label>
						<input type="checkbox" id="chienPossede" name="animal_possede" class="checkbox">

						<label for="chatPossede">Un chat ou plus</label>
						<input type="checkbox" id="chatPossede" name="animal_possede" class="checkbox">
					</fieldset>
				</div>

				<div class="formulaire">
					<fieldset>
						<legend>Vos préférences</legend>
						<h5>Quel animal souhaitez-vous adopter ?</h5>

						<label for="typeChien">Chien</label>
						<input type="radio" id="typeChien" name="type_animal" class="radio">

						<label for="typeChat">Chat</label>
						<input type="radio" id="typeChat" name="type_animal" class="radio">

						<h5>Âge maximum de l'animal?</h5>

						<label for="peuImporte">Peu importe</label>
						<input type="radio" id="peuImporte" name="age_animal" class="radio">

						<label for="junior">Junior</label>
						<input type="radio" id="junior" name="age_animal" class="radio">

						<label for="adulte">Adulte</label>
						<input type="radio" id="adulte" name="age_animal" class="radio">

						<label for="senior">Senior</label>
						<input type="radio" id="senior" name="age_animal" class="radio">


						<label for="pourquoi_adopter">Pourquoi souhaitez-vous adopter ?</label>
						<textarea id="pourquoi_adopter" name="pourquoi_adopter" rows="5" cols="33"></textarea>

						<label for="password">Mot de passe</label>
						<input type="password" id="password" name="password" required>

						<div id="dsubmit">
							<input type="submit" value="Mettre à jour">
							<input type="submit" value="Supprimer mon compte">
						</div>
					</fieldset>
				</div>
			</form>
		</div>


	</main>

	<?php include "templates/templateFooter.php"; ?>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/profil.js"></script>
</body>

</html>