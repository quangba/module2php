<?php
class Cricle extends Shape
{
    public function __construct($_name, $_radius)
    {
        parent::__construct($_name);
        $this->radius = $_radius;
    }
    public function calculateArea()
    {            // diện tích hình tròn
        return pow($this->radius, 2) * 3.14;          // công thức tính diện tích hình tròn 
    }
    public function calculatePerimeter()
    {       // chu vi hình tròn
        return 3.14 * $this->radius * 2;
    }
}
