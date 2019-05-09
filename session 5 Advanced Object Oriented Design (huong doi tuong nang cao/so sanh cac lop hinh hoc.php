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
    interface Resizeable
    {
        public function resize($percen);
    }
    class Shape
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        public function show()
        {
            return "I am a shape. My name is $this->name";
        }
    }
    class Circle extends Shape implements Resizeable
    {
        public $radius;
        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }
        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }
        public function calculatePerimeter()
        {
            return pi() * $this->radius * 2;
        }
        public function resize($percen)
        {
            $this->radius += $this->radius * $percen;
        }
    }
    class Cylinder extends Circle
    {
        public $height;
        public function __construct($name, $radius, $height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }
        public function calculateArea()
        {
            return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
        }
        public function calculateVolume()
        {
            return parent::calculateArea() * $this->height;
        }
        public function resize($percen)
        {
            $this->radius += $this->radius * $percen;
            $this->height += $this->height * $percen;
        }
    }
    class Rectangle extends Shape implements Resizeable
    {
        public $width;
        public $height;
        public function __construct($name, $width, $height)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }
        public function calculateArea()
        {
            return $this->height * $this->width;
        }
        public function calculatePerimeter()
        {
            return ($this->height + $this->width) * 2;
        }
        public function resize($percen)
        {
            $this->width += $this->width * $percen;
            $this->height += $this->height * $percen;
        }
    }
    class Square extends Rectangle
    {
        public function __construct($name, $width, $height)
        {
            parent::__construct($name, $width, $height);
        }
    }
    $hinhtron = new Circle('hình tròn', 5);
    $hinhtru = new Cylinder('hình trụ', 6, 10);
    $hinhchunhat = new Rectangle('hình chữ nhật', 10, 7);
    $hinhvuong = new Square('hình vuông', 10, 10);

    $array = array($hinhtron, $hinhtru, $hinhchunhat, $hinhvuong);
    echo 'trước khi reisize: ' . '<br>';
    foreach ($array as $value) {
        echo $value->show() . '<br>';
        foreach ($value as $key => $value1) {
            echo $key . '=>' . $value1 . '<br>';
        }
    }
    echo 'sau khi risize: ' . '<br>';
    foreach ($array as $value) {
        $value->resize(50/100);
        echo $value->show() . '<br>';
        foreach ($value as $key => $value1) {
            echo $key . '=>' . $value1 . '<br>';
        }
    }
    ?>
</body>

</html>