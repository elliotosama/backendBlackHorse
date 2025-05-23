<?php

// function hello() {
//   return 'hello world';
// }


// $varName;

// $nums = [10, 20, 30, 40];

// $newArray = array_map(function($e) {
//   return $e * 2;
// }, $nums);


// print_r($newArray);








// class Car{
//   public $color;
//   public $speed;

//   public function accelerate() {
//     echo "the speed of the car is incresing";
//   }
// }


// $car1 = new Car();


// $car1->color = 'blue';

// echo $car1->color;

// $car1->accelerate();






// Dog
  // color
  // speed

  // run
  // bark


// Cat
  // weight
  // color
  
  // eat
  // sleep



// class Dog {
//   public $color;
//   public $speed;

//   public function bark() {
//     echo "the dog is barking";
//   }

//   public function run() {
//     echo "the dog is running";
//   }
// }

// class Cat {
//   public $weight;
//   public $color;
  
//   public function eat() {
//     echo "cat is eating";
//   }
//   public function sleep() {
//     echo "cat is sleeping";
//   }
// }


// $dog1 = new Dog();
// $dog1->color = 'red';
// $dog1->speed = 2;
// echo 'the colors is ' . $dog1->color;
// echo "<br>";
// echo 'the speed is ' . $dog1->speed;
// $dog1->bark();
// echo "<br>";
// $dog1->run();

// echo "<br>";
// $cat1 = new Cat();
// $cat1->weight = 1;
// $cat1->color = 'orange';
// echo 'the weight is ' . $cat1->weight;
// echo "<br>";
// echo 'the color is ' . $cat1->color;
// $cat1->eat();
// $cat1->sleep();



// class Dog {
//   public $color;

//   public function run() {
//     echo 'the dog is running';
//   }


//   public function __construct($c, $s){ 
//     $this->color = $c;
//     $this->speed = $s;
//   }

// }

// $myDog = new Dog('red', 8);
// echo "<br>";


// echo $myDog->color;
// echo "<br>";
// echo $myDog->speed;




// class Student {

//   private $name;


//   public function setName($n) {
//     $this->name = $n;
//   }

//   public function getName() {
//     return $this->name;
//   }
// }


// public
// protected
// private



// $studentOne = new Student();
// $studentOne->setName('osama');
// echo $studentOne->getName();


// Teacher
// priavte name
// private id
// private salary
// public setName
// public setId
// public setSalary
// public getName
// public getId
// public getSalary

// count the number of objects



// class Teacher {
//   public static $count = 0;
//   private $name;
//   private $id;
//   private $salary;


//   public function setName($n) {
//     $this->name = $n;
//   }

//   public function setId($i) {
//     $this->id = $i;
//   }

//   public function setSalary($s) {
//     $this->salary = $s;
//   }

//   public function getName() {
//     return $this->name;
//   }

//   public function getId() {
//     return $this->id;
//   }

//   public function getSalary() {
//     return $this->salary;
//   }


//   public function __construct() {
//     Teacher::$count++;
//   }
// }


// $teacherOne = new Teacher();
// $teacherOne->setName('osama');

// echo $teacherOne->getName();

// echo "<br>";

// $teacherTwo = new Teacher();
// $teacherTwo->setName('ali');
// echo $teacherTwo->getName();

// echo "<br>";

// echo Teacher::$count;







abstract class Animal {
  abstract public function run();
  public function normalMethod() {
    // adding some code;
  }
}

class Dog extends Animal {
  public function run () {
    echo 'the dog is running';
  }
}

class Cat extends Animal {
  public function run() {
    echo 'the cat is running';
  }
}


// $dog1 = new Dog();
// $dog1->run();