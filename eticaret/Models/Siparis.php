<?php
class Siparis{
    private $kullanici;
    private $sepet;
    private $siparisNo;


    public function __construct(Kullanici $kullanici,$sepet){
        $this->kullanici=$kullanici;
        $this->sepet=$sepet;
        $this->siparisNo=rand(155555,999999);
    }

    public function siparisTamamla(){
        if($this->kullanici->getAdres() != null){
            echo '<br>'.'Sipariş Verildi, Sipariş Bilgileri :'.'<br>';
            foreach ($this->sepet->getIcerikListesi() as $key => $icerik){
                echo $key+1 .'. Ürün Adı : '. $icerik->getUrun()->getAd().' , Fiyatı : '. $icerik->getUrun()->getFiyat() .'TL,  Adeti: '.$icerik->getMiktar().'<br>';
            }
        }
    }
}
