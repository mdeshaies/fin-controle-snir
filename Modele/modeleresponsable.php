<?php 

require_once '../../Modele/Modele.php';

class ModeleResponsable extends Modele {

public function ObtenirIDResponsable() {
        try {
            
            $requete = $this->_bdd->prepare("select  id_utilisateur from Utilisateurs, Responsables where id_utilisateur.Utilisateurs = id_utilisateur.Responsables ;");
            
            
            
            
            $tabCookie = array("Mail" => filter_input(INPUT_POST, "mail"),
            "Telephone" => filter_input(INPUT_POST, "telephone"));
            $tabCookieSerialized = serialize($tabCookie);
            setcookie("monCookie", $tabCookieSerialized, 0, "/");
            
            if (!isset($_COOKIE['monCookie'])) {
            $tabCookie = unserialize($_COOKIE['monCookie']);
            $mail = $tabCookie['Mail'];
            $telephone = $tabCookie['Telephone'];
        
            } else {
                echo 
                "<input type = 'text' id = 'mail' name = 'mail' class = 'form-control' required = 'required' value=$mail/>";
                "<input type = 'text' id = 'telephone' name = 'telephone' class = 'form-control' required = 'required' value=$telephone/>";
                
                
            }
            
        } catch (PDOException $exc) {
            die("<br/> Probleme ObtenirIDUtilisateur :" . $exc->getMessage());
        }
    }
}
    


