<?php
require_once("controllers/class/Toolbox.php");


abstract class MainController{

    /**
     * Generate page 
     * 
     */
    protected function generatePage($data): void {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    /**
     * Errors page
     *
     * @param [type] $msg
     */
    protected function errorPage($msg): void {
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