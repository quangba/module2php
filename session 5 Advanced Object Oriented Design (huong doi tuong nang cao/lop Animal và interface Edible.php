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

interface Computer{
const MAX_SPEED = 4.0;
}

class Laptop implements Computer{
const MAX_SPEED = 3.0;
}

$lap = new Laptop();
echo 'Max speed: ' . $lap->MAX_SPEED;



    ?>
</body>

</html>