<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Radio Buton İle Dört İşlem-1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<form action="radiobutdortislem2.php" method="post">
<table border="0" bgcolor="#FF99CC">
  <tr bgcolor="#FFCC66">
    <td colspan="2" align="center">Radio Buton İle Dört İşlem</td>
    </tr>
  <tr>
    <td>Birinci Sayıyı Giriniz:</td>
    <td><input name="sayi1" type="text" /></td>
  </tr>
  <tr>
    <td>İkinci Sayıyı Giriniz:</td>
    <td><input name="sayi2" type="text" /></td>
  </tr>
  <tr>
    <td>İşlem Türünü Seçiniz:</td>
    <td><p>
      <label>
        <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
        Toplama</label>
      <br />
      <label>
        <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
        Çıkarma</label>
      <br />
      <label>
        <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_2" />
        Çarpma</label>
      <br />
      <label>
        <input type="radio" name="RadioGroup1" value="4" id="RadioGroup1_2" />
        Bölme</label>
      <br />
    </p></td>
  </tr>
  
  <tr bgcolor="#FFCC66">
    <td>&nbsp;</td>
    <td><input name="gonder" type="submit" value="Hesapla" /></td>
  </tr>
</table>

</form>
<br />

</body>
</html>