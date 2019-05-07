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
    class Person
    {
        public $name = 'chua biet';
        public $age;
        public static $gender = 'nam';
        public static function getConnect()
        {
            echo 'connect  OK';
        }
        function __construct($age)
        {
            $this->age = $age;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
    }

    echo Person::$gender . '<br>';
    echo Person::getConnect();
    // $obj = new Person(3);
    // var_dump($obj);
    // echo '<br>';
    // $obj->setName('ba');
    // echo $obj->name;
    ?>
</body>

</html>