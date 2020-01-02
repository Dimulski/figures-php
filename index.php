<?php
include "Figure.php";
include "Rectangle.php";
include "Square.php";
include "Triangle.php";

$rectangle = new Rectangle(5, 2);
$square = new Square(4);
$triangle = new Triangle(3);
$stack = array($rectangle, $square, $triangle);

foreach ($stack as $figure => $f) {
  echo get_class($f) . ' perimeter: ' . $f->getPerimeter() . '<br/>';
}

?>
