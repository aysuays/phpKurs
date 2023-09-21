<?php
include './Models/FizikselUrun.php';
include './Models/DijitalUrun.php';
include './Models/Kullanici.php';
include './Models/Sepet.php';
include './Models/Adres.php';
include './Models/Icerik.php';
include_once './Models/Siparis.php';


$bilgisayar = new FizikselUrun("Monster","50000","2000");
$masa= new FizikselUrun("Çalışma Masası","4000","5000");
$davetiye = new DijitalUrun("Davetiye","4","www.indir.com");
$poster=new DijitalUrun("Poster","50", "www.indir.com");

echo 'Urunler Seçildi'.'<br>';

$kullanici= new Kullanici("Aysu","Gür","aysu@hotmail.com","05454444444",new Adres("eryaman","1111. cadde","111.sokak","11","1","etimesgut","ankara"),"sms");

echo 'Kullanıcı Oluşturuldu'.'<br>';
$sepet= new Sepet("");

echo 'Ürünler Sepete Eklendi'.'<br>';

$sepet->sepetEkle(new Icerik($bilgisayar,1));
$sepet->sepetEkle(new Icerik($masa,1));
$sepet->sepetEkle(new Icerik($davetiye,500));
$sepet->sepetEkle(new Icerik($poster,2));
$sepet->sepetOnay();

$siparis = new Siparis($kullanici,$sepet);
$kullanici->info();
$siparis->siparisTamamla();

