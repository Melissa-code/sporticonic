<?php
require_once("class/Model.php");

class MainManager extends Model {

    public function getDatas(){
        $req = $this->getDb()->prepare("SELECT * FROM structures");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

}