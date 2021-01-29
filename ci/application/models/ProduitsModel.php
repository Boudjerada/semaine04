
<?php 

/**
 * \file      ProduitsModel.php
 * \author    Boudjerada Nadir
 * \version   1.0
 * \date       28 janvier 2021
 * \brief      Définit le Modéle du projet jarditou
 * \details    Cette classe contient les requetes d'accés à la base jarditou
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitsModel extends CI_Model
{
    
    //Pagination

        protected $table = 'produits';

            /**
* \brief Lors de l'accés à la class ProduitsModel, constructor sans paramètre se référent au constructor de la class parent CI_Model
* \param  nul
* \return nul
* \author Boudjerada Nadir
* \date 28/01/2020
*/
    
        public function __construct() {
            parent::__construct();
        }
   
        /**
* \brief Fonction qui permet de compter le nombre d'élement d'une table
* \param  nul
* \return $this->db->count_all($this->table) Nombre d'élement de la table produits
* \author Boudjerada Nadir
* \date 28/01/2020
*/
    
        public function get_counter() {
            return $this->db->count_all($this->table);
        }

        /**
* \brief Fonction qui permet de sélectionner les lignes d'une table pour la pagination
* \param  $limit Nombre de ligne à séléctionné
* \param  $start Premiére ligne de la sélection
* \return  $query->result() Ligne de la table sélectionné
* \author Boudjerada Nadir
* \date 28/01/2020
*/
    
        public function get_prod($limit, $start) {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->join('categories', 'pro_cat_id = cat_id');
            $this->db->limit($limit, $start);
            $query = $this->db->get();
            return $query->result();
        }
    
        /**
* \brief Fonction qui permet de sélectionner toutes les lignes de la table produits
* \param  NUL
* \return $aProduits Ensemble de la table produits
* \author Boudjerada Nadir
* \date 28/01/2020
*/
     public function liste() 
     {
         $this->load->database();
         $requete = $this->db->query("SELECT * FROM produits");
         $aProduits = $requete->result();  

         return $aProduits;            
     } // -- liste() 
     
             /**
* \brief Fonction qui permet de sélectionner une ligne de la table produits
* \param  $id Identifiant produit
* \return $Produit Ligne de la table correspondant à l'identifiant
* \author Boudjerada Nadir
* \date 28/01/2020
*/
     public function prod($id)
     {
         $this->load->database();
         $requete = $this->db->query("SELECT * FROM produits join categories on cat_id = pro_cat_id  WHERE pro_id= ?", $id);
         $Produit = $requete->row();

         return $Produit;            
     } // -- prod() 

                  /**
* \brief Fonction qui permet de sélectionner toutes les lignes de la table catégories
* \param  NUL
* \return $aCat Ensemble de la table catégories
* \author Boudjerada Nadir
* \date 28/01/2020
*/

     public function cat()
     {
         $this->load->database();
         $requete = $this->db->query("SELECT * FROM categories");
         $aCat = $requete->result(); 

         return $aCat;            
     } // -- prod() 


     //Pour test mail inscription

                       /**
* \brief Fonction qui permet de vérifier si une ligne de la table users a pour mail le paramétre d'entrée
* \param  $mail Email pour inscription sur le site jarditou
* \return !empty($nbemail) Un booléen, vrai si aucun email de la table users ne correspond au paramétre d'entrée
* \author Boudjerada Nadir
* \date 28/01/2020
*/
    public function test1($mail)
    {
        $this->load->database();
        $requete = $this->db->query("SELECT * FROM users  WHERE us_mail= ?", $mail);
        $nbemail = $requete->row();

        return (!empty($nbemail)); 

    }

                           /**
* \brief Fonction qui permet de vérifier si une ligne de la table users a pour login le paramétre d'entrée
* \param  $log Login pour inscription sur le site jarditou
* \return !empty($nblog) Un booléen, vrai si aucun login de la table users ne correspond au paramétre d'entrée
* \author Boudjerada Nadir
* \date 28/01/2020
*/
     //Pour test login inscriptin
     public function test2($log)
     {
         $this->load->database();
         $requete = $this->db->query("SELECT * FROM users  WHERE us_log= ?", $log);
         $nblog = $requete->row();
 
         return (!empty($nblog)); 
 
     }

     //Connexion

                                /**
* \brief Fonction qui permet de sélectionner un users dans  table users s'il existe
* \param  $log Login pour connexion sur le site jarditou
* \return $us La ligne de la table users dont le login est égal au paramétre d'entrée, vide sinon
* \author Boudjerada Nadir
* \date 28/01/2020
*/
     public function connexion($log)
     {
         $this->load->database();
         $requete = $this->db->query("SELECT * FROM users  WHERE us_log= ?", $log);
         $us = $requete->row();

         return $us;            
     } // -- user() 

                                /**
* \brief Fonction qui permet de sélectionner l'identifiant le plus grand de la table produits
* \param  NUL
* \return $id Identifiant le plus grand 
* \author Boudjerada Nadir
* \date 28/01/2020
*/
     public function maxid(){
        $this->load->database();
        $requete = $this->db->query("SELECT MAX(pro_id) as 'valeur' from Produits");
        $id= $requete->first_row();
        return($id);

     }

} // -- ProduitsModel

?>