<?php

require_once 'controller/dataController.php' ;
/**
	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/

class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"accueil" => "templates/accueil.tpl",
		"recherche_patho" =>"templates/recherche_patho.tpl",
		"recherche_symptome" => "templates/recherche_symptome.tpl",
		"recherche_symptome_bdd" => "templates/recherche_symptome.tpl",
		"pathologie_prcp" => "templates/pathologie_prcp.tpl",
		"meridien" => "templates/meridien.tpl",
		"keywords"	=> "templates/symptome.tpl",
		"login" => "templates/inscription.tpl",
		"logout" => "templates/deconnexion.tpl",
		"register" => "templates/inscription.tpl"
	);

	function __construct($smarty,$action ){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}

	function getTpl(){
		$ret = "templates/defaut.tpl";

		if($this->action!=""){
			$ret = Router::mapTpl[$this->action];
			$this->todo();
		}
		if($this-> action=="recherche_patho")
		{
			//affiche les possibilités
			$this->affichePatho();
			$this->getMeridien();
		}
		if($this-> action=="recherche_symptome")
		{
			$key = "";
			$keyword = "";
			if(isset ($_POST['keywords'])) $keyword=$_POST['keywords'];
			$this->smarty->assign("arraySymptome",symptomeController::searchKeywords($keyword));
			$this->smarty->assign("arrayKeys",symptomeController::searchKey($key));
		}
		if($this-> action=="accueil")
		{
			$this->affichePatho();
			$this->getMeridien();
		}
		if($this-> action=="keywords")
		{
			$this->searchKeywords();
		}
		if($this-> action=="login")
		{
			$this->getLogin();
		}
		if($this-> action=="register")
		{
			$this->register();
		}
		if($this-> action=="logout")
		{
			$this->logout();
		}
		if($this-> action=="test")
		{
			$this->searchKeywords();
		}
		return $ret;
	}

	function todo()
	{

		$this->smarty->assign("userFirstName",get_current_user());
		$this->smarty->assign("patho","test pathologies");

	}
	function affichePatho()
	{
		$this->smarty->assign("arrayPatho",pathoController::getAllTypePatho());
		//$this->smarty->assign("arraySympFctPatho","Test");
	}

	function getTypePatho($lstPatho)
	{
		echo "rentre dans typePatho";
		//$lstPatho = array("me","mi");
		$this->smarty->assign("arrayTypePatho",pathoController::getPathoEnFonctionType($lstPatho));
	}

	function getMeridien()
	{
		$this->smarty->assign("arrayMeridien",meridienController::getAllMeridiens());
	}

	function getSymptome($symp)
	{
		$this->smarty->assign("arraySymptome",symptomeController::getSymptome($symp));
	}

	function searchKeywords($key)
	{
		//if(isset ($_POST['keyword']))	$keywords =	$_POST['keyword'];
		$this->smarty->assign("symptome",$key);
		$symp = symptomeController::searchKeywords($key);
		$this->getSymptome($symp);
	}
	function getLogin()
	{
		$pseudoLog ="";
		$passwordLog ="";
		if(isset ($_POST['pseudoLog']))	$pseudoLog =	$_POST['pseudoLog'];
		if(isset ($_POST['passwordLog']))	$passwordLog =	$_POST['passwordLog'];
		$this->smarty->assign("arrayLogin",logController::getLogin($pseudoLog,$passwordLog));
	}

	function register()
	{
		$pseudo ="";
		$password ="";
		$name ="";
		$surname ="";
		$mail ="";
		$birthdate ="";
		$address ="";
		$tel ="";
		if(isset ($_POST['pseudo']))	$pseudo =	$_POST['pseudo'];
		if(isset ($_POST['password']))	$password =	$_POST['password'];
		if(isset ($_POST['name']))	$name =	$_POST['name'];
		if(isset ($_POST['surname']))	$surname =	$_POST['surname'];
		if(isset ($_POST['address']))	$address =	$_POST['address'];

		$this->smarty->assign("stateRegister",logController::register($pseudo,$password,$address,$surname,$name));
	}

	function logout()
	{
	 setcookie('pseudo', NULL, -1);
	}

	function DisplayApi($action)
	{
		$result = "";
		if ($action == "GetAllPatho")
		{
			$result = pathoController::GetAllPatho();
		}

		return json_encode($result);
	}
}

?>
