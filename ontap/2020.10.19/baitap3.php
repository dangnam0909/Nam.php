<?php
    // cau 3
    $arr1 = ["a" => 1, "b" => 3, "c" => 5];
    $arr2 = ["b" => 2, "d" => 4, "a" => 10];
    //output:
    // gop 2 mang $a, $b, neu co phan tu trung
    //$c = ['a' => [1, 10],  'b' => [3, 2], 'c' => 5, 'd' => 4 ]

    $new = [];
    $new1= [];
    foreach ($arr1 as $key=>$value){
        // neu truong 2 mang co cung key thi luu key vao mang moi
        if(isset($arr2[$key])){
            $new[$key] = [$arr2[$key], $value];
        } else {
            $new[$key] = $value;
        }
        
    }
    $new1 = $new + $arr2;
    var_dump($new1);
?>