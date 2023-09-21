<?php

abstract class Urun {
    protected $ad;
    protected  $fiyat;

    public function __construct($ad, $fiyat){
        $this->ad=$ad;
        $this->fiyat=$fiyat;

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
    public function getFiyat()
    {
        return $this->fiyat;
    }


}
