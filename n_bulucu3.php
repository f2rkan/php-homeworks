<!doctype html>
<html>
<meta charset=UTF-8>
<head>
<title>N. TERİM</title>
</head>

<body>
<center>
        
<h2>N. TERİM BULUCU<h2>
<table border="1">
<tr>
<td>
<table>
<tr>
<td>
</td>
<td>
<?php

$n = 0;

if ($_POST["sayi"] < 0)   {
   echo "Hata! Girişini kontrol et.";
    }
    
    else {
    $n = $n + $_POST["sayi"];
    sonucF($n);
    } 
    
    

function sonucF($n) {

            $sayi = 0;
            for($i = 0; $i < $n; $i++){
                $sayi += $i;
                if($sayi > $n){
                    echo "toplam: ".$sayi." ve bu toplam ".$i.". terimde bulundu.";
                    break;
                }
            }


}
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