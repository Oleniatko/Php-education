<?php

abstract class Calculator
{
    protected $a;
    protected $b;

    function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    abstract function getResult();
}


class Division extends Calculator
{
    public function getResult()
    {
        if($this->b === 0.0)
        {
            echo "Сannot be divided by 0";
        } else 
        {
            return ($this->a / $this->b);
        }
    }
}

$resultDivision = new Division(15, 0);
echo $resultDivision->getResult() . PHP_EOL;


class Multiplication extends Calculator
{
    public function getResult()
    {
        return ($this->a * $this->b);
    }
}

$resultMultiplication = new Multiplication(3, 5);
echo $resultMultiplication->getResult() . PHP_EOL;


class Addition extends Calculator
{
    public function getResult()
    {
        return ($this->a + $this->b);
    }
}

$resultAddition = new Addition(3, 5);
echo $resultAddition->getResult() . PHP_EOL;


class Subtraction extends Calculator
{
    public function getResult()
    {
        return ($this->a - $this->b);
    }
}

$resultSubtraction = new Subtraction((3.3), 5);
echo $resultSubtraction->getResult() . PHP_EOL;