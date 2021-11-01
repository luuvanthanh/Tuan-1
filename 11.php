<?php
    $arr = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
    asort($arr);
    $minAge = '';
    $nameMin = '';
    $nameMax = '';
    $maxAge = '';
    foreach ($arr as $key => $value) {
      echo "Name: ".$key."_"."Age: ".$value."<br>";  
    }
    foreach ($arr as $key => $value) {
        if ($maxAge < $value) {
            $maxAge = $value;
            $nameMax = $key;
        }
    }
    $minAge = $maxAge;
    foreach ($arr as $key => $value) {
        if ($minAge > $value) {
            $minAge = $value;
            $nameMin = $key;
        }
    }
    echo "Tuoi nho nhat là: ".$nameMin.": ".$minAge."<br>";
    echo "Tuoi lon nhat là: ".$nameMax.": ".$maxAge;
?>