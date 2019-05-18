<?php
include_once('connectCSDL.php');

$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
var_dump($id);
$sql = "DELETE FROM categories WHERE categoryCode='$id'";

$data = $connect->prepare($sql);
$data->execute();
var_dump($data);
header('location:them sua xoa.php');

