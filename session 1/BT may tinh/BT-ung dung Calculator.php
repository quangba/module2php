<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .calculator {
        height: 350px;
        width: 200px;
        margin: 20px;
        padding: 20px;
        border: 5px #CCC solid;
    }

    .calculator input {
        margin: 5px;
        padding: 2px;
    }
</style>

<body>
    <form method="post">
        <div class="calculator">
            <h1>Simple Calculator</h1>
            First operand: <input type="text" name="number"><br>
            Operator: <select name="pheptinh">
                <option value="phepcong">cộng(+)</option>
                <option value="pheptru">trừ(-)</option>
                <option value="phepnhan">nhân(*)</option>
                <option value="phepchia">chia(/)</option>
            </select><br>
            Second operand: <input type="text" name="number1"><br>
            <input type="submit" value="calculator">
            <div>
                <?php
                include "calculate.php";
                ?>
            </div>
        </div>

    </form>


</body>

</html>