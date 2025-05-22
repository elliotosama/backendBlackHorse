<?php

//     String
//     Integer
//     Float (floating point numbers - also called double)
//     Boolean
//     Array
//     Object
//     NULL
//     var_dump() => datatype
//     type casting (string) $var


// some string functions

//     strlen()
//     str_word_count()
//     strpos(sring, search)
//     strtoupper
//     strtolower
//     str_replace(replaced, replacewith, string)
//     strrev()
//     trim()
//     explode(delemeter, string) => string to array
//     implode()
//     substr(string, start, count)
//     substr(string, start) => slice all string
//     escape character






// $age = 19;
// echo var_dump($age);


// $salary = 2000.101;
// echo var_dump($salary);


// $name = "Osama";
// echo $name;

// echo "<br>";

// $name = "mohamed";
// echo $name;

// =================

// $names = ["Osama", "Ali", "Khaled"];

// $names = array("Osama", "Ali", "Khalid", "Ramadan");

// print_r($names);

// ==========================


// boolean 

// $isMale = false;

// echo var_dump($isMale);
// ==============================

// strlen()

// $name = "Osama is a programmer";


// echo strlen($name);
// ==================================

// str_word_count()

// $name = "Osama is a programmer";

// echo str_word_count($name);

// ===================================

// strpos()

// $name = "Osama is a great programmer and also a great programmer";

// echo strpos($name, "programmer");
// =====================================


// $name = "osama Is a great programmer";


// echo strtoupper($name);

// =================================


// $name = "OSAMA IS A PROGRAMMER";
// echo strtolower($name);
// ======================================

// str_replace() 

// $name = "osama is a programmer and a programmer also";
// echo $name;
// echo "<br>";
// echo str_replace("programmer", "developer", $name);
// ===========================================


// strrev()

// $name = "osama is a programmer";
// echo $name;
// echo "<br>";
// echo strrev($name);
// ====================================

// trim()

// $name = "#############osama############";

// echo $name;
// echo "<br>";
// echo trim($name, "#");
// ========================================


// explode(delemeter, string) => string to array

// $name = "osama is a programmer";
// $array = explode(" ", $name);

// echo "<br>";

// ========================================

// implode()

// $names = ['Osama', 'is', 'a', 'programmer'];
// print_r($names);
// echo "<br>";

// echo var_dump(implode($names));
// =========================================



//     substr(string, start, count)
//     substr(string, start) => slice all string


// $name = "osama is a programmer";


// $substring = substr($name, offset: 6);
// echo $substring;
// =====================================



// == 1 == '1'
// ===  1 === '1'
// <, > 
// >=, <=
// != 
// <>
// ==, ===, !=, <>, !==, >, <, >=, <=




// if(10 <= 1) {
//   echo "true";
// }

// if(1 != 1) {
//   echo "true";
// } else {
//   echo "false";
// }


// $country = 'usa';
// $price = 100;
// if($country == 'egypt') {
//   $price = $price - 30;
// } elseif($country == 'usa') {
//   $price = $price - 10;
// } elseif ($country == 'ksa') {
//   $price  = $price - 30;
// } else {
//   $price = $price + 10;
// }
// echo $price;
// ======================================

// switch

// $country = 'usa';
// $price = 100;
// switch($country) {
//   case 'egypt':
//     $price = $price - 40; 
//   break;
//   case 'ksa':
//     $price = $price - 30;
//   break;
//   default:
//     $price = $price + 10;
// }

// echo $price;



//task

/*
  1- convert the string to uppercase
  "Hello from Black Horse"

  2- convert the strin to lowercase
  "osama Is A Programmer"

  3- return the following strint from "Osama is a programmer and a developer"
  is a progr

  4- reverse the following string
  "hello from black horse"


  5- trim the string "**************hello*********"
  hello
*/

?>
