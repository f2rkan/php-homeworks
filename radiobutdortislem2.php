<html>
<center>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HESAP EKRANI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
$sayi1=$_POST['sayi1'];
$sayi2=$_POST['sayi2'];
$secim=$_POST['RadioGroup1'];

if ($secim=="1")
{
	$islem=$sayi1+$sayi2;	
	$tur="Toplama";
}

if ($secim=="2")
{
	$islem=$sayi1-$sayi2;	
	$tur="Çıkarma";
}

if ($secim=="3")
{
	$islem=$sayi1*$sayi2;	
	$tur="Çarpma";
}

if ($secim=="4")
{
	$islem=$sayi1/$sayi2;	
	$tur="Bölme";
}

?>

<table width="300" border="1" bgcolor="#FFFF66">
  <tr bgcolor="#00CCCC">
    <td colspan="2" align="center">Raio Buton ile Dört İşlem</td>
  </tr>
  <tr bgcolor="#99FF66">
    <td width="169">Birinci Sayı:</td>
    <td width="115"><?php echo $sayi1; ?></td>
  </tr>
  <tr bgcolor="#99FF66">
    <td>İkinci Sayı:</td>
    <td><?php echo $sayi2; ?></td>
  </tr>
  <tr bgcolor="#99FF66">
    <td>İşlem Türü:</td>
    <td> <?php echo $tur; ?> </td>
  </tr>
  <tr>
    <td>Sonuç</td>
    <td><h2><?php echo $islem; ?></h2></td>
  </tr>
</table>
<br />

</body>
</center>
</html>