<?php
/**
 * \file      Agence.class.php
 * \author    Boudjerada Nadir
 * \version   1.0
 * \date       27 janvier 2021
 * \brief      Définit l'objet Agence 
 * \details    Cette classe est le moule de l'objet Agence avec différentes méthodes pour là décrire
 */
class Agence{
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;


    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 

       /**
* \brief affecte une chaine de caractères a l'attribut nom
* \param $sNom Nom agence en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/

    public function setNom($sNom){
        $this->_nom = $sNom;
    }

       /**
* \brief affecte une chaine de caractères a l'attribut adresse
* \param $sAdresse Adresse agence en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setAdresse($sAdresse){
        $this->_adresse = $sAdresse;
    }

       /**
* \brief affecte un nombre a l'attribut codePostal
* \param $sCodePostal Code postal agence entier a 5 chiffres
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setCodePostal($sCodePostal){
        $this->_codePostal = $sCodePostal;
    } 

       /**
* \brief affecte une chaine de caractères a l'attribut ville
* \param $sville Ville agence en chaines de caractères
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setVille($sVille){
        $this->_ville = $sVille;
    }

          /**
* \brief affecte un booléen a l'attribut modeRestauration
* \param $sModeRestauration Mode de restauration agence en booléen
* \return NUL
* \author Boudjerada Nadir
* \date 27/01/2020
*/
    public function setModeRestauration($sModeRestauration){
        $this->_modeRestauration = $sModeRestauration;
    }

 
    
    // Accesseur : renvoie la valeur d'un attribut  

       /**
    * \brief renvoie l'attribut nom
    * \param NUL
    * \return $this->_nom Nom de l'agence
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */
    public function getNom(){
        return $this->_nom ;
    }

         /**
    * \brief renvoie l'attribut adresse
    * \param NUL
    * \return $this->_adresse Adresse de l'agence
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */


    public function getAdresse(){
        return $this->_adresse;
    }

         /**
    * \brief renvoie l'attribut codePostal
    * \param NUL
    * \return $this->_codePostal Code postal de l'agence
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */


    public function getCodePostal(){
        return $this->_codePostal;
    }


         /**
    * \brief renvoie l'attribut ville
    * \param NUL
    * \return $this->_ville Ville de l'agence
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */

    public function getVille(){
        return $this->_ville;
    }

         /**
    * \brief renvoie l'attribut modeRestauration
    * \param NUL
    * \return $this->_modeRestauration Mode de restauration de l'agence
    * \author Boudjerada Nadir
    * \date 27/01/2020
    */

    public function getModeRestauration(){
        return $this->_modeRestauration;
    }

}


?>