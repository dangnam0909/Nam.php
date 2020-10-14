<?php
    $arr1 = ["a","b","c","d","e","f"];
    $arr2 = [1,2,3,4,5,6];
    // in ra ket qua mang moi co key mang 1 va value mang 2
    $new = [];
    for($i = 0; $i < count($arr1); $i ++){
        $new[$arr1[$i]] = $arr2[$i];
    }
    var_dump($new);
?>