<?php 

    class Perm_structure {

        private string $name_perm;
        private int $id_structure; 
        private bool $value_perm_structure; 


        public function __construct($name_perm, $id_structure, $value_perm_structure) {
            $this->name_perm = $name_perm;
            $this->id_structure = $id_structure;
            $this->value_perm_structure = $value_perm_structure;
        }
    
        public function getName_perm() { return $this->name_perm; }
        public function setName_perm($name_perm) {  $this->name_perm = $name_perm;  return $this; }

        public function getId_structure(){ return $this->id_structure; }
        public function setId_structure($id_structure) {$this->id_structure = $id_structure; return $this; }

        public function getValue_perm_structure(){ return $this->value_perm_structure; }
        public function setValue_perm_structure($value_perm_structure) { $this->value_perm_structure = $value_perm_structure; return $this; }

    }