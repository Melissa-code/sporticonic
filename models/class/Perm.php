<?php 

    class Perm {

        private string $name_perm;
        private int $id_brand; 


        public function __construct($name_perm, $id_brand) {
            $this->name_perm = $name_perm;
            $this->id_brand = $id_brand;
        }
    
        public function getName_perm() { return $this->name_perm; }
        public function setName_perm($name_perm) {  $this->name_perm = $name_perm;  return $this; }

        public function getId_brand() { return $this->id_brand; }
        public function setId_brand($id_brand)  { $this->id_brand = $id_brand;return $this; }

    }