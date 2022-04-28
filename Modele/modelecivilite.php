<?php 

require_once '../../Modele/Modele.php';

class ModeleCivilite extends Modele {

function ObtenirIDUtilisateur() {
        try {
            
            $requete = $this->_bdd->prepare("select  id_utilisateur from Utilisateurs, Etudiants where id_utilisateur.Utilisateurs = id_utilisateur.Etudiants ;");
            
            
            
            
            $tabCookie = array("Nom" => filter_input(INPUT_POST, "nom"),
            "Prenom" => filter_input(INPUT_POST, "prenom"));
            $tabCookieSerialized = serialize($tabCookie);
            setcookie("monCookie", $tabCookieSerialized, 0, "/");
            
            if (!isset($_COOKIE['monCookie'])) {
            $tabCookie = unserialize($_COOKIE['monCookie']);
            $nom = $tabCookie['Nom'];
            $prenom = $tabCookie['Prenom'];
        
            } else {
                echo 
                "<input type = 'text' id = 'nom' name = 'nom' class = 'form-control' required = 'required' value=$nom/>";
                "<input type = 'text' id = 'prenom' name = 'prenom' class = 'form-control' required = 'required' value=$prenom/>";
                "<input type = 'button' class = 'btn btn-primary'  value = 'Modifier' id = 'enregistrer'>";
                
            }
            header('Content-Type: application/json');
            return json_encode($);
            
        } catch (PDOException $exc) {
            die("<br/> Probleme ObtenirIDUtilisateur :" . $exc->getMessage());
        }
    }
}

