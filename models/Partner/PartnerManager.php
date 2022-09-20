<?php 
require_once("models/class/Model.php"); 
require_once("models/class/Partner.php"); 


Class PartnerManager extends Model {

    /**
     * Get all the Partners 
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

    /**
     * Get the encrypted password function
     *
     * @param [type] $loginPartner 
     *
     */
    private function getPasswordDb(string $loginPartner){
        $req = "SELECT password_partner FROM Partners WHERE login_partner = :login_partner";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_partner", $loginPartner, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $result['password_partner']; 
    }

    /**
     * Compare between the password from the form and the encrypt password from the DB function 
     *
     * @param [type] $loginPartner
     * @param [type] $passwordPartner
     * @return boolean
     */
    public function isCombinationValid(string $loginPartner, string $passwordPartner): bool{
        $passwordDb = $this->getPasswordDb($loginPartner); 
        return password_verify($passwordPartner, $passwordDb);
    }

    /**
     * Check if the Partner account is activated function
     *
     * @param [type] $loginPartner
     * @return boolean
     */
    public function isAccountActivated(string $loginPartner): bool {
        $req = "SELECT isActive_partner FROM Partners WHERE login_partner = :login_partner";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_partner", $loginPartner, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return ((int)$result['isActive_partner'] === 1) ? true : false; 
    }


}
