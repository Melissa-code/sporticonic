<?php

Class Module_structure {

    private string $name_module; 
    private int $id_structure;
    private bool $isActive_modstructure;

    
    public function __construct($name_module, $id_structure, $isActive_modstructure) {
        $this->name_module = $name_module;
        $this->id_structure = $id_structure;
        $this->isActive_modstructure = $isActive_modstructure;
        
    }

    public function getName_module(){return $this->name_module;}
    public function setName_module($name_module) {$this->name_module = $name_module;  return $this;}

    public function getId_structure() { return $this->id_structure; }
    public function setId_structure($id_structure) { $this->id_structure = $id_structure; return $this; }

    public function getIsActive_modstructure() { return $this->isActive_modstructure; }
    public function setIsActive_modstructure($isActive_modstructure) { $this->isActive_modstructure = $isActive_modstructure; return $this; }


}