<?php


class Square implements Figure
{

  private $a;

  public function __construct($a)
  {
    $this->a = $a;
  }

  function set_a($a) {
    $this->a = $a;
  }

  public function getPerimeter()
  {
    return $this->a * 4;
  }
}