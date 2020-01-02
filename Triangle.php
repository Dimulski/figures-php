<?php


class Triangle implements Figure
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}