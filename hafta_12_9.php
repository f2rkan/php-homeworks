<?php
    //sabitler - constlar - constant ifadeler define() ile eklenir; onunde  $ isareti yoktur
    //define degerin tanımlı olup olmadıgının kontrolunu defined() fonksiyonu ile yapaız
    define ("pi_sayisi" , 3.14);
    define ("dis_acilar", 360);
    $aci1 = 120;
    $aci2 = 80;
    $aci3 = (dis_acilar) - ($aci1 + $aci2);
    print ($aci3); // 160 değerini döndürür.
?>