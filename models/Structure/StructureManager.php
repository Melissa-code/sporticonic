<?php 
require("models/MainManager.php"); 


Class StructureManager extends MainManager {


    /**
     * Get all the structures function
     *
     * @return array
     */
    public function getAllDb(): array {
        $req = $this->getDb()->prepare("SELECT * FROM Structures");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    /**
     * Get the encrypted password function
     *
     * @param [type] $login
     * @return string
     */
    private function getPasswordDb(string $login): string {
        $req = "SELECT password_structure FROM Structures WHERE login_structure = :login_structure";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_structure", $login, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $result['password_structure']; 
    }

    /**
     *  Compare the password from the form and the decrypted password from the DB function 
     *
     * @param [type] $login
     * @param [type] $password
     * @return boolean
     */
    public function isCombinationValid(string $login, string $password): bool{
        $passwordDb = $this->getPasswordDb($login); 
        //echo $passwordDb; 
        return password_verify($password, $passwordDb);
    }

    /**
     *  Verify if the structure account is activated function
     *
     * @param [type] $login
     * @return boolean
     */
    public function isAccountActivated(string $login): bool {
        $req = "SELECT isActive_structure FROM Structures WHERE login_structure = :login_structure";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_structure", $login, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return ((int)$result['isActive_structure'] === 1) ? true : false; 
    }

    /**
     * Get all the structure data function
     *
     * @param [type] $login
     * @return array
     */
    public function getStructureInformation($login): array{
        $req = "SELECT * FROM Structures WHERE login_structure = :login_structure";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_structure", $login, PDO::PARAM_STR); 
        $stmt->execute();
        $infos_structure = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $infos_structure; 
    }

    /**
     * Get all the partner modules function
     *
     * @param [type] $id_structure
     * @return array
     */
    public function getPartnerModules($id_structure): array {
        $req = "SELECT * FROM Modules_partners WHERE id_structure = :id_structure";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":id_structure", $id_structure, PDO::PARAM_STR); 
        $stmt->execute();
        $modules_partner = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $modules_partner; 
    }

    /**
     * Get all the structure modules function
     *
     * @param [type] $id_structure
     * @return array
     */
    public function getStructureModules($id_structure): array {
        $req = "SELECT * FROM Modules_structures WHERE id_structure = :id_structure";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":id_structure", $id_structure, PDO::PARAM_STR); 
        $stmt->execute();
        $modules_structure = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $modules_structure; 
    }


}
