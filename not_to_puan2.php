<!doctype html>
<html>
<meta charset=UTF-8>
<head>
<title>NOT ÇEVİRİCİ</title>
</head>

<body>
<center>
        
<h2>NOT ÇEVİRİCİ<h2>
<table border="1">
<tr>
<td>
<table>
<tr>
<td>
5'lik Sistem Notu
</td>
<td>
<?php

function workOutGradeAv($not) {

$sonuc = $not;
if($sonuc > 90 && $sonuc <= 100){
    echo "5";
}
else if($sonuc > 80 && $sonuc <= 90){
    echo "4";
}
else if($sonuc > 70 && $sonuc <= 80){
    echo "3";
}
else if($sonuc > 60 && $sonuc <= 70){
    echo "2";
}
else if($sonuc > 50 && $sonuc <= 60){
    echo "1";
}
else if($sonuc > 40 && $sonuc <= 50){
    echo "0";
}
}
$not = 0;

if ($_POST["girilen_not"] < 0 || $_POST["girilen_not"] > 101)   {
echo "Hata! Girişini kontrol et.";
}

else {
$not = $not + $_POST["girilen_not"];
} 

workOutGradeAv($not);
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</center>
        
</body>
</html>