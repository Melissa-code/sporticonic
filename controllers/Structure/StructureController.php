<?php
require_once("controllers/MainController.php"); 
require_once("models/Structure/StructureModel.php"); 


class StructureController extends MainController {

    private StructureModel $structureModel; 


    public function __construct() {
        $this->structureModel = new StructureModel(); 
    }


    /**
     * login Structure (page) function
     *
     */
    public function loginStructure(): void {
        $data_page = [
            "page_description" => "Page de connexion de la Structure",
            "page_title" => "Connexion de la Structure",
            "view" => "views/Structure/loginStructureView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * login Structure (validation) function
     *
     */
    public function loginStructureValidation($login, $password): void {
        if($this->structureModel->isCombinationValid($login, $password)) {
            if($this->structureModel->isAccountActivated($login)){
                Toolbox::addAlertMessage("Vous êtes bien connecté", Toolbox::GREEN_COLOR); 
                    $_SESSION['profil'] = [
                        'login' => $login
                    ];
                    header('location:'.URL.'accountStructure/profil');
                    exit();
            } else {
                Toolbox::addAlertMessage("Le compte de la structure n'a pas été activé", Toolbox::RED_COLOR); 
                // TO DO : send a second time a validation email to the user
                header('location:'.URL.'loginStructure');
                exit();
            }
        } else {
            Toolbox::addAlertMessage("Combinaison Email Mot de passe non valide", Toolbox::RED_COLOR);
            header('location:'.URL.'loginStructure');
            exit();
        }


    }


    public function getAll() {
        $structures = $this->structureManager->getAllDb(); 
        //print_r($structures);
    }

  

}