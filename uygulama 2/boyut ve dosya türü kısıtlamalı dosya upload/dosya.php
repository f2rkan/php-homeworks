<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>İletişim Formu</title>
</head>
<body>
<form name="iletisim" method="POST" action ="http://odevdeneme.6te.net/dosya/dosya_yukleme.php" enctype="multipart/form-data">
Ad Soyad: <input type="text" name="ad_soyad" size="25"><br /> 
Telefon: <input type="text" name="tel" size="25"><br /> 
E-Mail: <input type="text" name="email"  size="25"><br />
Mesajiniz: <textarea rows="5" name="mesaj"  cols="25"></textarea><br />
Yüklenecek dosyayı seç:
    <input type="file" name="dosya" /> 
<input type="submit" name="button" value="Yükle">
</form>
</body>
</html>