<?php
    $arr = [1,2,3,7,8,9];

    $new = [];
    $new1 = [];
    $arrlengh = count($arr);
    //in ra mang $new la cac chu so chan, le dung vong lap if/else
    for($i = 0; $i < $arrlengh; $i++){
        if($arr[$i] % 2 == 0){
            $new[] = $arr[$i];
        }else{
            $new1[] = $arr[$i];
        }
    }
    var_dump($new);
    var_dump($new1);
?>