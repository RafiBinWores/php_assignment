<?php

// Circle Class
class Circle
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle Class
class Rectangle
{
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}

// Square Class
class Square
{
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calculateArea(): float
    {
        return pow($this->side, 2);
    }
}

// Triangle Class
class Triangle
{
    private $base;
    private $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return 0.5 * $this->base * $this->height;
    }
}

// Parallelogram Class
class Parallelogram
{
    private $base;
    private $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->base * $this->height;
    }
}

// Create instances of shapes
$circle = new Circle(10);
$rectangle = new Rectangle(10, 5);
$square = new Square(10);
$triangle = new Triangle(10, 5);
$parallelogram = new Parallelogram(10, 5);

// Calculate and display areas
echo "Area of Circle: " . round($circle->calculateArea(), 2);
echo "<br>";
echo "Area of Rectangle: " . round($rectangle->calculateArea(), 2);
echo "<br>";
echo "Area of Square: " . round($square->calculateArea(), 2);
echo "<br>";
echo "Area of Triangle: " . round($triangle->calculateArea(), 2);
echo "<br>";
echo "Area of Parallelogram: " . round($parallelogram->calculateArea(), 2);
