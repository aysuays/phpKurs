<?php
class Sepet{
    private $icerikListesi;
    private $toplamFiyat;

    /**
     * @return mixed
     */
    public function getIcerikListesi()
    {
        return $this->icerikListesi;
    }

    /**
     * @return mixed
     */
    public function getToplamFiyat()
    {
        return $this->toplamFiyat;
    }

    /**
     * @param mixed $toplamFiyat
     */
    public function setToplamFiyat($toplamFiyat)
    {
        $this->toplamFiyat = $toplamFiyat;
    }


    public function sepetEkle(Icerik $icerik){
        $this->icerikListesi[]=$icerik;
    }

    public function sepetOnay(){
        $toplam=0;
        foreach($this->icerikListesi as $icerik){
            $toplam += $icerik->getUrun()->getFiyat() * $icerik->getMiktar();
        }
        $this->toplamFiyat=$toplam;
    }



}
