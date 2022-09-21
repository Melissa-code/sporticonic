<?php 
require_once("models/MainManager.php"); 
//require_once("models/class/Partner.php"); 


Class BrandManager extends MainManager {

    /**
     * Get all the Brands 
     *
     * @return array
     */
    public function getAllDb(): array {
        $req = $this->getDb()->prepare("SELECT * FROM Brands");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    /**
     * Get the encrypted password function
     *
     * @param string $loginBrand
     * 
     */
    private function getPasswordDb(string $loginBrand){
        $req = "SELECT password_brand FROM Brands WHERE login_brand = :login_brand";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_brand", $loginBrand, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $result['password_brand']; 
    }

    /**
     * Compare the form password with the encrypted DB password function 
     *
     * @param string $loginBrand
     * @param string $passwordBrand
     * @return boolean
     */
    public function isCombinationValid(string $loginBrand, string $passwordBrand): bool {
        $passwordDb = $this->getPasswordDb($loginBrand); 
        return password_verify($passwordBrand, $passwordDb);
    }

    /**
     * Get all the brand data function
     *
     * @param string $loginBrand
     * @return array
     */
    public function getBrandInformation(string $loginBrand): array {
        $req = "SELECT * FROM Brands WHERE login_brand = :login_brand";
        $stmt = $this->getDb()->prepare($req); 
        $stmt->bindValue(":login_brand", $loginBrand, PDO::PARAM_STR); 
        $stmt->execute();
        $infos_brand = $stmt->fetch(PDO::FETCH_ASSOC); 
        $stmt->closeCursor(); 
        return $infos_brand; 
    }


}