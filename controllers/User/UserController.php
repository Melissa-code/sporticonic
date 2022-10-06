<?php
require_once("controllers/MainController.php"); 

class UserController extends MainController {

    /**
     * home function 
     *
     */
    public function home(): void { 
        $data_page = [
            "page_description" => "Page d'accueil",
            "page_title" => "Sport Iconic",
            "page_css" => "home.css",
            "view" => "views/User/homeView.php",
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