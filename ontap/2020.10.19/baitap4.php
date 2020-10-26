<?php
    echo '=> Cau 1'."\n";
    $bai1 = [
                "VietNam" => "HaNoi",
                "TrungQuoc" => "BacKinh"
            ];

    // Ra ket qua:
    //     HaNoi la thu do cua VietNam
    //     BacKinh la thu do cua TrungQuoc
    foreach ($bai1 as $key=>$value){
        echo $value ." la thu do cua ".$key;
        echo "\n";
    }

    echo '=> Cau 2'."\n";
    $x = array(1, 2, 3, 4, 5);
    //Xoa 4 ra ket qua => array(1, 2, 3, 5)

    unset($x[3]);
    var_dump($x);

    echo '=> Cau 3'."\n";
    $arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    // Yeu Cau:
    // - Tinh trung binh
    // - Tim phan tu lon nhat
    // - Tim phan tu nho nhat
    // $new = [];
    // for($i = 0; $i < count($arr); $i){
        // $new[] = $arr[$i] + $arr[$i+1];
        // $new[$i] = $new[$i]/30;
    // }
    // var_dump($new);


    echo '=> Cau 4'."\n";
    $arr = [1,2,3, [11,12], 4,5,6, [21,22], [33,334], 7,8,9];
    // Ket qua nhu sau:
    // $arr = [1,2,3,4,5,6,7,8,9];
    // $new = [];
    // $tam = [];
    // for($i = 0; $i < count($arr); $i++){
    //     if($arr[$i+1] >= 10 && $arr[$i+1] <= 999){
    //         $tam[$arr[$i]] = $arr[$i+1];
    //         continue;
    //     }
    //     $new[$i] = $arr[$i];
    // }
    // var_dump($new);

    echo '=> Cau 5'."\n";
    $arr = [1,2,3,4,5,6,7,8,9];
    // Ket qua:
    // $ketqua = [[1,2,3], [4,5,6], [7,8,9]];
    //$new = [];
    // for($i=0; $i < 9; $i++){
    //     $new[] = [$arr[$i],$arr[$i+1],$arr[$i+2]];
    // }
    // var_dump($new);

    echo '=> Cau 6'."\n";
    $a = array(
        "aaaa"=>array(
            "b"=>0,
            "c"=>1
        ),
        "bbbb"=>array(
            "e"=>2,
            "o"=>array(
                "b"=>3
            )
        )
    );

    // Ket qua:
    // $ketquar = ["aaaa", "bbbb"];
    $new = [];
    foreach ($a as $key=>$value){
        $new[] = $key;
    }
    var_dump($new);

    echo '=> Cau 7'."\n";
    $a = array(
        "aaaa"=>array(
            "1111"=>0,
            "2222"=>1
        ),
        "bbbb"=>array(
            "3333"=>2,
            "4444"=>3
        )
    );
    // Ket qua:
    // $ketquar = ["aaaa", "bbbb", "1111", "2222", "3333", "4444"];

    $new = [];
    $tam = [];
    $new1  = [];
    foreach ($a as $key=>$value) {
        if(isset($key)){
            $tam[] = $key;
        }else{
            $tam[] = $value[$key];
        }
    }
    // $new1 = $tam + $new;
    var_dump($tam);
?>
