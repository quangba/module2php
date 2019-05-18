<?php
    require_once "models/DBproducts.php";
    $database = new ProductDB();
    $database->connect();

    if(isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
    } else
    {
        $controller = '';
    }

    switch($controller)
    {
        case 'san-pham':
        {
            require_once('controllers/controller.php');
        }
    }
?>