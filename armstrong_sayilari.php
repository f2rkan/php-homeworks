<?php
echo "<center>";
echo "<meta charset=UTF-8>";
for($i = 1; $i <= 1000; $i++) {
  $toplam = 0;
  $qu = $i;
  while($qu != 0) {
$b = $qu % 10;
$a = $b * $b * $b;
$toplam += $a;
$qu = $qu / 10;
  }
  if ($toplam == $i) {
    echo "<p>$i , bir armstrong sayısı</p>";
  }
}
echo "</center>";
?>