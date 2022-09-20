<?php
require_once("controllers/MainController.php"); 
require_once("models/Partner/PartnerManager.php"); 


class PartnerController extends MainController {

    private PartnerManager $partnerManager; 


    public function __construct() {
        $this->partnerManager = new PartnerManager(); 
    }


    /**
     * Partner login (page) function
     *
     */
    public function loginPartner() :void {
        $data_page = [
            "page_description" => "Page de connexion du Partenaire franchisé",
            "page_title" => "Connexion du Partenaire franchisé",
            "view" => "views/Partner/loginPartnerView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * Partner login (validation) function
     *
     * @param [type] $loginPartner
     * @param [type] $passwordPartner
     */
    public function loginPartnerValidation($loginPartner, $passwordPartner): void {
        if($this->partnerManager->isCombinationValid($loginPartner, $passwordPartner)) {
            if($this->partnerManager->isAccountActivated($loginPartner)) {
                Toolbox::addAlertMessage("Ravi de vous retrouver", Toolbox::GREEN_COLOR); 
                    $_SESSION['profil_partner'] = [
                        'login_partner' => $loginPartner
                    ];
                    header("location:".URL."accountPartner/profil");
                    exit();
            } else {
                Toolbox::addAlertMessage("Le compte du franchisé n'a pas été activé", Toolbox::RED_COLOR); 
                // TO DO : send a second time a validation email to the partner user
                header("location:".URL."loginPartner");
                exit();
            }
        } else {
            Toolbox::addAlertMessage("Combinaison Email-Mot de passe non valide", Toolbox::RED_COLOR);
            header("location:".URL."loginPartner");
            exit();
        }
    }


    public function getAll() {
        $structures = $this->structureManager->getAllDb(); 
        //print_r($structures);
    }


    /**
     * error function : get the parent function from the mother class MainController
     *
     * @param [type] $msg
     */
    public function errorPage($msg): void {
        parent::errorPage($msg);
    }

}