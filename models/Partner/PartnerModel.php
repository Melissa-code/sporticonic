<?php 
require("models/MainManager.php"); 


Class PartnerModel extends MainManager {


    /**
     * Get all the partners 
     *
     * @return array
     */
    public function getAllDb(): array {
        $req = $this->getDb()->prepare("SELECT * FROM Partners");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }


}
