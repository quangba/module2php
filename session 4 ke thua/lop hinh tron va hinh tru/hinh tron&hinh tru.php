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
        include_once('Circle.php');
        include_once('Cylinder.php');
        $circle = new Circle(3,'red');
        echo $circle->areaCircle();
        echo $circle->color.'<br>';
        $cylinder = new Cylinder(4,'vang',5);
        echo 'dien tich hinh tru: '.$cylinder->areaCylinder()
    ?>
</body>

</html>