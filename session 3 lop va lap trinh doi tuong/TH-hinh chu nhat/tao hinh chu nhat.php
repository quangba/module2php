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
class Rectangle
{
    public $width;
    public $height;
    public function rectangle($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function dientich(){
        return $this->width*$this->height;
    }
    public function chuvi(){
        return ($this->width+$this->height)*2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$width = 30;
$height = 20;
$obj= new Rectangle($width,$height);
echo 'chiều dài hình chữ nhật là: '.$obj->width.'<br>';
echo 'chiều cao hình chữ nhật là: '.$obj->height.'<br>';
echo 'diện tích hình chữ nhật là: '.$obj->dientich().'<br>';
echo 'chu vi hình chữ nhật là: '.$obj->chuvi().'<br>';
echo $obj->display();
?>
</body>
</html>