<?php
include_once './Models/Urun.php';
include './Interfaces/Shippable.php';
class FizikselUrun extends Urun implements Shippable {

    private  $agirlik;

    public function __construct($ad, $fiyat,$agirlik)
    {
        parent::__construct($ad, $fiyat);
        $this->setAgirlik($agirlik);
    }

    public function getAgirlik(){
        return $this->agirlik;
    }

    public function setAgirlik($agirlik){
        $this->agirlik=$agirlik;
    }

    public function ship()
    {
        // TODO: Implement ship() method.
    }
}