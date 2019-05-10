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
    abstract class Animal
    {
        public function makeSound()
        { }
    }

    interface Edible
    {
        public function howToEat();
    }

    class Tiger extends Animal
    {
        public function makeSound()
        {
            return 'báo kêu: wow wao woa...';
        }
    }

    class Chicken extends Animal implements Edible
    {
        public function makeSound()
        {
            return 'gà kêu: chip chip chip...';
        }
        public function howToEat()
        {
            return 'ăn gà: mình lên chảo để chiên';
        }
    }

    abstract class Fruit implements Edible
    { }

    class Orange extends Fruit
    {
        public function howToEat()
        {
            return 'ăn cam: lột võ mình rồi ăn nhé!';
        }
    }
    class Apple extends Fruit
    {
        public function howToEat()
        {
            return 'ăn táo: ăn mình nhớ đừng ăn hột nhé!';
        }
    }

    $tiger = new Tiger();
    echo $tiger->makeSound() . '<br>';
    $chicken = new Chicken();
    echo $chicken->makeSound() . '<br>';
    echo $chicken->howToEat() . '<br>';
    $orange = new Orange();
    echo $orange->howToEat() . '<br>';
    $apple = new Apple();
    echo $apple->howToEat();



    ?>
</body>

</html>