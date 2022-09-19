<?php
require_once("models/MainManager.php"); 
require_once("models/class/Module.php"); 

    class ModuleManager extends MainManager {


    /**
     * Get all the modules function
     *
     * @return array
     */
    public function getAllDb(): array {
        $req = $this->getDb()->prepare("SELECT * FROM Modules");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }


}