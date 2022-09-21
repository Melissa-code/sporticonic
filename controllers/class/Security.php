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
     * Check if the Structure is logged-in function
     *
     * @return boolean
     */
    public static function isLoggedinStructure(): bool {
        return (!empty($_SESSION['profil'])); 
    }

    /**
     * Check if the Partner is logged-in function
     *
     * @return boolean
     */
    public static function isLoggedinPartnerBrand(): bool {
        if(!empty($_SESSION['profil_partner']) || !empty($_SESSION['profil_brand'])){
            return true;
        }
        return false; 
    }

   

}
