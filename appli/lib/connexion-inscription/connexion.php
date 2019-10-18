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
		<?php
		if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
			{
				echo '<form method="post" action="connexion.php">
				<fieldset>
				<legend>Connexion</legend>
				<p>
				<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
				<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
				</p>

				<p><input type="submit" value="Se Connecter" /></p></form>
				<label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />
				</div>
				</fieldset>';

				 if (isset($_POST['souvenir']))
				{
					$expire = time() + 365*24*3600;
					setcookie('pseudo', $_SESSION['pseudo'], $expire);
				}
			}
			//On reprend la suite du code
			else {
				$message='';
    			if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
   					{
        				$message = 'Veuillez remplir tout les champs </p>
						<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    				}
    				else //On check le mot de passe
    				{
       					 $query=$bdd->prepare('SELECT password, pseudo
        				FROM utilisateur WHERE `pseudo` = :pseudo');
        				$query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        				$query->execute();
       					$data=$query->fetch();
								$password_verify = password_verify($_POST['password'] , $data['password']);

				if ($password_verify == true ) // Acces OK !
					{
					    $_SESSION['pseudo'] = $data['pseudo'];
					    $message = '<p>Bienvenue '.$data['pseudo'].',
							vous êtes maintenant connecté!</p>
							<p>Cliquez <a href="./index.php">ici</a>
							pour revenir à la page d accueil</p>';
					}
				else // Acces pas OK !
					{
	   					 $message = '<p> Le mot de passe ou le pseudo
           				 est incorrecte.</p><p>Cliquez <a href="./connexion.php">ici</a>
	   					 pour revenir à la page précédente
	    				<br /><br />Cliquez <a href="./index.php">ici</a>
	    				pour revenir à la page d accueil</p>';
					}
    			$query->CloseCursor();
    			}
    		echo $message.'</div></body></html>';



}
	?>

	<div id="title"><h1>Se connecter</h1></div>
				<fieldset>
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="pw" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
				<button>Se Connecter </button>
				</fieldset>
<!--
	<div id="title"><h1>S'inscrire</h1></div>
			<fieldset>
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="pw" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
				Nom :<br>
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

			</fieldset>
-->
	</body>

	<footer>
		<a> site sur l'acupuncture </a>
		<a> 5A IRC </a>
		<a> CPE </a>
		<a> 2019 </a>
	</footer>
</html>
