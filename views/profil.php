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
		<h1>Votre profil</h1>
		<div class="container col-lg-8 col-md-8">
			<form name="profil" id="user_profil" method="post" action="profil">
				<div class="formulaire">
					<fieldset>
						<div id="message"> <?= $message = !empty($change) ? $change : $error; ?> </div>
						<legend>Profil adoptant</legend>
						<label for="civilite">Civilité</label>
						<select name="civilite" id="civilite">
							<option value="monsieur">M</option>
							<option value="madame">Mme</option>
						</select>

						<label for="lastname">Nom</label>
						<input type="text" id="lastname" name="lastname" value=<?= $_SESSION["lastname"] ?> >

						<label for="firstname">Prénom</label>
						<input type="text" id="firstname" name="firstname" value=<?= $_SESSION["firstname"] ?> >

						<label for="mail">Email</label>
						<input type="mail" id="mail" name="mail" value=<?= $_SESSION["mail"] ?> >
 
						<label for="phone">Téléphone</label>
						<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" value='<?= $user["phone"] = $user["phone"] ?? ""; ?>' >

						<label for="adress">Numéro et nom de voie</label>
						<input type="text" id="adress" name="adress" value='<?= $user["adress"] = $user["adress"] ?? ""; ?>' >

						<label for="zip_code">Code Postal</label>
						<input type="text" id="zip_code" name="zip_code" pattern="[0-9]{5}" value=<?= $user["zip_code"] = $user["zip_code"] ?? ""; ?> >

						<label for="city">Ville</label>
						<input type="text" id="city" name="city" value='<?= $user["city"] = $user["city"] ?? ""; ?>' >

						<label for="password">Confirmez les changements avec votre mot de passe</label>
						<input type="password" id="password" name="password" required>

						<div class="col-lg-4 col-md-5" id="dsubmit">
							<input type="submit" value="Mettre à jour" name="update" id="update">
							<input type="submit" value="Supprimer mon compte" name="deleteAccount" id="delete">
						</div>
					</fieldset>
				</div>
			</form>
		</div>


	</main>

	<?php include "templates/templateFooter.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/profil.js"></script>
</body>

</html>