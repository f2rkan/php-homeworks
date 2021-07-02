<?php
echo "<meta charset=UTF-8>";
echo "<center>";

$not = 30;
if($not > 90 && $not <= 100){
    echo $not." notunun 5'lik sistemdeki karşılığı: 5";
}
else if($not > 80 && $not <= 90){
    echo $not." notunun 5'lik sistemdeki karşılığı: 4";
}
else if($not > 60 && $not <= 80){
    echo $not." notunun 5'lik sistemdeki karşılığı: 3";
}
else if($not > 50 && $not <= 60){
    echo $not." notunun 5'lik sistemdeki karşılığı: 2";
}
else if($not > 40 && $not <= 50){
    echo $not." notunun 5'lik sistemdeki karşılığı: 1";
}
else if($not >= 0 && $not <= 40){
    echo $not." notunun 5'lik sistemdeki karşılığı: 0";
}

echo "</center>";

?>