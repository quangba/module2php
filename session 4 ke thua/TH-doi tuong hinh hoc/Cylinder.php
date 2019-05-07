<?php
class Cylinder extends Cricle
{                                 //Cylinder: hình trụ
    public function __construct($_name, $_radius, $_height)
    {
        parent::__construct($_name, $_radius);
        $this->height = $_height;
    }
    public function calculateArea()                     // diện tích hình trụ
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolume(){                  // chu vi hình trụ
        return parent::calculateArea() * $this->height;
    }
    }
