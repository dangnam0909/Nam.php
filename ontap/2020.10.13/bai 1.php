<?php
    $arr = [
        "company",
        "Nitro Tech Asia",
        "address",
        "218 Bach Dang",
        "phone",
        "0905001122",
        "email",
        "abc@gmail.com"
    ];

    $new = [];
    $index = 1;
    for($i = 0; $i < count($arr); $i ++){
        if ($i == $index) {
            continue;
        }
        if($index == count($arr)){
            break;
        }
        $new[$arr[$i]] = $arr[$i+1];
        $index = $i + 1;
    }
    var_dump($new);
?>
