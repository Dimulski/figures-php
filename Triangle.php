<?php


class Triangle implements Figure
{

  private $a;

  public function __construct($a)
  {
    $this->a = $a;
  }

  public function getA()
  {
    return $this->a;
  }

  public function setA($a)
  {
    $this->a = $a;
  }

  public function getPerimeter()
  {
    return $this->a * 3;
  }


}