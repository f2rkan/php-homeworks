<?php 

    $arr = [
        'ad' => 'omer',
        'ikinci_ad' => 'furkan',
        'yas' => 26
    ];
    //diziyi ekrana basma
    var_dump($arr);

    //------//
    $array1 = array(4, 42, 23, 16, 15, 8);
    echo "dizinin eleman sayisi: ".count($array1)."<br>";
    echo "dizinin en buyuk elemani: ".max($array1)."<br>";
    echo "dizinin en kucuk elemani: ".min($array1)."<br>";
    echo "<br>";
    print_r($array1);
    echo "<br>";
    sort($array1);
    echo "<br>";
    print_r($array1);
    echo "<hr>";
    //buyukten kucuge siralama arsort ile yapılır
    echo "deneme: ";
    arsort($array1);
    echo "<br>";
    print_r($array1);
    echo "<br>";echo "<br>";echo "<br>";

    //explode(), bir ifadeyi belli bir karakterden parçalayarak dizi haline getirmek için kullanılır
    //implode(), bir diziyi belli bir karakter ile string ifadeye döndürmek için kullanılır

    $array2 = array(4, 42, 23, 16, 15, 8);
    echo implode("+", $array2);
    $myString = "dizi-denemesi-a";
    $array3 = explode("-", $myString);
    echo "<br>";
    print_r($array2);
    echo "<br>";
    print_r($array3);
    echo "<br>";
    echo "<hr>";

    $veri = "16/05/2021";
    $dizi2 = explode("/", $veri);
    print_r($dizi2);
    echo "tarih bilgisi: gun $dizi2[0], ay $dizi2[1], yil $dizi2[2]";
    echo "<hr>";

    //array_push eleman eklemek icin kullanılır
    //array_replace eleman degistirmek icin kullanılır
    //array_sum dizinin toplamını gosterir
    echo "dizideki elemanlarin toplami: ".array_sum($dizi2);
    echo "<br>";
    //array_diff iki dizinin farkını alır
    
?>