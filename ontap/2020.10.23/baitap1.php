<?php
    $arr = [1,2,3,4,5,6,7,8,9];
    // $new = [[1,2,3],[4,5,6,],[7,8,9]]
    $new = [];
    $tam = []; // tao mang tam 
    for($i = 0; $i < count($arr); $i++){
        if(count($tam) == 3){ // dem mang tam = 3
            $new[] = $tam; // luu tam vao mang new
            $tam = []; // khoi tao lai mang tam
        }
        $tam[] = $arr[$i]; // do gia tri vao mang tam 
    }
    var_dump($new);
?>


<?php
    $arr = [];
?>