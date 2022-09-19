<?php

    class Brand {

    private int $id_brand;
    private string $name_brand;
    private string $email_brand;
    private string $password_brand;
    private string $key_brand;
    private string $role_brand;


    public function __construct($id_brand, $name_brand, $email_brand, $password_brand, $key_brand, $role_brand) {
        $this->id_brand = $id_brand;
        $this->name_brand = $name_brand;
        $this->email_brand = $email_brand;
        $this->password_brand = $password_brand;
        $this->key_brand = $key_brand;
        $this->role_brand = $role_brand;
    }
   

    public function getId_brand(){return $this->id_brand;}
    public function setId_brand($id_brand){ $this->id_brand = $id_brand;return $this; }

    public function getName_brand() {return $this->name_brand;}
    public function setName_brand($name_brand){ $this->name_brand = $name_brand;return $this; }

    public function getEmail_brand(){ return $this->email_brand; }
    public function setEmail_brand($email_brand) {$this->email_brand = $email_brand;return $this; }

    public function getPassword_brand() { return $this->password_brand;}
    public function setPassword_brand($password_brand){$this->password_brand = $password_brand; return $this; }

    public function getKey_brand(){ return $this->key_brand; }
    public function setKey_brand($key_brand) { $this->key_brand = $key_brand;return $this; }

    public function getRole_brand() { return $this->role_brand; }
    public function setRole_brand($role_brand){ $this->role_brand = $role_brand; return $this;}

}