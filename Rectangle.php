<?php


class Rectangle implements Figure
{
  private $a;
  private $b;

  public function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
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

  public function getPerimeter()
  {
    return $this->a * 2 + $this->b * 2;
  }
}