<?php
require_once("controllers/MainController.php"); 

class UserController extends MainController {


    /**
     * home function 
     *
     */
    public function home(): void {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Sport Iconic",
            "view" => "views/User/homeView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * login Structure function
     *
     */
    public function loginStructure() :void {
        $data_page = [
            "page_description" => "Page de connexion de la Structure",
            "page_title" => "Connexion de la Structure",
            "view" => "views/User/loginStructureView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * login Partner function
     *
     */
    public function loginPartner() :void {
        $data_page = [
            "page_description" => "Page de connexion du Partenaire franchisé",
            "page_title" => "Connexion du Partenaire",
            "view" => "views/User/loginPartnerView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * login Brand function
     *
     */
    public function loginBrand() :void {
        $data_page = [
            "page_description" => "Page de connexion de l'équipe de la marque Sport Iconic",
            "page_title" => "Connexion de l'équipe de la marque",
            "view" => "views/User/loginBrandView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    /**
     * error function
     * get the parent function from the mother class MainController
     *
     * @param [type] $msg
     */
    public function errorPage($msg): void {
        parent::errorPage($msg);
    }

}