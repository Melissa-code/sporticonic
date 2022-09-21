<?php
require_once("controllers/MainController.php"); 
require_once("models/Structure/StructureManager.php"); 
require_once("models/ModuleManager.php"); 


class StructureController extends MainController {

    private StructureManager $structureManager; 
    private ModuleManager $moduleManager; 


    public function __construct() {
        $this->structureManager = new StructureManager(); 
        $this->moduleManager = new ModuleManager(); 
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
     * @param string $login
     * @param string $password
     */
    public function loginStructureValidation(string $login, string $password): void {
        if($this->structureManager->isCombinationValid($login, $password)) {
            if($this->structureManager->isAccountActivated($login)){
                Toolbox::addAlertMessage("Ravi de vous retrouver", Toolbox::GREEN_COLOR); 
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

    /**
     * profil Structure function
     *
     */
    public function profil(): void {

        $structure = $this->structureManager->getStructureInformation($_SESSION['profil']['login']);
        $id_structure = $structure['id_structure'];
        $modules_partner = $this->structureManager->getPartnerModules($id_structure);
        $modules_structure = $this->structureManager->getStructureModules($id_structure);
        $modules = $this->moduleManager->getAllDb(); 

        /**
         *  TO DO : send an email to the structure 
         */
        $_SESSION['profil']['role'] = $structure['role_structure'];

        $data_page = [
            "page_description" => "Page de profil de la Structure",
            "page_title" => "Informations et modules de la Structure",
            "structure" => $structure,
            "modules_partner" => $modules_partner,
            "modules_structure" => $modules_structure, 
            "modules" => $modules,
            "view" => "views/Structure/profilStructureView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /**
     * Logout Structure function
     *
     */
    public function logout() : void {
        Toolbox::addAlertMessage("La déconnexion est effectuée", Toolbox::GREEN_COLOR); 
        unset($_SESSION['profil']);
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