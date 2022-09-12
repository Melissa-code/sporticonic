<?php
require_once("controllers/MainController.php"); 
require_once("models/Partner/PartnerManager.php"); 


class PartnerController extends MainController {

    private PartnerManager $partnerManager; 


    public function __construct() {

        $this->partnerManager = new PartnerManager(); 
    }






    public function getAll() {
        $structures = $this->structureManager->getAllDb(); 
        //print_r($structures);
    }

  

}