<?php 
echo "<center>";

$sayac = 0;
$n = 0;

for($i = 0; $i < 50; $i++){
    $n += $i;
    $sayac++;
    if($n > 500){
        echo "toplam: ".$n." ve bu toplam ".$sayac.". terimde bulundu.";
        break;
    }
}  
echo "</center>";
?>