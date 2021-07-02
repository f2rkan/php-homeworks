<?php

$vize=45;
$final=60;
$ort=($vize * 0.4)+ ($final * 0.6);

echo "Ortalama:".$ort."<br>";

if($ort>= 80 && $ort <= 100)

echo " Harf Notu AA";
else if($ort >= 71 && $ort < 80){
    echo "Harf Notu BA";
}
else if($ort >= 63 && $ort < 71){
    echo "Harf Notu BB";
}
else if($ort >= 55 && ort < 63){
    echo "Harf Notu CB";
}
else if($ort >= 50 && $ort < 55){
    echo "Harf Notu CC";
}
else if($ort >= 45 && $ort < 50){
    echo "Harf Notu DC";
}
else if($ort >= 35 && $ort < 45){
    echo "Harf Notu DD";
}
else if($ort >= 0 && $ort < 35){
    echo "Harf Notu FF";
}

?>