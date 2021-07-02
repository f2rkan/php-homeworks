<?php
   
   //if else
    function test($a){
        return ($a > 2 && $a < 5);
    }
    $a1 = array(1, 2, 3, 4, 5);
    print_r(array_filter($a1, "test"));
?>