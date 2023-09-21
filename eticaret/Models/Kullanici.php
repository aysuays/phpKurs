<?php
include './Models/SmsGonder.php';
include './Models/EmailGonder.php';

class Kullanici{
    private $ad;
    private $soyad;
    private $mail;
    private $telefon;
    private $adres;
    private $bildirimTercih;

    /**
     * @return Adres
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @return mixed
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * @return mixed
     */
    public function getSoyad()
    {
        return $this->soyad;
    }

    /**
     * @return mixed
     */
    public function getBildirimTercih()
    {
        return $this->bildirimTercih;
    }

    /**
     * @param $ad
     * @param $soyad
     * @param $mail
     * @param $telefon
     * @param $adres
     */
    public function __construct($ad, $soyad, $mail, $telefon, Adres $adres,$bildirimTercih)
    {
        $this->ad = $ad;
        $this->soyad = $soyad;
        $this->mail = $mail;
        $this->telefon = $telefon;
        $this->adres = $adres;
        $this->bildirimTercih = $bildirimTercih;
    }
    public function bildirim(){
        if($this->getBildirimTercih()=='sms'){
            (new SmsGonder())->sendNotification($this->getTelefon());
        }
        else if($this->getBildirimTercih()=='email'){
            (new EmailGonder())->sendNotification($this->getMail());
        }
    }

    public function info(){
        echo '<b>'.'Kullanici Bilgileri : '.'</b><br>';
        echo 'Adı :'.$this->getAd().' Soyad: '.$this->getSoyad().' Bildirim Tercihi : '.$this->getBildirimTercih().'<br>';
    }


}