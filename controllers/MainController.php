<?php
require_once("models/MainManager.php");
require_once("controllers/class/Toolbox.php");

class MainController{
    private $mainManager;

    public function __construct(){
        $this->mainManager = new MainManager();
    }
    

    private function generatePage($data): void {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }


    public function home(): void {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/homeView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    public function errorPage($msg): void {
        $data_page = [
            "page_description" => "Page permettant de gérer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "./views/errorView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }
}