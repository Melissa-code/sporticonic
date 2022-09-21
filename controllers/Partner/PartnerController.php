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
     * @param string $loginPartner
     * @param string $passwordPartner
     */
    public function loginPartnerValidation(string $loginPartner, string $passwordPartner): void {
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

    /**
     * profil Partner function
     *
     */
    public function profil(): void {

        $partner = $this->partnerManager->getPartnerInformation($_SESSION['profil_partner']['login_partner']);
        $id_partner = $partner['id_partner'];

        /**
         *  TO DO : send an email to the structure 
         */
        //$_SESSION['profil_partner']['role'] = $partner['role_partner'];

        $data_page = [
            "page_description" => "Page de profil du Partenaire",
            "page_title" => "Informations et modules du Partenaire",
            "partner" => $partner,
            "view" => "views/Partner/profilPartnerView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * Logout Partner function
     *
     */
    public function logout() : void {
        Toolbox::addAlertMessage("La déconnexion est effectuée", Toolbox::GREEN_COLOR); 
        unset($_SESSION['profil_partner']);
        header("location:".URL."home");
    }


    /**
     * Error function : get the parent function from the mother class MainController
     *
     * @param string $msg
     */
    public function errorPage(string $msg): void {
        parent::errorPage($msg);
    }

}