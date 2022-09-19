<?php

    class Perm_mod_structure {

        private string $name_perm;
        private string $name_module;
        private int $id_structure;
        private bool $value_perm_modstructure;


        public function __construct($name_perm, $name_module, $id_structure, $value_perm_modstructure) {
            $this->name_perm = $name_perm;
            $this->name_module = $name_module;
            $this->id_structure = $id_structure;
            $this->value_perm_modstructure = $value_perm_modstructure;
        }

        public function getName_perm() { return $this->name_perm; }
        public function setName_perm($name_perm) { $this->name_perm = $name_perm; return $this; }

        public function getName_module() {return $this->name_module; }
        public function setName_module($name_module) { $this->name_module = $name_module; return $this; }

        public function getId_structure() { return $this->id_structure; }
        public function setId_structure($id_structure){ $this->id_structure = $id_structure;  return $this; }

        public function getValue_perm_modstructure() { return $this->value_perm_modstructure; }
        public function setValue_perm_modstructure($value_perm_modstructure) { $this->value_perm_modstructure = $value_perm_modstructure; return $this;}
        
    }