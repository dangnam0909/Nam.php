<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $resultPlus = $number1 + $number2;
    $resultMinus = $number1 - $number2;
    $resultHuman = $number1 * $number2;
    $resultShare = $number1 / $number2;
    $resultPower = $number1 ^ $number2;
    if ($_POST['operation'] == 'plus') {
        echo 'Cong hai so ' . $number1 . ' + ' . $number2 . ' la: ' . $resultPlus;
    }
    if ($_POST['operation'] == 'minus') {
        echo 'Tru hai so ' . $number1 . ' - ' . $number2 . ' la: ' . $resultMinus;
    }
    if ($_POST['operation'] == 'human') {
        echo 'Nhan hai so ' . $number1 . ' * ' . $number2 . ' la: ' . $resultHuman;
    }
    if ($_POST['operation'] == 'share') {
        echo 'Chia hai so ' . $number1 . ' / ' . $number2 . ' la: ' . $resultShare;
    }
    if ($_POST['operation'] == 'power') {
        echo 'Luy thua hai so ' . $number1 . ' ^ ' . $number2 . ' la: ' . $resultPower;
    }
?>