<?php
class Cylinder extends Circle
{
    public function __construct($_radius, $_color, $_height)
    {
        parent::__construct($_radius, $_color);
        $this->height = $_height;
    }
    public function color()
    {
        return $this->color;
    }
    public function areaCylinder()
    {
        return parent::areaCircle()*$this->height;
    }
}
