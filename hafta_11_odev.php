<?php
    echo "<center><h1>OGRENCI LISTESI</h1>";
    $ogrenciler = array(
        array("ad" => "Omer Furkan", "soyad" => "SAGIR", "not" => 85),
        array("ad" => "Vehbi", "soyad" => "DEMIR", "not" => 95),
        array("ad" => "Ali", "soyad" => "BASARAN", "not" => 95)
    );
    echo "<h3>";
    for($i = 0; $i < count($ogrenciler); $i++) {
        echo $ogrenciler[$i]["ad"]." ".$ogrenciler[$i]["soyad"]." Not:".$ogrenciler[$i]["not"]."<br/>";
       }
    echo "</h3>";
    echo "<hr>";
    echo "<h3>diziye eleman eklenmis haliyle echolanmis liste:</h3>";
    $ogrenciler[3]['ad'] = "Ekrem";
    $ogrenciler[3]['soyad'] = "SAHIN";
    $ogrenciler[3]['not'] = "79";

    $ogrenciler[4]['ad'] = "Yildirim";
    $ogrenciler[4]['soyad'] = "OZTURK";
    $ogrenciler[4]['not'] = "100";
    
    for($i = 0; $i < count($ogrenciler); $i++) {
        echo $ogrenciler[$i]["ad"]." ".$ogrenciler[$i]["soyad"]." Not:".$ogrenciler[$i]["not"]."<br/>";
       }
       echo "<hr>";
    echo "<h3>eleman silme(3. indisteki elemani siliyoruz) ve guncel diziyi print_r() fonksiyonu ile echolama</h3>";
    unset($ogrenciler[3]);
    print_r($ogrenciler);
    echo "<hr>";
    echo "<h3>toplam ogrenci sayisi:</h3>";
    $toplam = 0;
    for($i = 0; $i < count($ogrenciler); $i++){
        $toplam++;
    }
    echo "toplam ogrenci sayisi: " . $toplam . "<br>";

    //not ortalamasi ve not siralamalari icin tek boyutlu dizi olusturuyorum
    echo "<hr>";
    echo "<h3>not hesaplamalari</h3>";
    $ogrenci_isim = array('Omer Furkan', 'Vehbi', 'Ali', 'Ekrem', 'Yildirim');
    $ogrenci_soyisim = array('SAGIR', 'DEMIR', 'BASARAN', 'SAHIN', 'OZTURK');
    $ogrenci_not = array(85, 95, 95, 79, 100);

    echo "sinif ortalamasi: " . array_sum($ogrenci_not)/count($ogrenci_not); echo "<br>";
    echo "siniftaki en yuksek not: " . max($ogrenci_not); echo "<br>";
    echo "siniftaki en dusuk not: " . min($ogrenci_not); echo "<br>";
?>