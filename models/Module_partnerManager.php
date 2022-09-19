<?php
require_once("models/MainManager.php"); 
require_once("models/class/Module_partner.php"); 

    class Module_partnerManager extends MainManager {

    /**
     * Get all the modules_partner function
     *
     * @return array
     */
    public function getAllDb(): array {
        $req = $this->getDb()->prepare("SELECT * FROM Modules_partners");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }


}