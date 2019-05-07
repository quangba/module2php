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
    class QuadraticEquation
    {
        private $a;
        private $b;
        private $c;
        public function __construct($_a, $_b, $_c)
        {
            $this->a = $_a;
            $this->b = $_b;
            $this->c = $_c;
        }

        public function getA()
        {
            return $this->a;
        }

        public function getB()
        {
            return $this->b;
        }

        public function getC()
        {
            return $this->c;
        }

        public function getDenta()
        {
            return ($this->b) * ($this->b) - 4 * ($this->a) * ($this->c);
        }

        public function get_nghiem_1()
        {
            return -(($this->b) + sqrt(($this->b) * ($this->b) - 4 * ($this->a) * ($this->c))) / (2 * ($this->a));
        }

        public function get_nghiem_2()
        {
            return -(($this->b) - sqrt(($this->b) * ($this->b) - 4 * ($this->a) * ($this->c))) / (2 * ($this->a));
        }

        public function get_nghiem_kep(){
            return -($this->b)/2*($this->a);
        }
    }
    $a = 5;
    $b = 4;
    $c = -1;
    $phuongtrinhbac2 = new QuadraticEquation($a, $b, $c);
    echo $phuongtrinhbac2->getDenta().'<br>';
    if($phuongtrinhbac2->getDenta()<0){
        echo 'phương trình vô nghiệm';
    }else if($phuongtrinhbac2->getDenta()===0){
        echo 'phương trình có 1 nghiệm kép: '.$phuongtrinhbac2->get_nghiem_kep();
    }
    else{
        echo 'phương trình có 2 nghiệm'.'<br>';
        echo 'nghiệm 1: '.$phuongtrinhbac2->get_nghiem_1().'<br>';
        echo 'nghiệm 2: '.$phuongtrinhbac2->get_nghiem_2();
    }
    ?>
</body>

</html>