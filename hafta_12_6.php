<?php
$arr = [
'ad'
=> 'tayfun'
,
'soyad'
=> 'erbilen'
];
//bir dizi içinde bir değer aramak icin kullanılır
$test = array_search('erbilen'
, $arr);
echo $test; // Çıktı: soyad
?>