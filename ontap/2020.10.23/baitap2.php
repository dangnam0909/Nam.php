<?php
    // php mysqli
    $hostname = 'localhost'; // khai bao bien host name
    $username = 'root'; // khai bao bien name
    $pass = '';// khai bao password 
    $databasename = 'dbtest'; // khai bao database
    // khoi tao connet
    $connect = mysqli_connect($hostname, $username, $pass, $databasename);
    // kiem tra ket noi 
    if(!$connect){
        exit("Ket noi khong thanh cong!");
    }else{
        echo "Ket noi thanh cong!";
    }
?>