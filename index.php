<?php
session_start();

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

require_once ("controllers/class/Security.php"); 
require_once("controllers/class/Toolbox.php"); 
require_once("controllers/User/UserController.php");
require_once("controllers/Structure/StructureController.php"); 


$userController = new UserController();
$structureController = new StructureController(); 



try {
    if(empty($_GET['page'])){
        $page = "home";
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "home" : $userController->home();
        break;
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
        case "loginPartner" : $userController->loginPartner();
        break;
        case "loginBrand" : $userController->loginBrand();
        break;
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
        default : throw new Exception("La page n'existe pas.");
    }

} catch (Exception $e){
    $userController->errorPage($e->getMessage());
}