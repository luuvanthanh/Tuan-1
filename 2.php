<?php
    $string = "Hoc php co ban den nang cao";
    $length = strlen($string);
    $word = 1;
    for ($i=0; $i < $length - 1; $i++) { 
        if ($string[$i] == ' ' && $string[$i + 1] != ' ') {
            $word++;
        }
    }
    echo $word;
?>