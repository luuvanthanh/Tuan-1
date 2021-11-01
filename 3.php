<?php
    $s1 = "Php nang cao";
    $s2 = "Javascript nang cao";
    $arS1 = explode(' ', $s1);
    $arS2 = explode(' ', $s2);
    $result = '';
    for ($i=0; $i < count($arS1); $i++) { 
        for ($j=0; $j < count($arS2); $j++) { 
            if ($arS1[$i] == $arS2[$j]) {
                $result = $arS1[$j];
            }                                                                   
        }
    }
    if ($result) {
       echo "sau S1 co chu sau S2";
    }else {
        echo "sau S1 khong chua sau S2";
    }
?>