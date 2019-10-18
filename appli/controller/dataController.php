<?php
session_start();
require_once('lib/bd/bd.class.php');

    class pathoController
    {
        // récupèrer les types de pathologies
        public static function getAllTypePatho()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `type`,`nom` FROM `typePatho`");
            //Avoir la table SQL typePatho
            return $resultat;
        }

        // récupérer la liste des pathologies en fonction des types sélectionner
        public static function getPathoEnFonctionType($arrayType)
        {
            $constructionString="SELECT `desc` FROM `patho`"; //cas ou arrayType vaut 0
            for($i=0;$i<count($arrayType);$i++)
            {
                if($i==0){//cas pour le premier aergument
                    $constructionString = $constructionString.' where type LIKE "%'.$arrayType[$i].'%"';
                }else{ //cas pour les autres arguments
                    $constructionString = $constructionString.' OR type LIKE "%'.$arrayType[$i].'%"';
                }
            }
            $maBD = new BD();
            $resultat = $maBD->requete($constructionString);
            return $resultat;
        }
    }

    class meridienController
    {
        // recupèrer tout les méridiens
        public static function getAllMeridiens()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `nom`,`code` FROM meridien");
            return $resultat;
        }
    }

    class symptomeController
    {
        //recupèrer les symptones en fonction des patho
        public static function getSymptome($pathologie)
        {

            $maBD = new BD();
            $resultat = $maBD->requete('SELECT symptome.desc FROM symptPatho
            inner join symptome on symptPatho.idS = symptome.idS
            inner join patho on symptPatho.idP = patho.idP
            WHERE patho.desc = "'.$pathologie.'"');
            //$pathologie doit etre un string ici (et non un array, faire un fetch sinon)
            return $resultat;
        }

        public static function searchKeywords()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT patho.desc FROM keywords
                    inner join keySympt on keySympt.idK = keywords.idK
                    inner join symptome on symptome.idS = keySympt.idS
                    inner join symptPatho on symptPatho.idS = symptome.ids
                    inner join patho on patho.idP = symptPatho.idP
                    WHERE keywords.name='abdomen' ");
            return $resultat;
        }
    }

    class logController
    {
        public static function getLogin()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `prenom`, `nom`, `password`, `pseudo`  FROM utilisateur");
            return $resultat;
        }

        public static function register($pseudo,$password)
        {
            try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'tp', 'tp',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //echo '<p> Connexion avec la BDD reussi </p>';
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            if(!empty($pseudo) && !empty($password)){
            $sql = "INSERT INTO utilisateur (`pseudo`,`password`) VALUES (:pseudo,:password)";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':pseudo', $pseudo,PDO::PARAM_STR, 255);
            $secure_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);
            $expire = time() + 365*24*3600;
            setcookie('pseudo', $pseudo, $expire);
            if( $stmt->execute() ):
                $message = 'Nouvel utilisateur créee';

            else:
                $message = 'Erreur sur lutilisateur';
            endif;

            return $message;
            }
          }
    }
?>
