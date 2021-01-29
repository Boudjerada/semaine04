<?php
/**
 * \file      Directeur.class.php
 * \author    Boudjerada Nadir
 * \version   1.0
 * \date       27 janvier 2021
 * \brief      Définit l'objet Directeur
 * \details    Cette classe est le moule de l'objet Directeur avec différentes méthodes pour là décrire. Certaines issues de la classe employé et une propre a elle même 
 */
class Directeur extends Employe{

  /**
* \brief Calcul Prime d'un directeur
* \param nul 
* \return $prime  Prime annuel en euros
* \author Boudjerada Nadir
* \date 27/01/2020
*/

    public function calculerPrime(){
        $prime = ((7 * $this->_salaire)/100) + ($this->getAnciennete() *  ((3 * $this->_salaire)/100));
        $mois = intval(date('m'));
        $jour = intval(date('d'));
        if ($mois == 11 and $jour == 30){
           echo "L'ordre de transfert de vôtre prime de ".$prime." Euros a été envoyé à vôtre banque";
         }
        return $prime;
     }

}


?>