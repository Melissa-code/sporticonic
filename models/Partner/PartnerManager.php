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
     * @param string $loginPartner
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
     * Compare the form password with the encrypted DB password function 
     *
     * @param string $loginPartner
     * @param string $passwordPartner
     * @return boolean
     */
    public function isCombinationValid(string $loginPartner, string $passwordPartner): bool {
        $passwordDb = $this->getPasswordDb($loginPartner); 
        return password_verify($passwordPartner, $passwordDb);
    }

    /**
     * Check if the Partner account is activated function
     *
     * @param string $loginPartner
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

    /**
     * Get all the partner data function
     *
     * @param string $loginPartner
     * @return array
     */
    public function getPartnerInformation(string $loginPartner): array {
        $req = "SELECT * FROM Partners WHERE login_partner = :login_partner";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_partner", $loginPartner, PDO::PARAM_STR); 
        $stmt->execute();
        $infos_partner = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $infos_partner; 
    }


}
