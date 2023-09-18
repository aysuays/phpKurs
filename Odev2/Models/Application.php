<?php
class Application {
    private $name;
    private $size;
    private $default;

    public function __construct($name, $size,$default)
    {
        $this->name = $name;
        $this->size = $size;
        $this->default=$default;
    }
    public function getName() {
        return $this->name;
    }
    public function getSize() {
        return $this->size;
    }

    public function isDefault(){
        return $this->default;
    }

    public function setDefault($default){
        return $this->default=$default;
    }
}