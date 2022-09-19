<?php 

    class Partner {

        private int $id_partner;
        private string $name_partner;
        private string $description_partner;
        private string $email_partner;
        private string $phone_partner;
        private string $login_partner;
        private string $password_partner;
        private string $key_partner;
        private string $role_partner;
        private bool $isActive_partner;
        private int $id_brand;
        

        public function __construct($id_partner, $name_partner, $description_partner, $email_partner, $phone_partner, $login_partner, $password_partner, $key_partner, $role_partner, $isActive_partner, $id_brand) {
            $this->id_partner = $id_partner;
            $this->name_partner = $name_partner;
            $this->description_partner = $description_partner;
            $this->email_partner = $email_partner;
            $this->phone_partner = $phone_partner;
            $this->login_partner = $login_partner;
            $this->password_partner = $password_partner;
            $this->key_partner = $key_partner;
            $this->role_partner = $role_partner;
            $this->isActive_partner = $isActive_partner;
            $this->id_brand = $id_brand;
        }


        public function getId_partner() { return $this->id_partner; }
        public function setId_partner($id_partner) { $this->id_partner = $id_partner;  return $this; }

        public function getName_partner() {return $this->name_partner; }
        public function setName_partner($name_partner){ $this->name_partner = $name_partner; return $this; }

        public function getDescription_partner() { return $this->description_partner; }
        public function setDescription_partner($description_partner) { $this->description_partner = $description_partner; return $this; }

        public function getEmail_partner() { return $this->email_partner; }
        public function setEmail_partner($email_partner) {$this->email_partner = $email_partner;return $this; }

        public function getPhone_partner(){  return $this->phone_partner; }
        public function setPhone_partner($phone_partner) {  $this->phone_partner = $phone_partner;return $this; }

        public function getLogin_partner() { return $this->login_partner; }
        public function setLogin_partner($login_partner) {$this->login_partner = $login_partner; return $this;  }

        public function getPassword_partner() {return $this->password_partner; }
        public function setPassword_partner($password_partner){ $this->password_partner = $password_partner; return $this; }

        public function getKey_partner(){ return $this->key_partner; }
        public function setKey_partner($key_partner) { $this->key_partner = $key_partner; return $this;}

        public function getRole_partner() { return $this->role_partner; }
        public function setRole_partner($role_partner){ $this->role_partner = $role_partner;  return $this;  }

        public function getIsActive_partner() { return $this->isActive_partner; }
        public function setIsActive_partner($isActive_partner){ $this->isActive_partner = $isActive_partner; return $this; }

        public function getId_brand(){ return $this->id_brand; }
        public function setId_brand($id_brand) { $this->id_brand = $id_brand; return $this; }

    }
