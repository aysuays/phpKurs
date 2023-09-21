<?php
class Icerik{
    private $urun;
    private $miktar;

    public function __construct(Urun $urun, $miktar){
        $this->urun=$urun;
        $this->miktar=$miktar;
    }

    public function getUrun(){
        return $this->urun;
    }

    public function getMiktar(){
        return $this->miktar;
    }
}