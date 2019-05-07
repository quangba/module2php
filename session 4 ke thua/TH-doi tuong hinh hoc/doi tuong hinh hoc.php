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
    include_once('Shape.php');
    include_once('Rectangle.php');
    include_once('Square.php');
    include_once('Cricle.php');
    include_once('Cylinder.php');
    $circle = new Cricle('hinh tron', 4);
    echo 'name: ' . $circle->name . '<br>';
    echo 'bán kính đường tròn: ' . $circle->radius . '<br>';
    echo 'diện tích hình tròn là: ' . $circle->calculateArea() . '  ......';
    echo 'chu vi hình tròn là: ' . $circle->calculatePerimeter().'<br>';

    $cylinder = new Cylinder('Cylinder 01', 3, 4);
    echo 'diện tích hình trụ: ' . $cylinder->calculateArea() . '<br />';
    echo 'chu vi hình trụ: ' . $cylinder->calculatePerimeter() . '<br />';

    $rectangle = new Rectangle('Rectangle 01', 3, 4);
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

    $square = new Square('Square 01', 4, 4);
    echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
    ?>
</body>

</html>