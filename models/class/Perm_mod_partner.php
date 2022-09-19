<?php

    class Perm_mod_partner {

        private string $name_perm;
        private string $name_module;
        private int $id_partner;
        private bool $value_perm_modpartner;


        public function __construct($name_perm, $name_module, $id_partner, $value_perm_modpartner) {
            $this->name_perm = $name_perm;
            $this->name_module = $name_module;
            $this->id_partner = $id_partner;
            $this->value_perm_modpartner = $value_perm_modpartner;
        }

        public function getName_perm() { return $this->name_perm;}
        public function setName_perm($name_perm) {$this->name_perm = $name_perm;return $this; }

        public function getName_module() { return $this->name_module; }
        public function setName_module($name_module) { $this->name_module = $name_module; return $this; }

        public function getId_partner() { return $this->id_partner;}
        public function setId_partner($id_partner) {  $this->id_partner = $id_partner;return $this; }

        public function getValue_perm_modpartner() { return $this->value_perm_modpartner; }
        public function setValue_perm_modpartner($value_perm_modpartner) { $this->value_perm_modpartner = $value_perm_modpartner; return $this; }
    }