<?php

include_once './Models/Urun.php';
include './Interfaces/Downloadable.php';

class DijitalUrun extends Urun implements Downloadable {
    private $link;

    public function  __construct($ad, $fiyat, $link)
    {
        parent::__construct($ad, $fiyat);
        $this->setLink($link);
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link=$link;
    }


    public function download()
    {
        // TODO: Implement download() method.
    }
}