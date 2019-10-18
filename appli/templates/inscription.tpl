

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inscription</title>
</head>

	<header>
		<h1>Inscription</h1>
	</header>

	<body>
	<div id="title"><h2>S'inscrire</h2></div>
</form>
{if isset($smarty.post.pseudo) && isset($smarty.post.password)}
<p> Inscription terminée {$smarty.post.pseudo} ! </p>
<p> Cliquez <a href="http://localhost/appli/?action=accueil"> ici </a> pour revenir à la page d'accueil </p>
{else}

{literal}
			<form action="index.php?action=register" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
				Confirmer<br>
				<input type="submit" name="Confirmer">
			</form>
{/literal}
{/if}
<div id="title"><h2>Se Connecter</h2></div>
{include file='connexion.tpl'}
		</body>
</html>
