<?php

Class Module_partner {

    private string $name_module; 
    private int $id_partner;
    private bool $isActive_modpartner;
    private int $id_structure;

    
    public function __construct($name_module, $id_partner, $isActive_modpartner, $id_structure) {
        $this->name_module = $name_module;
        $this->id_partner = $id_partner;
        $this->isActive_modpartner = $isActive_modpartner;
        $this->id_structure = $id_structure;
    }


    public function getName_module(){return $this->name_module;}
    public function setName_module($name_module) {$this->name_module = $name_module;  return $this;}

    public function getId_partner() { return $this->id_partner; }
    public function setId_partner($id_partner) { $this->id_partner = $id_partner; return $this;}

    public function getIsActive_modpartner() { return $this->isActive_modpartner; }
    public function setIsActive_modpartner($isActive_modpartner) { $this->isActive_modpartner = $isActive_modpartner;return $this; }

    public function getId_structure() { return $this->id_structure; }
    public function setId_structure($id_structure) { $this->id_structure = $id_structure; return $this; }

}