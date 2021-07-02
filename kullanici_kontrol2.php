<?php
if($_POST["sifre"])
{
 $sifre = $_POST["sifre"];
 $kontrol = "/\S*((?=\S{8,})(?=\S*[A-Z]))\S*/";


 if(preg_match($kontrol,$sifre))
 {  
  echo "<b> Onay:</b>Şifreniz uygun formatta.";
 }
  
 else
 {
  echo "<b> Hata : </b>Şifreniz uygun formatta değil.";
 }
}
echo "<br>";
if ( filter_var($_POST["eposta"], FILTER_VALIDATE_EMAIL) ){ 
   echo '<b> Onay:</b> e-posta gecerli';
} else {
   echo '<b> Hata:</b> e-posta gecersiz!';
}
echo "<br>";
if(strlen($_POST["tcno"]) != 11){
    echo '<b> Hata:</b> kimlik no hatalı';
}
else{
    echo '<b> Onay:</b> Kimlik numarası uygun formatta.';
}

?>