<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $string = 'Đếm số lần xuất hiện của ký tự trong chuỗi';
    $count = 0;
    $ki_tu_can_tim = 'n';
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === $ki_tu_can_tim) {
            $count += 1;
        }
    }
    echo 'số lần xuất hiện của kí tự cần tìm trong mãng là: '.$count;
    ?>
</body>

</html>