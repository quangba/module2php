<?php
class Circle
{
    public function __construct($_radius, $_color)
    {
        $this->radius = $_radius;
        $this->color = $_color;
    }
    public function areaCircle()
    {
        return pow($this->radius, 2) * 3.14;
    }
}
