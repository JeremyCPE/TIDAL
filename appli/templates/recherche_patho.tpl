{include file='header.tpl'}

<body>
{include file='nav.tpl'}
	<h1>Pathologies en acupuncture</h1>

		<form action="" method="post">

			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>

				{include file='meridien.tpl'}

				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
			</fieldset>

			{include file='pathologie.tpl'}

			<input type="submit" value="Rechercher" onclick="rechercher()">
		</form>

</body>
{include file='footer.tpl'}
</html>
