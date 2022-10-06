<?php
session_start();

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

require_once ("controllers/class/Security.php"); 
require_once("controllers/class/Toolbox.php"); 
require_once("controllers/User/UserController.php");
require_once("controllers/Structure/StructureController.php"); 
require_once("controllers/Partner/PartnerController.php"); 
require_once("controllers/Brand/BrandController.php"); 


$userController = new UserController();
$structureController = new StructureController(); 
$partnerController = new PartnerController(); 
$brandController = new BrandController(); 


try {
    if(empty($_GET['page'])){
        $page = "home";
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        /**
         * Home page route
         */
        case "home" : $userController->home();
        break;

        /**
         * Structure login route
         */
        case "loginStructure" : $structureController->loginStructure();
        break;
        case "loginStructureValidation" : 
            if(!empty($_POST['login']) && !empty($_POST['password'])) {
                $login = Security::secureHTML($_POST['login']);
                $password = Security::secureHTML($_POST['password']);
                $structureController->loginStructureValidation($login, $password);
            } else {
                Toolbox::addAlertMessage("Email ou mot de passe non renseigné", Toolbox::RED_COLOR);
                header('location:'.URL.'loginStructure');
                exit();
            }
        break;

        /**
         * Partner login route
         */
        case "loginPartner" : $partnerController->loginPartner();
        break;
        case "loginPartnerValidation" : 
            if(!empty($_POST['login_partner']) && !empty($_POST['password_partner'])) {
                $loginPartner = Security::secureHTML($_POST['login_partner']);
                $passwordPartner = Security::secureHTML($_POST['password_partner']);
                $partnerController->loginPartnerValidation($loginPartner, $passwordPartner);
            } else {
                Toolbox::addAlertMessage("Email ou mot de passe non renseigné", Toolbox::RED_COLOR);
                header('location:'.URL.'loginPartner');
                exit();
            }
        break;

        /**
         * Brand login route
         */
        case "loginBrand" : $brandController->loginBrand();
        break;
        case "loginBrandValidation" : 
            if(!empty($_POST['login_brand']) && !empty($_POST['password_brand'])) {
                $loginBrand = Security::secureHTML($_POST['login_brand']);
                $passwordBrand = Security::secureHTML($_POST['password_brand']);
                $brandController->loginBrandValidation($loginBrand, $passwordBrand);
            } else {
                Toolbox::addAlertMessage("Email ou mot de passe non renseigné", Toolbox::RED_COLOR);
                header('location:'.URL.'loginBrand');
                exit();
            }
        break;

        
        /**
         * Structure profil & logout routes
         */
        case "accountStructure" :
            if(!Security::isLoggedin()) {
                Toolbox::addAlertMessage("Veuillez vous connecter", Toolbox::RED_COLOR);
                header("location:". URL ."loginStructure"); 
                exit();
            } else {
                switch($url[1]){
                    case "profil": $structureController->profil();
                    break;
                    case "logout": $structureController->logout();
                    break;
                    default : throw new Exception("La page n'existe pas.");
                }
            }
        break;

        /**
         * Partner profil & logout routes
         */
        case "accountPartner" :
            if(!Security::isLoggedin()) {
                Toolbox::addAlertMessage("Veuillez vous connecter", Toolbox::RED_COLOR);
                header("location:". URL ."loginPartner"); 
                exit();
            } else {
                switch($url[1]){
                    case "profil": $partnerController->profil();
                    break;
                    case "logout": $partnerController->logout();
                    break;
                    default : throw new Exception("La page n'existe pas.");
                }
            }
        break;

        /**
         * Brand profil & logout routes
         */
        // case "accountBrand" :
        //     if(!Security::isLoggedin()) {
        //         Toolbox::addAlertMessage("Veuillez vous connecter", Toolbox::RED_COLOR);
        //         header("location:". URL ."loginBrand"); 
        //         exit();
        //     } else {
        //         switch($url[1]){
        //             case "profil": $brandController->profil();
        //             break;
        //             case "logout": $brandController->logout();
        //             break;
        //             default : throw new Exception("La page n'existe pas.");
        //         }
        //     }
        // break;

        default : throw new Exception("La page n'existe pas.");
    }

} catch (Exception $e){
    $userController->errorPage($e->getMessage());
}