<?php
    $a = 4;
    $b = &$a;
    $b = 7;
    echo $a.$b;
    echo "<br>";
    $b = 5;
    echo $a.$b;
    echo "<br>";
    $dizi_deneme = array("seftali", "kirmizi", "turuncu");
    print_r($dizi_deneme);
?>