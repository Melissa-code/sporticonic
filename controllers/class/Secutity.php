<?php

class Security {

    public static function secureHTML($typing) {
        return htmlentities($typing); 
    }



}
