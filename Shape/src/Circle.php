<?php 

namespace App;
use App\Shape;


class Circle extends Shape
{
    private $r=10;
    
    public function getArea()
    {
        return M_PI*$this->r*$this->r;
    }   
}

