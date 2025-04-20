<?php

/**
 * 
 * 
 *   operatos {
    +, -, *, /, %, **
    =, -=, +=, *=, /=, %=
    ==, ===, !=, <>, !==, >, <, >=, <=, <=> {
      Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7
    ++x, --x, x++, x--
    and, or, xor, &&, ||, !
    . .=
    ternary operator condition? true: false
    }

  }
  control flow{
    if
    if else
    if ifelse if
    switch
  loops {
    for
    while
    do wihle
    foreach(one as x)
    break
    continue
  }

 */








// ==, ===, !=, !==, <>, >, <, >=, <=
// +, -, *, /, %, +=, *=, /=, %=, ++variable, variable++, --var, var--

// $var = 10 == 10 || 10 == 12;


/**
 * or gate (||)
 * 0 0   0
 * 1 0   1
 * 0 1   1
 * 1 1   1
 */



// $var = 10 == 10 && 2 == 2;


/**
 * and gate (&&)
 * 0 0   0
 * 1 0   0
 * 0 1   0
 * 1 1   1
 */



/**
 * not gate (!)
 * 0  1
 * 1  0
 */



// for($i = 1;$i<=100;$i++){
//    echo $i . " osama";
//    echo "<br>";
// }




// $i = 101;
// while($i <= 100){
//    echo $i . " osama";
//    echo "<br>";
//    $i++;
// }



// $i = 101;
// do {
//    echo $i . " osama";
//    echo "<br>";
//    $i++;
// }while($i <= 100);

// $sum = 0;
// $nums = [10, 20, 30, 40, 50];

// foreach($nums as $i) {
//    $sum += $i;
// }



// echo $sum;


// $i = 1;

// while($i <= 50) {
//    if($i == 20) {
//       $i++;
//       continue;
//    }
//    echo $i;
//    echo "<br>";
//    $i++;
// }



// $sum = 0;
// $nums = [10, 20, 30, 40, 50, 60];
// for ($i = 0; $i < sizeof($nums); $i++) {
//    if($nums[$i] == 30){
//       continue;
//    }

//    $sum += $nums[$i];
// }
// echo $sum;



// $names = ['ali', 'mohamed', 'osama', 'khalid'];


// $i = 0;

// while($i < sizeof($names)) {
//    if($names[$i] == 'osama'){
//       continue;
//    }
//    echo $names[$i];
// }





// function printName($name) {
//    echo "hello " . $name;
// }


// printName("ali");



// function plus($num1, $num2) {
//    echo $num1 + $num2;
// }


// plus(10, 20);






// osama ramadan esmail
// return osama ramadan esmail


// function fullName($firstName, $secondName, $lastName) {
//    return $firstName . " " . $secondName . " " . $lastName;
// }

// echo fullName("osama", "ramadan", "esmail");

?>

