<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = (int)$_POST['number'];
    $num2 = (int)$_POST['number1'];
    $KQua = $_POST['pheptinh'];

function div($num1,$num2){
    if($num2===0){
        throw new Exception('lỗi rồi');
    }
    return $num1 / $num2;
}
switch ($KQua) {
    case "phepcong":
        $result = $num1 + $num2;
        echo $result;
        break;
    case 'pheptru':
        $result = $num1 - $num2;
        echo $result;
        break;
    case 'phepnhan':
        $result = $num1 * $num2;
        echo $result;
        break;
    case 'phepchia':
    try {
        $result = div($num1,$num2);
        echo $result;
    }
    catch(Exception $e){
    echo 'Message: '.$e->getMessage();
    }        
        break;
}
}

    

