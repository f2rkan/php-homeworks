<?php
echo " <meta charset=UTF-8>";
class vucutkitleindeksi
{
 public function indeks($kilo,$boy)
 {
  $vki1=$kilo/($boy*$boy);
  if($vki1<20)
  echo "zayıf";
  else if($vki1>20 and $vki<25)
  echo "normal";
  else if($vki1>25 and $vki<30)
  echo "şişman";
  else 
  echo "obez";
 }
}
?>
