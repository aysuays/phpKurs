<?php
class Adres{
    private $mahalle;
    private $cadde;
    private $sokak;
    private $bina;
    private $kapiNo;

    private $ilce;
    private $il;

    /**
     * @param $mahalle
     * @param $cadde
     * @param $sokak
     * @param $bina
     * @param $kapiNo
     * @param $ilce
     * @param $il
     */
    public function __construct($mahalle, $cadde, $sokak, $bina, $kapiNo, $ilce, $il)
    {
        $this->mahalle = $mahalle;
        $this->cadde = $cadde;
        $this->sokak = $sokak;
        $this->bina = $bina;
        $this->kapiNo = $kapiNo;
        $this->ilce = $ilce;
        $this->il = $il;
    }


}