<?php 

    class Perm_partner {

        private string $name_perm;
        private int $id_partner; 
        private bool $value_perm_partner; 


        public function __construct($name_perm, $id_partner, $value_perm_partner) {
            $this->name_perm = $name_perm;
            $this->id_partner = $id_partner;
            $this->value_perm_partner = $value_perm_partner;
        }
    
        public function getName_perm() { return $this->name_perm; }
        public function setName_perm($name_perm) {  $this->name_perm = $name_perm;  return $this; }

        public function getId_partner() { return $this->id_partner;}
        public function setId_partner($id_partner) { $this->id_partner = $id_partner; return $this; }

        public function getValue_perm_partner(){ return $this->value_perm_partner; }
        public function setValue_perm_partner($value_perm_partner) { $this->value_perm_partner = $value_perm_partner; return $this; }
        
    }