<?php
$adiSoyadi = "Furkan";
$sayac = 5;
$fiyat = 5.4;
echo "fiyat: ".$fiyat;
echo "<br>";
print "sayac: $sayac";

$deger = "sayac";
$$deger = 125;

echo "<br>";
echo "deger bilgisi ".$deger."---sayac bilgisi ".$sayac;
echo "<br>";

$dizi = array(1,2,3,4,5,6,7);
echo $dizi[1];
echo "<br>";
//print_r() : dizinin tüm elemanlarını ekrana yazar
print_r($dizi);
echo "<br>";
?>
