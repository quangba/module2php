<?php
try {
    $connect = new PDO('mysql:host=127.0.0.1;dbname=quanly_thuvien', 'root', '');    //tạo kết nối và sử dụng tiếng việt
} catch (Exception $e) {
    die('could not connect mysql');
}
