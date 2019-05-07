<?php class Rectangle extends Shape{
            public function __construct($_name,$_width,$_height)
            {
                parent :: __construct($_name);
                $this->width = $_width;
                $this->height = $_height;
            }
            public function calculateArea(){            // diện tích hình chữ nhật
                return $this->width*$this->height;
            }
            public function calculatePerimeter(){       // chu vi hình chữ nhật
                return ($this->width+$this->height)*2;
            }
        }
        ?>