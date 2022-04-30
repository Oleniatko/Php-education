<?php

interface iFigure
{
    function getAreaOfFigure();
    function getPerimetrOfFigure();
}


class Rectangle implements iFigure
{
    private $width, $length;

    function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getAreaOfFigure()
    {
        if($this->width <= 0 || $this->length <= 0) 
        {
            return "Incorrect value";
        } else 
        {
            return $this->width * $this->length;
        }
    }

    public function getPerimetrOfFigure()
    {
        if($this->width <= 0 || $this-> length <= 0) 
        {
            return "Incorrect value";
        } else
        {
            return ($this->width + $this->length) * 2;
        }
    }
}

$rectangle = new Rectangle(1, 3);

echo $rectangle->getAreaOfFigure() . PHP_EOL;
echo $rectangle->getPerimetrOfFigure() . PHP_EOL;


class Square implements iFigure
{
    private $sideLength;

    function __construct(int $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function getAreaOfFigure()
    {
        if($this->sideLength <= 0) 
        {
            return "Incorrect value";
        } else 
        {
            return $this->sideLength * $this->sideLength;
        }
    }

    public function getPerimetrOfFigure()
    {
        if($this->sideLength <= 0) 
        {
            return "Incorrect value";
        } else 
        {
            return $this->sideLength * 4;
        }
    }
}

$square = new Square(5);

echo $square->getAreaOfFigure() . PHP_EOL;
echo $square->getPerimetrOfFigure() . PHP_EOL;











