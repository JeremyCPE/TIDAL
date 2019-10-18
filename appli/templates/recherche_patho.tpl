{include file='header.tpl'}

<body>

	<div id="content">
		<div id="recap">
			{if isset($smarty.cookies.pseudo)}
			<p>Bienvenue {$smarty.cookies.pseudo} !</p>
			<form action="index.php?action=logout" method="post">
				<input type="submit" name="logout" value="Déconnexion"/>
			</form>
			{else}
			<p>Veuillez vous connecter ou vous inscrire pour acceder à toutes les fonctionnaliées</p>
			<form action="index.php?action=register" method="post">
				<input type="submit" name="register" value="Connexion"/>
			</form>
			{/if}
	</div>

	<h1>Pathologies en acupuncture</h1>
		<form action="" method="post">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>

				{include file='meridien.tpl'}

				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
			</fieldset>

			{include file='pathologie.tpl'}

			<input type="submit" value="rechercher" onclick="">
		</form>

{include file='footer.tpl'}

</body>
</html>
