<?php

Class Module {

    private string $name_module; 

    public function __construct($name_module) {
        $this->name_module = $name_module;
    }

    public function getName_module(){return $this->name_module;}
    public function setName_module($name_module) {$this->name_module = $name_module;  return $this;}
    
}