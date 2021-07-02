<html>
<center>
    <head>
        <meta charset="utf-8">
        <title>VİZE - FİNAL ÖRNEĞİ</title>
    </head>
    <body>
      <div class="container"> 
              <?php
               if(isset($_POST["kontrol"]))
               {
                   $vize=$_POST["vize"];
                   $final=$_POST["final"];
                   $sonuc=$vize*0.4 + $final*0.6;
                   if($sonuc >= 60 && $final >= 60)
                   {
                       if($sonuc >= 90 && $sonuc <= 100){
                        echo "<h1 class='text-info'>ortalama: $sonuc; Harf Notu: AA</h1>";
                       }
                       else if($sonuc >= 85 && $sonuc <= 89){
                        echo "<h1 class='text-info'>ortalama: $sonuc; Harf Notu: BA</h1>";
                       }
                       else if($sonuc >= 80 && $sonuc <= 84){
                        echo "<h1 class='text-info'>ortalama: $sonuc; Harf Notu: BB</h1>";
                       }
                       else if($sonuc >= 75 && $sonuc <= 79){
                        echo "<h1 class='text-info'>ortalama: $sonuc; Harf Notu: CB</h1>";
                       }
                       else if($sonuc >= 70 && $sonuc <= 74){
                        echo "<h1 class='text-info'>ortalama: $sonuc; Harf Notu: CC</h1>";
                       }
                       else if($sonuc >= 60 && $sonuc <= 69){
                        echo "<h1 class='text-info'> ortalama: $sonuc; Harf Notu: DC</h1>";
                       }
                   }
                   else
                   {
                       echo "<h1 class='text-danger'>$sonuc , FF</h1>";
                   }
               }     
                ?>
            <hr>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
              <div class="form-group">
                <label for="vize">Vize Notu:</label>
                <input type="text" class="form-control" name="vize">
              </div>
              <div class="form-group">
                <label for="final">Final Notu:</label>
                <input type="text" class="form-control" name="final">
              </div>
              <button type="submit" name="kontrol" class="btn btn-default" >HESAPLA</button>
            </form>
        </div>
    </body>
    </center>
</html>