<?php
require_once("controllers/MainController.php"); 
require_once("models/Brand/BrandManager.php"); 


class BrandController extends MainController {

    private BrandManager $brandManager; 


    public function __construct() {
        $this->brandManager = new BrandManager(); 
    }


    /**
     * Brand login (page) function
     *
     */
    public function loginBrand(): void {

        $data_page = [
            "page_description" => "Page de connexion de l'équipe de la Marque",
            "page_title" => "Connexion de la Marque",
            "view" => "views/Brand/loginBrandView.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    /**
     * Brand login (validation) function
     *
     * @param string $loginBrand
     * @param string $passwordBrand 
     */
    public function loginBrandValidation(string $loginBrand, string $passwordBrand):void {
      
        if($this->brandManager->isCombinationValid($loginBrand, $passwordBrand)) {
            Toolbox::addAlertMessage("Ravi de vous retrouver", Toolbox::GREEN_COLOR); 
                $_SESSION['profil_brand'] = [
                    'login_brand' => $loginBrand
                ];
                header("location:".URL."accountPartner/profil");
                exit();
        } else {
            Toolbox::addAlertMessage("Combinaison Email-Mot de passe non valide", Toolbox::RED_COLOR);
            header("location:".URL."loginBrand");
            exit();
        }
    }


}