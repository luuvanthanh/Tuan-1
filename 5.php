<?php
    $string = "phpnangcao";
    $length = strlen($string);
    echo "Dao nguoc chuoi: <br>";
    for ($i=$length-1; $i >= 0 ; $i--) { 
        echo $string[$i];
    }
?>