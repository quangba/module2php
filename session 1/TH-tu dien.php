<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        .find {
            height: 200px;
            width: 300px;
            margin: 10px;
            padding: 10px;
            border: 10px #CCC solid;
        }
        .find {
            padding: 5px;
            margin: 20px;
        }
    </style>
    <form method="post">
        <div class="find">
            <h1>Từ Điển Anh - Việt</h1>
            <input type="text" name="seach" size="25" placeholder="nhập từ cần tìm">
            <input type="submit" name="submit" value="Tìm">
        </div>
    </form>
    <?php
    $tudien = array(
        'hello' => 'xin chào',
        'how' => 'thế nào',
        'book' => 'sách',
        'computer' => 'máy tính',
        'pen' => 'bút'
    );
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $seach = $_POST['seach'];
        $result = null;
        foreach ($tudien as $word => $vnese) {
            if ($word === $seach) {
                $result = $vnese;
                break;
            }
        }
        if ($result != null) {
            echo "Kết quả: " . $result;
        } else {
            echo "Không tìm thấy";
        }
    }
    ?>
</body>

</html>