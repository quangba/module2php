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
        $array=array(65,32,76,21,54,76,23,43,46,34,76,98,2165,65,3,2);
        echo 'độ dài của mãng là: '.count($array).'<br>';
        $min = $array[0];
        for($i=0;$i<count($array);$i++){
            echo $array[$i].', ';
            if($array[$i]<$min){
                $min = $array[$i];
            }       
        }
        echo 'giá trị nhỏ nhất trong mãng: '.$min;
    ?>
</body>
</html>