<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'enregistrement</title>
</head>
<body>
	<h1>Formulaire d'enregistrement</h1>
	<form method="post" action="submit.php">
		<label for="nom">Nom:</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="prenom">Prenom:</label>
		<input type="text" id="prenom" name="prenom" required><br><br>

		<label for="adrees">Adrees:</label>
		<input type="text" id="adrees" name="adrees" required><br><br>

		<label for="solde">Solde:</label>
		<input type="text" id="solde" name="solde" required><br><br>
		<input type="submit" value="Enregistrer">
	</form>
</body>
</html>