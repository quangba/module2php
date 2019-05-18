<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stype.css">
    <title>Quản lý thành viên</title>
</head>
<body>
    
</body>
</html>

<?php
    include_once('model\DBconfig.php');
    $db = new Database;
    $db->connect();

    if(isset($_GET['controller'])){                 //chạy CSS
        $controller = $_GET['controller'];
    }
    else{
        $controller='';
    }
    switch($controller){
        case 'thanh-vien' :{
            require_once("controller\controller.php");
        }
    }
?>  