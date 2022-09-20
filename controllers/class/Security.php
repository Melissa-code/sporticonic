<?php

class Security {

   /**
    * Check the user typing function
    *
    * @param string $typing
    * @return string
    */
    public static function secureHTML(string $typing): string {
        return htmlentities($typing); 
    }

    /**
     * Check if the user is logged-in function
     *
     * @return boolean
     */
    public static function isLoggedin(): bool {
        return (!empty($_SESSION['profiil'])); 
    }

}
