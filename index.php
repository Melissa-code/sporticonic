<?php
session_start();

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));


require_once("./controllers/User/UserController.php");

$userController = new UserController();


try {
    if(empty($_GET['page'])){
        $page = "home";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "home" : $userController->home();
        break;
        case "loginStructure" : $userController->loginStructure();
        break;
        case "loginPartner" : $userController->loginPartner();
        break;
        case "loginBrand" : $userController->loginBrand();
        break;
        case "account" : 
            switch($url[1]){
                case "profil": $userController->home();
                break;
            }
        break;
        default : throw new Exception("La page n'existe pas.");
    }

} catch (Exception $e){
    $userController->errorPage($e->getMessage());
}