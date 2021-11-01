<?php
    $array = [
        '0',
        '1',
        '2',
        '3',
        '4',
    ];
    echo "Do dai cua mang: ".$length = count($array)."<br>";
    echo "Xoa phan tu dau cua mang: ";
    unset($array[0]);
    foreach ($array as $key => $value) {
        echo $value;
    }
    echo "<br>Xoa phan tu thu 3 cua mang: ";
    unset($array[2]);
    foreach ($array as $key => $value) {
        echo $value;
    }
    echo "<br> Them 3 vao mang: ";
    $array[] = 3;
    foreach ($array as $key => $value) {
        echo $value;
    }
?>