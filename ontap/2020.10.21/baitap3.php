<?php
    echo '=> Cau 3'."\n";
    $arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
    68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    // Yeu Cau:
    // - Tinh trung binh
    // - Tim phan tu lon nhat
    // - Tim phan tu nho nhat
    // b1 dung vong lap for di tu ptu thu 1 toi ptu cuoi
    // b2 tinh trung binh 
    // b3 tim ptu lon nhat
    // b4 tim ptu nho nhat
    // $min = $arr[0];
    $max = ''; // max = null de luu ptu dau tien
    $min = ''; // min = null de luu ptu dau tien 
    $total = 0;  
    // $arrlengh = count($arr);  // 30
    // foreach($arr as $key=>$value)  
    // {  
    //   $total = $total + $value;  
    // }  
    // $trungbinh = $total / $arrlengh;  
    // echo "Trung binh la: ".$trungbinh;  
    
    for ($i = 0; $i < count($arr); $i++)
    {
        // tinh trung binh
        $total = $total + $arr[$i];
        $trungbinh = $total / count($arr);
        
        // phan tu lon nhat
        if ($max == ''){
            $max = $arr[$i]; // luu lai bien max
        }
        else {
            if ($arr[$i] > $max){ // so sanh voi ptu con lai
                $max = $arr[$i]; 
            }
        }
        
        // phan tu nho nhat
        if($min == ''){
            $min = $arr[$i];
        }
        else {
            if($arr[$i] < $min){ 
                $min = $arr[$i];
            }
        }
    }
    var_dump("Trung binh: ".$trungbinh);  
    var_dump("Phan tu lon nhat ".$max);
    var_dump("Phan tu nho nhat ".$min);

?>