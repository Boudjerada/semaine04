<?php

/**
 * \file      Employe.class.php
 * \author    Boudjerada Nadir
 * \version   1.0
 * \date       27 janvier 2021
 * \brief      Définit l'objet Employe
 * \details    Cette classe est le moule de l'objet employé avec différentes méthodes pour là décrire
 */

class Employe{
    
    protected $_nom;
    protected $_prenom;
    protected $_dateEmbauche;
    protected $_fonction;
    protected $_salaire;
    protected $_service;
    protected $_agence;
    protected $_enfants;
    
    public static $nbrEmploye = 0;

    /**
* \brief Lors de la création d'un objet, incrémentation de la variable statique nbEmploye
* \param  nul
* \return nul
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    function __construct() 
   {
    self::$nbrEmploye++;
   }


    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
          
    /**
* \brief affecte une chaine de caractères a l'attribut nom
* \param $sNom Nom employé en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    
public function setNom($sNom){
         $this->_nom = $sNom;
    }
    /**
* \brief affecte une chaine de caractères a l'attribut prenom
* \param $sPrenom Prénom employé en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    
public function setPrenom($sPrenom){
         $this->_prenom = $sPrenom;
    }
      /**
* \brief affecte une date a l'attribut date_Embauche, conversion en datetime
* \param $sD_embauche Date format JJ/MM/AAAA
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/

    public function setDateEmbauche($sD_embauche){
         $this->_dateEmbauche = DateTime::createFromFormat("d/m/Y",$sD_embauche);
    } 

    /**
* \brief affecte une chaine de caractères a l'attributfFonction
* \param $sFonction Fonction employé en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setFonction($sFonction){
         $this->_fonction = $sFonction;
    } 


    /**
* \brief affecte un nombre a l'attribut salaire
* \param $sSalaire Salaire employé en numérique
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setSalaire($sSalaire){
         $this->_salaire = $sSalaire;
    } 

    /**
* \brief affecte une chaine de caractères a l'attribut service
* \param $sService Service employé en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setService($sService){
        $this->_service = $sService;
    }

    /**
* \brief affecte un objet Agence a l'attribut agence
* \param $sAgence Agence employé en objet
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setAgence($sAgence){
        $this->_agence = $sAgence ;
    }

    /**
* \brief affecte un tableau a 3 valeurs a l'attribut enfants
* \param $sEnfants Nom employé en tableau
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setEnfants($sEnfants){
        $this->_enfants = $sEnfants;
    }

    /**
    * \brief renvoie l'attribut nom
    * \param NUL
    * \return $this->_nom Nom de l'employé
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */
    
    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom() {
        return $this->_nom;
    }

        /**
* \brief renvoie l'attribut prenom
* \param NUL
* \return $this->_prenom Prénom de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getPrenom(){
        return $this->_prenom;
    }


        /**
* \brief renvoie l'attribut dateEmbauche
* \param NUL
* \return $this->_dateEmbauche Date d'embauche de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getDateEmbauche(){
        return $this->_dateEmbauche;
    }

        /**
* \brief renvoie l'attribut fonction
* \param NUL
* \return $this->_fonction Fonction de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getFonction(){
        return $this->_fonction;
    }

        /**
* \brief renvoie l'attribut salaire
* \param NUL
* \return $this->_salaire Salaire de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/


    public function getSalaire(){
        return $this->_salaire;
    }

        /**
* \brief renvoie l'attribut service
* \param NUL
* \return $this->_service Service de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getService(){
        return $this->_service;
    }

        /**
* \brief renvoie l'attribut agence
* \param NUL
* \return $this->_agence Agence de l'employé
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getAgence(){
        return $this->_agence;
    }

        /**
* \brief renvoie l'attribut enfants
* \param NUL
* \return $this->_enfants Nombre d'enfants de l'employé par tranche d'âge
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function getEnfants(){
        return $this->_enfants;
    }

/**
* \brief Calcul de l'ancienneté d'un employé
* \param  nul
* \return $interval->format('%Y')  Année d'anienneté
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    //Méthode pour savoir combien d'année un salarié est dans l'entreprise

    public function getAnciennete(){
        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
        $today = new DateTime();
        $embauche = $this->getDateEmbauche();
        $interval =$today->diff($embauche);
        return($interval->format('%Y'));
    }
/**
* \brief Calcul Prime d'un employé
* \param nul 
* \return $prime  Prime annuel en euros
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function calculerPrime(){
       $prime = ((5 * $this->_salaire)/100) + ($this->getAnciennete() *  ((2 * $this->_salaire)/100));
       $mois = intval(date('m'));
       $jour = intval(date('d'));
       if ($mois == 11 and $jour == 30){
          echo "L'ordre de transfert de vôtre prime de ".$prime." Euros a été envoyé à vôtre banque";
        }
       return $prime;
    }


    /*public static function methodeStatique(){
        self::$nbrEmploye++;
    }*/

/**
* \brief Chéques Vacances des employés
* \param nul 
* \return $bool oui/non chéques vacances 
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function isChequeVacance(){
        if ($this->getAnciennete() >= 1){
            return True;
        }
        else {
            return false;
        }
    }

}

require_once "Directeur.class.php";

?>