<?php
    $string = "phptestnangcao";
    // if (strlen(strstr($string, "test")) > 0)
    // {
    //     echo "test co trong chuoi da nhap";
    // }else {
    //     echo "test khong co trong chuoi da nhap";
    // }
    $length = strlen($string);
    for ($i=0; $i < $length; $i++) { 
        if ($string[$i] == "t" && $string[$i + 1] == "e" && $string[$i + 2] == "s" && $string[$i + 3] == "t") {
            echo "test co trong chuoi da nhap";
            break;
        }
    }
?>