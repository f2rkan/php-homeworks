<?php
echo " <meta charset=UTF-8>";
require "vucut_sonuc.php";
$b=$_POST['boy'];
$k=$_POST['kilo'];
$vki=new vucutkitleindeksi();
$i=$vki->indeks($k,$b);
?>