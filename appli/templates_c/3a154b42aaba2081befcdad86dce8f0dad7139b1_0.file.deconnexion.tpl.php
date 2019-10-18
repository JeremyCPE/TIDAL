<?php
/* Smarty version 3.1.33, created on 2019-10-08 20:10:27
  from 'C:\wamp64\www\appli\templates\deconnexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ced33eb1924_54124607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a154b42aaba2081befcdad86dce8f0dad7139b1' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\deconnexion.tpl',
      1 => 1570177896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ced33eb1924_54124607 (Smarty_Internal_Template $_smarty_tpl) {
?><!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/pathos.js" charset="utf-8"><?php echo '</script'; ?>
>
	</head>
	<body>
	<div id="content">
		<p>Deconnecté</p>
		<p> Cliquez <a href="http://localhost/appli/?action=test"> ici </a> pour revenir à la page d'accueil </p>
		<?php echo '<script'; ?>
>
		setcookie('pseudo', NULL, -1);
		<?php echo '</script'; ?>
>
	</div>
</body>
</html>
<?php }
}
