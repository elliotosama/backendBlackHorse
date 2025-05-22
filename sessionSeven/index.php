<?php

/**
 * Class: Car

Properties:

brand

color

speed (default to 0)

Constructor to initialize brand and color => Done

Methods:

start() – prints "The [brand] car has started."

accelerate($amount) – increases speed by $amount

brake() – sets speed to 0

getStatus() – returns a string like: "Brand: Toyota, Color: Red, Speed: 60 km/h"

 */


// class Car {
//   private $color;
//   private $speed;
//   private $brand;

//   public function __construct($color, $brand) {
//     $this->color = $color;
//     $this->brand = $brand;
//     $this->speed = 0;
//   }

//   public function start() {
//     echo "The " . $this->brand . " car has started.";
//   }

//   public function accelerate($amoud) {
//     $this->speed += $amoud;
//   }

//   public function brake () {
//     $this->speed = 0;
//   }

//   public function getStatus() {
//     return "Brand: " . $this->brand ." , Color: " . $this->color . ", Speed: " . $this->speed ." km/h";
//   }
// }






// abstract class Animal {
//   abstract public function run();
// }


// class Dog extends Animal {
//   public function run() {
//     echo "the dog is running";
//   }
// }

// class Cat extends Animal {
//   public function run() {
//     echo "the cat is running";
//   }
// }

// $dog1 = new Dog();
// $dog1->run();
// echo "<br>";
// $cat1 = new Cat();
// $cat1->run();














// class Dog {
//   private $color;

//   public function setColor($c) {
//     $this->color = $c;
//   }
//   public function getColor() {
//     return $this->color;
//   }
// }


// class Animal {
//   private $color;
//   private $speed;

//   public function setColor($c) {
//     $this->color = $c;
//   }

//   public function getColor() {
//     return $this->color;
//   }


//   public function setSpeed($s) {
//     $this->speed = $s;
//   }

//   public function getSpeed() {
//     return $this->speed;
//   }
// }

// class AnimalTwo {
//   private $weight;
//   public function setWegith($w) {
//     $this->weight = $w;
//   }

//   public function getSpeed() {
//     return $this->weight;
//   }
// }


// class Dog extends Animal{
//   public function printAllInfo(): void {
//     echo "the color is " . $this->getColor() . " and the speed is " . $this->getSpeed();
//   }
// }





// Create an abstract class Shape and two classes Circle and Rectangle that calculate the area differently.


// abstract class Shape {
//   abstract public function getArea();
// }


// class Circle extends Shape {
//   private $radius;

//   public function __construct($radius) {
//       $this->radius = $radius;
//   }

//   public function getArea() {
//       return 3.14 * $this->radius * $this->radius;
//   }
// }

// class Rectangle extends Shape {
//   private $width;
//   private $height;

//   public function __construct($width, $height) {
//       $this->width = $width;
//       $this->height = $height;
//   }

//   public function getArea() {
//       return $this->width * $this->height;
//   }
// }

