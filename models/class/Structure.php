<?php 

    class Structure {

        private int $id_structure;
        private string $name_structure;
        private string $description_structure;
        private string $address_structure;
        private string $email_structure;
        private string $phone_structure;
        private string $login_structure;
        private string $password_structure;
        private string $key_structure;
        private string $role_structure;
        private bool $isActive_structure;
        private int $id_brand;
        private int $id_partner;
        

        public function __construct($id_structure, $name_structure, $description_structure, $address_structure, $email_structure, $phone_structure, $login_structure, $password_structure, $key_structure, $role_structure, $isActive_structure, $id_brand, $id_partner) {
            $this->id_structure = $id_structure;
            $this->name_structure = $name_structure;
            $this->description_structure = $description_structure;
            $this->address_structure = $address_structure;
            $this->email_structure = $email_structure;
            $this->phone_structure = $phone_structure;
            $this->login_structure = $login_structure;
            $this->password_structure = $password_structure;
            $this->key_structure = $key_structure;
            $this->role_structure = $role_structure;
            $this->isActive_structure = $isActive_structure;
            $this->id_brand = $id_brand;
            $this->id_partner = $id_partner;
        }


        public function getId_structure() { return $this->id_structure; }
        public function setId_structure($id_structure) { $this->id_structure = $id_structure; return $this;  }

        public function getName_structure() { return $this->name_structure; }
        public function setName_structure($name_structure) { $this->name_structure = $name_structure;  return $this;  }

        public function getDescription_structure() { return $this->description_structure; }
        public function setDescription_structure($description_structure) { $this->description_structure = $description_structure; return $this; }

        public function getAddress_structure() { return $this->address_structure; }
        public function setAddress_structure($address_structure) {$this->address_structure = $address_structure; return $this; }

        public function getEmail_structure(){ return $this->email_structure; }
        public function setEmail_structure($email_structure) {  $this->email_structure = $email_structure; return $this;  }

        public function getPhone_structure() {   return $this->phone_structure; }
        public function setPhone_structure($phone_structure) { $this->phone_structure = $phone_structure; return $this;   }

        public function getLogin_structure() { return $this->login_structure; }
        public function setLogin_structure($login_structure) { $this->login_structure = $login_structure; return $this; }

        public function getPassword_structure(){ return $this->password_structure;}
        public function setPassword_structure($password_structure) {  $this->password_structure = $password_structure; return $this; }

        public function getKey_structure() { return $this->key_structure; }
        public function setKey_structure($key_structure) {  $this->key_structure = $key_structure; return $this;}

        public function getRole_structure() { return $this->role_structure; }
        public function setRole_structure($role_structure) { $this->role_structure = $role_structure; return $this; }

        public function getIsActive_structure() { return $this->isActive_structure;}
        public function setIsActive_structure($isActive_structure) { $this->isActive_structure = $isActive_structure;return $this; }

        public function getId_brand(){ return $this->id_brand;}
        public function setId_brand($id_brand) { $this->id_brand = $id_brand;return $this; }

        public function getId_partner() { return $this->id_partner; }
        public function setId_partner($id_partner) {$this->id_partner = $id_partner;  return $this; }

        
    }
