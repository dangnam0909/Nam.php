<?php
    $arr = [1, 2, 3, 3, 1, 4, 5, 5];
    // $new = [5, 4, 3, 2, 1];
    // - dao phan tu trong mang
    // - Neu co phan tu trung nhau thi chi lay 1 phan tu

    $new = [];

    for($i = 0; $i < count($arr); $i++){
        for($j = $i; $j < count($arr); $j++){
            if($arr[$i] < $arr[$j]){
                $tam = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tam;
            }
            $new[$i] = $arr[$i];
        }
    }
    $tmp = [];
    // neu phtu co trong bien tam thi in ra, nguoc lai thi
    for($i = 0; $i < count($new); $i++){
        if(in_array($new[$i], $tmp)){
            continue;
        }else{
        $tmp[] = $new[$i];
        }
    }
    var_dump($tmp);
?>
