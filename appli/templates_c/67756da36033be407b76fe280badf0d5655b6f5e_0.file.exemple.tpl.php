<?php
/* Smarty version 3.1.33, created on 2019-10-04 07:48:04
  from 'C:\wamp64\www\appli\templates\exemple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96f934db4a89_85869106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67756da36033be407b76fe280badf0d5655b6f5e' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\exemple.tpl',
      1 => 1570175234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:meridien.tpl' => 1,
    'file:pathologie.tpl' => 1,
    'file:symptome.tpl' => 1,
  ),
),false)) {
function content_5d96f934db4a89_85869106 (Smarty_Internal_Template $_smarty_tpl) {
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
		<aside>
			<div id="menu">
				<ul>
					<li><a href="http://acupuncture.mascret.fr/index.php?action=accueil">Accueil</a></li>
					<li><a href="http://acupuncture.mascret.fr/index.php?action=truc">Truc</a></li>
					<li><a href="http://acupuncture.mascret.fr/index.php?action=pathos">pathologies</a></li>
				</ul>
			</div>
		</aside>
		
		<div id="recap">
			<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['userFirstName']->value;?>
!</p>
			<form action="index.php?action=logout" method="post">
				<input type="submit" name="logout" value="Déconnexion"/>
			</form>
		</div>
		
		<h1>Pathologies en acupuncture</h1>
		<form action="" method="post">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>
				
				<?php $_smarty_tpl->_subTemplateRender('file:meridien.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
				</fieldset>
				
				<?php $_smarty_tpl->_subTemplateRender('file:pathologie.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<fieldset>
					<legend>Que souhaitez-vous?</legend>
					
					<div class="actionPatho">
						<p>Mode consultation</p>
						<ul>
							<li><input type="submit" name="a_filtrer" value="Afficher les pathologies sélectionnées"/></li>
							<li><input type="submit" name="a_tout" value="Tout afficher"/></li>
						</ul>
					</div>
					<div class="actionPatho">
						<p class="dev">Mode recherche</p>
						<p class="dev">En cours de développement</p>
					</div>
				</fieldset>

				<?php $_smarty_tpl->_subTemplateRender('file:symptome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<h3>Poumon</h3><h4>méridien du poumon externe</h4><ul><li>Battement des ailes du nez</li><li>Dessèchement des phanères</li><li>Douleur lancinante au creux sus-claviculaire</li><li>Pouls superficiel</li><li>Symptômes thoraco-pulmonaires (toux continuelle, dyspnée, gonflement thoracique)</li><li>Transpiration avec pollakiurie et diminution de l'appétit</li><li>Vue floue dans les cas graves</li></ul><h4>zang poumon plein</h4><ul><li>Épaule et dos douloureux</li><li>Nausée</li><li>Plénitude douloureuse de la poitrine (emphysème) et des côtes entraînant dyspnée et toux avec mucosités purulentes</li></ul><h4>zang poumon vide</h4><ul><li>Alopécie</li><li>Asthénie et amaigrissement</li><li>Fièvre et transpiration brutale et intermittente</li><li>Gorge et peau sèches</li><li>Respiration faible</li><li>Toux avec envie d'uriner</li><li>Visage pâle et joues rouges</li><li>Voix faible</li></ul><h4>zang poumon chaud</h4><ul><li>Constipation, selles dures</li><li>Douleur thoracique aiguë comme un coup de poignard</li><li>Dysurie et hématurie</li><li>Épistaxis</li><li>Gorge irritée</li><li>Soif</li><li>Toux avec hémoptysie</li><li>Visage fiévreux</li></ul><h4>zang poumon froid</h4><ul><li>Absence de soif</li><li>Douleur thoracique sourde, dyspnée et toux</li></ul>
			</form>
			<div id="footer">
				<p>Licence CC by-nc-sa - Bruno Mascret</p>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
