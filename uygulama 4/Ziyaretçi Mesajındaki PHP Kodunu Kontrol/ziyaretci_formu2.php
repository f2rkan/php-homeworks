<?php
    echo "<meta charset=UTF-8>";

    $mesaj = $_POST["mesaj"];
    
    if(empty($mesaj)){
    echo "Mesaj alanı boş geçildi";
    }
    else{
    $kontrol = preg_match("/php/", $mesaj);
    if($kontrol){
        echo "php kodu tespit edildi.";
    }
    else{
    echo "mesaj temiz";
    }
}
?>