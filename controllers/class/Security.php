<?php

class Security {

   /**
    * Check the User typing function
    *
    * @param string $typing
    * @return string
    */
    public static function secureHTML(string $typing): string {
        return htmlentities($typing); 
    }

    /**
     * Check if the Structure/Partner/Brand is logged-in function
     *
     * @return boolean
     */
    public static function isLoggedin(): bool {
        if(!empty($_SESSION['profil']) || !empty($_SESSION['profil_partner']) || !empty($_SESSION['profil_brand'])){
            return true;
        }
        return false; 
    }



}
