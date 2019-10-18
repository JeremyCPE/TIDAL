<?php
/* Smarty version 3.1.33, created on 2019-10-11 15:42:33
  from 'C:\wamp64\www\appli\templates\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da0a2e90786c5_56444401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197df926c0a302734a84f329de3bd721529c9884' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\inscription.tpl',
      1 => 1570808549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da0a2e90786c5_56444401 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inscription</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/pathos.js" charset="utf-8"><?php echo '</script'; ?>
>
</head>

	<header>
		<h1>Inscription</h1>
	</header>

	<body>
	<div id="title"><h1>S'inscrire</h1></div>

	
			<form action="index.php?action=register" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
				<input type="submit" name="Confirmer">
				<label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />
<!--
				Nom:<br>
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


			</form>
			<?php if (isset($_POST['pseudo']) && isset($_POST['password'])) {?>

			<?php ob_start();
echo $_POST['pseudo'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('pseudo', $_prefixVariable1 ,false ,32);?>
			<?php ob_start();
echo $_POST['password'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('password', $_prefixVariable2 ,false ,32);?>
			<?php ob_start();
echo $_COOKIE['pseudo'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_POST['pseudo'];
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope($_prefixVariable3, $_prefixVariable4 ,false ,32);?>
			<p> Inscription terminée <?php echo $_POST['pseudo'];?>
 !</p>
			<p> Cliquez <a href="http://localhost/appli/"> ici </a> pour revenir à la page d'accueil </p>

			<?php }?>
			<?php echo '<script'; ?>
>
			if (isset($_POST['souvenir']))
		 {
			 $expire = time() + 365*24*3600;
			 setcookie('pseudo', $_SESSION['pseudo'], $expire);
		 }
			<?php echo '</script'; ?>
>
		</body>
</html>
<?php }
}
