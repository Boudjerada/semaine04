<?php

/**
 * \file      Pagination.php
 * \author    Boudjerada Nadir
 * \version   1.0
 * \date       28 janvier 2021
 * \brief      Controleur de Pagination du site jarditou
 * \details    Cette classe permet de gérer la pagination du site jarditou, elle charge les méthodes models de la pagination
 */

 defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

  //Pagination
            /**
* \brief Lors de l'accés à la class Pagination (controleur), constructor sans paramètre se référent au constructor de la class parent CI_Controller, charge l'url dans config.php, le modéle du site jarditou contenant notamment les requetes de pagination, charge la librairie pagination
* \param  nul
* \return nul
* \author Boudjerada Nadir
* \date 28/01/2020
*/
public function __construct() {
    parent:: __construct();

    $this->load->helper('url');
    $this->load->model('ProduitsModel');
    $this->load->library("pagination");
}

            /**
* \brief Lors de l'accés à la class Pagination (controleur), cette fonction index est lancé et a pour rôle de transmettre les données de pagination du models à la vue tableau
* \param  nul
* \return nul
* \author Boudjerada Nadir
* \date 28/01/2020
*/
public function index() {
    $aViewHeader = ["title" => "Produits"];
    $config = array();
    $config["base_url"] = site_url() . "/pagination";
    $config["total_rows"] = $this->ProduitsModel->get_counter();
    $config["per_page"] = 5;
    $config["uri_segment"] = 2;

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

    $data["links"] = $this->pagination->create_links();

    $data['pagination'] = $this->ProduitsModel->get_prod($config["per_page"], $page);

    $this->load->view('jarditou/header/headerTableau',$aViewHeader );
         // Appel de la vue avec transmission du tableau  
        if (isset($_SESSION['status']) and $_SESSION['status'] == 1){
            $this->load->view('jarditou/tableauadmin', $data);
        }
        else{
            $this->load->view('jarditou/tableau', $data);
        }
       
        $this->load->view('jarditou/footer/footer');
}
}

?>