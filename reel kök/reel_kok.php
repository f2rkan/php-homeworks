<?php
echo "<meta charset=UTF-8>";
echo "<center>";
function kokler($a, $b, $c) {
  $D = $b * $b - 4 * $a * $c;
  if ($D >= 0){
    $x1 = (-$b + sqrt($D))/(2*$a);
    $x2 = (-$b - sqrt($D))/(2*$a);
    echo "denklemin kökleri: $x1, $x2 \n";   
  } else {
    $x1 = -$b/(2*$a);
    $x2 = sqrt(-$D)/(2*$a);
    echo "denklemin kökleri: $x1 ± $x2 i \n"; 
  }
}

echo "x*x+5x+4=0 denklemini incelediğimizde; \n";
kokler(1,5,4);

echo "</center>";
?>