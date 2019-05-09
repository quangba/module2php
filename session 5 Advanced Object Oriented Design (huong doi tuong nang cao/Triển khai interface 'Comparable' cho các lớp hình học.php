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

    class Circle
    {
        public $radius;
        public $name;

        public function __construct($name, $radius)
        {
            $this->radius = $radius;
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getRadius()
        {
            return $this->radius;
        }

        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
    }
    interface Comparable
    {
        public function compareTo($objOther);
    }
    class ComparableCircle extends Circle implements Comparable
    {
        public function __construct($name, $radius)
        {
            parent::__construct($name, $radius);
        }

        public function compareTo($circleOther)
        {
            $circleOtherRadius = $circleOther->getRadius();

            if ($this->getRadius() > $circleOtherRadius) {
                return "lớn hơn";
            } else if ($this->getRadius() < $circleOtherRadius) {
                return "bé hơn";
            } else {
                return "bằng nhau";
            }
        }
    }
    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 9);

    echo ($circleOne->compareTo($circleTwo));
    ?>
</body>

</html>