<?php

include './Models/phone.php';
include './Models/Application.php';

$application1 = new Application('Instagram', 150,false);
$application2 = new Application('Udemy', 200,false);
$application3 = new Application('Whatsapp', 170,false);
$application4 = new Application('Kamera', 250,true);


$phone2 = new Phone('iPhone', '14');
echo '<br>';
echo '<h4>Uygulamalar</h4>';
$phone2Applications = $phone2->getApplications();


$phone2->downloadApplication($application1);

echo 'Instagram eklendikten sonra ';

showApplications($phone2->getApplications());

echo '<br>';

$phone2->removeApplication($application4);
echo 'Kamerayı silmeye çalıştıktan sonra';

showApplications($phone2->getApplications());

echo '<br>';

$phone2->removeApplication($application1);
echo 'Default olmayan instagramı sildikten sonra';

showApplications($phone2->getApplications());

echo '<br>';

// @todo uygulamaların listelenmesi fonksiyon haline getirilecek
function showApplications($applications) {
    echo '<h4>Uygulamalar</h4>';
    foreach ($applications as $application) {
        echo ' Name: ' . $application->getName() .
            ' - Size: ' . $application->getSize();
        echo '<br>';
    }
}