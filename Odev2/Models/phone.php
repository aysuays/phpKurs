<?php
class Phone{
    private $brand;
    private $model;
    private $applications;

    public function __construct($brand, $model){ // kurucu fonksiyon
        $this->brand = $brand;
        $this->model = $model;
        $this->applications = [];
        $this->setDefaultApplications(); // default uygularının eklenmesi
        echo $this->brand . ' için kurucu method çalıştı';
        echo '<br>';
    }

    public function getInformations() {
        return 'Marka: '. $this->brand . ' Model: ' . $this->model;
    }

    public function downloadApplication(Application $application) {
        //array_push($this->applications, $application);
        $this->applications[] = $application; // array push (diziye eleman ekleme)
        echo '<br>';
        echo $application->getName() . ' uygulaması indi.';
    }

    public function getApplications() {
        return $this->applications;
    }

    private function setDefaultApplications() {
        $application1 = new Application('Kamera', 250,true);
        $application2 = new Application('Galeri', 200,true);

        $this->applications[] = $application1;
        $this->applications[] = $application2;
    }

    public function removeApplication($applicationDel){

        // @todo güncellenecek ve default olarak yüklü gelen uygulamalar silinmeyecek

        //if (!in_array($applicationName, $this->applications)){ sadece var mı yok mu arama yapıyor indeks yok

       // $index = array_search($applicationName,$this->applications); // varsa indexi aramada yoksa false döndürür.

        $applications = $this->getApplications();
        foreach ($applications as $key => $application)
        {
            if ($applicationDel->getName() == $application->getName() )
                $index = $key;
        }

        if ($index !== null)
            if( ! $this->applications[$index]->isDefault() )
            array_splice($this->applications,$index,1);
}



}