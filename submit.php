<!DOCTYPE html>
<html>
<head>
	<title>Récapitulatif de l'enregistrement</title>
</head>
<body>
	<h1>Récapitulatif de l'enregistrement</h1>

	<?php
	// Récupère les données soumises par le formulaire
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adrees = $_POST['adrees'];
	$solde = $_POST['solde'];

	// Affiche les données soumises
	echo "<p>Nom: $nom</p>";
	echo "<p>Prenom: $prenom</p>";
	echo "<p>Adrees: $adrees</p>";
	echo "<p>Solde: $solde</p>";

	// Enregistre les données dans un fichier texte
	$fichier = fopen('enregistrements.txt', 'a');
	fwrite($fichier, "Nom: $nom\n");
	fwrite($fichier, "Prenom: $prenom\n");
	fwrite($fichier, "Adrees: $adrees\n");
	fwrite($fichier, "Solde: $solde\n");
	fclose($fichier);
	?>
</body>
</html>