
				<nav>
				<ul>
					<li><a href="http://localhost/appli/?action=accueil">Accueil</a></li>
					<li><a href="http://localhost/appli/?action=recherche_patho">Recherche par pathologie</a></li>
					{if isset($smarty.cookies.pseudo)}
					<li><a href="http://localhost/appli/?action=recherche_symptome">Recherche par symptome</a></li> 
					{/if}
					<li><a href="http://localhost/appli/?action=pathologie_prcp">Pathologie principales</a></li>
					{if isset($smarty.cookies.pseudo)}
					<li style="float:right"><a href="http://localhost/appli/?action=logout">Déconnexion</a></li>
					{else}
					<li style="float:right"><a href="http://localhost/appli/?action=register">Connexion/Inscription</a></li>
					{/if}
					</ul>
				</nav>

	