<?php 
require("models/class/Model.php"); 


Class PartnerModel extends Model {

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
