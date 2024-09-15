<?php

// Base class
abstract class Animal
{
    abstract public function makeSound();
}

// Derived class Dog
class Dog extends Animal
{
    public function makeSound()
    {
        return "Dogs woofs!";
    }
}

// Derived class Cat
class Cat extends Animal
{
    public function makeSound()
    {
        return "Cats meows!";
    }
}

// Derived class Bird
class Bird extends Animal
{
    public function makeSound()
    {
        return "Birds chirps!";
    }
}

// Create instances of different animals
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$animals = [$dog, $cat, $bird];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
}
