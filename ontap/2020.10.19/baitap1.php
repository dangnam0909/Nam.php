<?php
    // cau 1
    $arr = [33, 1, 2, 3, 32, 10];
    // sap xep tang dan
    $new = [];
    $new1 = [];
    for($i = 0; $i < count($arr); $i++){
        for($j = $i; $j < count($arr); $j++){
            if($arr[$i] >= 10 && $arr[$i] <=99){
                $new[$i] = $arr[$i];
                continue;
            }
            if($arr[$i] > $arr[$j]){
                $tam = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tam;
            }
            $new1[$i] = $arr[$i];
        }
    }

    $new1 = $new + $arr;
    var_dump($new1);

 ?>   
