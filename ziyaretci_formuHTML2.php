<?php
    echo "<meta charset=UTF-8>";

    $mesaj = $_POST["mesaj"];
    
    if(empty($mesaj)){
    echo "Mesaj alanı boş geçildi";
    }
    else{
    $kontrol = preg_match("/html/", $mesaj);
    if($kontrol){
        echo "html kodu tespit edildi.";
    }
    else{
    echo "mesaj temiz";
    }
}
?>