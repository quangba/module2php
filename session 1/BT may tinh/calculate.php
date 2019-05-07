<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['number'];
    $num2 = $_POST['number1'];
    $KQua = $_POST['pheptinh'];
}
$result = 0;
if($num2 != 0){
switch ($KQua) {
    case "phepcong":
        $result = $num1 + $num2;
        break;
    case 'pheptru':
        $result = $num1 - $num2;
        break;
    case 'phepnhan':
        $result = $num1 * $num2;
        break;
    case 'phepchia':
        $result = $num1 / $num2;
        break;
}
echo 'result: ' . $result;
}else{
    echo 'lỗi rồi!';
}

