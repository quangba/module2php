<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .class {
        height: 200px;
        width: 300px;
        margin: 20px;
        padding: 10px;
        border: 5px #CCC solid;
    }

    .class input {
        margin: 2px;
        padding: 5px;
    }
</style>

<body>
    <form method="post">
        <div class="class">
            <h1>Đọc số thành chữ</h1>
            <input type="text" name="seach" id="seach" placeholder="nhập vào ...">
            <input type="submit" name="submit" value="tìm">
        </div>
    </form>
    <?php
    $number = array(
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nice',
        10 => 'ten'
    );
    
        $seach = $_POST['seach'];
        $result = null;
        foreach ($number as $index => $value) {
            if ($index == $seach) {
                $result = $value;
                break;
            }
        }
        if ($result != null) {
            echo $result;
        } else {
            echo 'out of ability';
        }
    
    ?>
</body>

</html>