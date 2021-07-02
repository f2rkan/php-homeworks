<?php
echo "<meta charset=UTF-8>";
if ($_FILES["dosya"]) {
  $yol = "dosyalar";
  $kayit_ismi = $_POST["ad_soyad"];
  $yuklemeYeri = __DIR__ . DIRECTORY_SEPARATOR . $yol . DIRECTORY_SEPARATOR . $kayit_ismi . $_FILES["dosya"]["name"];
  if ( file_exists($yuklemeYeri) ) {
      echo "Dosya önceden y&uuml;klenmi&#351;";
  } else {
      if ($_FILES["dosya"]["size"]  > 524288) {
          echo "Dosya boyutu s&#305;n&#305;r&#305;";
      } else {
          $dosyaUzantisi = pathinfo($_FILES["dosya"]["name"], PATHINFO_EXTENSION);                                                                                                     
          if ($dosyaUzantisi != "jpg" && $dosyaUzantisi != "pnp" && $dosyaUzantisi != "pdf" && $dosyaUzantisi != "docx" && $dosyaUzantisi != "zip" && $dosyaUzantisi != "rar" && $dosyaUzantisi != "bmp" && $dosyaUzantisi != "gif") {
              echo "Sadece jpg, pdf, doc, docx, zip, rar, ve pnp, jpg, bmp ve gif uzant&#305;l&#305; dosyalar y&uuml;klenebilir.";
          } else {
              $sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"], $yuklemeYeri);
              echo $sonuc ? "Dosya ba&#351;ar&#305;yla y&uuml;klendi" : "Hata olu&#351;tu";
          }
      }
  }
} else {
  echo "L&uuml;tfen bir dosya se&ccedil;in";
}

?>