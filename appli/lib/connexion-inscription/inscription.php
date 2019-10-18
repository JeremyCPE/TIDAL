<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	//echo '<p> Connexion avec la BDD reussi </p>';

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$message = '';
if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
	$message = '';
	//if($_POST['password']==$_POST['password_confirm'])
	//{
	$sql = "INSERT INTO utilisateur (pseudo,password) VALUES (:pseudo,:password)";
	$stmt = $bdd->prepare($sql);
	$stmt->bindParam(':pseudo', $_POST['pseudo'],PDO::PARAM_STR, 255);

	$secure_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);
	if( $stmt->execute() ):
		$message = 'Nouvel utilisateur créee';
	else:
		$message = 'Erreur sur lutilisateur';
	endif;

}
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>Inscription</title>
	</head>

	<header>
		<h1>Titre</h1>
	</header>

	<menu>
		<nav>
			<a href="accueil.php" id="active">Accueil</a>
			<a href="principale.php" id="active">Pathologies principales</a>
			<a href="filtre.php" id="active">Recherche par critères</a>
			<a href="connexion.php" id="active">Connexion</a>
		</nav>
	</menu>

	<body>
	<div id="title"><h1>S'inscrire</h1></div>

		<?php
			//echo "Message : ";
			echo "<p>".$message."</p>";
		?>

			<form action="inscription.php" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
<!--
				<input title="Nom" type="text" name="name"  placeholder="Nom" required><br>
				Prenom<br>
				<input title="Prenom" type="text" name="name"  placeholder="Prenom" required><br>
				Adresse email :<br>
				<input title ="mail" type="email" name="mail"  placeholder="blblabla@mail.com" required><br>
				N° téléphone :<br>
				<input title="Telephone" type="tel" name="tel" pattern="[0-9]{10}" placeholder="0123456789" required><br>
				Adresse<br>
				<input title="Adresse" type="text" name="address" required><br>
				Date de naissance<br>
				<input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="date" value="" /><br>
			-->
				<input type="submit" name="Confirmer">

			</form>
		</body>
		</html>
