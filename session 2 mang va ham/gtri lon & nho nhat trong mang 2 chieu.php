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
    $arr = array(
        array(12, 3, 12, 5, 2),
        array(34, 2, 6, 7, 3)
    );
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . ', ';
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
        echo '<br>';
    }
    echo $max;
    ?>
</body>

</html>