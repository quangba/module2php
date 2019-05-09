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
            // ABSTRACT
    // abstract class fruit
    // {
    //     private $_color;

    //     abstract public function eat();
    //     public function setColor($mausac)
    //     {
    //         $this->mausac = $mausac;
    //     }
    //     public function getColor()
    //     {
    //         return $this->mausac;
    //     }
    // }
    // class Quatao extends fruit
    // {
    //     public function eat()
    //     {
    //         echo 'ăn nhả hạt' . '<br>';
    //     }
    // }
    // class Quacam extends fruit
    // {
    //     public function eat()
    //     {
    //         echo 'bóc võ rồi ăn' . '<br>';
    //     }
    // }
    // $quatao = new Quatao;
    // $quatao->setColor('mau xanh');
    // echo $quatao->getColor() . '<br>';
    // $quatao->eat();
    // $quacam = new Quacam;
    // $quacam->eat();
            // INTERFACE
    interface Bay
    {
        public function fly();
    }
    interface Boi
    {
        public function swim();
    }
    class Chim
    {
        public $name = 'hoang';
        public function ifo()
        {
            echo "i am a {$this->name}" . '<br>';
        }
    }
    class Chimcanhcut extends Chim implements Boi
    {
        public $name = 'chimcanhcut';
        public function swim()
        {
            echo 'toi co the boi' . '<br>';
        }
    }
    class Chimbocau extends Chim implements Bay
    {
        public $name = 'chimbocau';
        public function fly()
        {
            echo 'toi co the bay' . '<br>';
        }
    }
    class Vit extends Chim implements Bay, Boi
    {
        public $name = 'vit';
        public function swim()
        {
            echo 'toi co the boi' . '<br>';
        }
        public function fly()
        {
            echo 'toi co the bay' . '<br>';
        }
    }
    $vit = new Vit();
    $vit->fly();
    $vit->ifo();
    
    ?>

</body>

</html>