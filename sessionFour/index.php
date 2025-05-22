<?php

/**
 * 
 * array()
    accessing the items
    associative array
    adding values
    updaing values
    arrayName[] = "one" adding new item to an array
    array_push(arrayName, items) => to add multible array items
    array += [items]
    array_splice(array, start, count) => remove items
    unset(array[1])
    array_diff(array, [itemOne, itemTwo]) => return a new array without the items
    array_pop(array)
    array_shift(array)
    sort
    rsort => desc
    asort => according to the value
    ksort => according to the key
    arsort => desc according to the value
    krsort => desc according to the key
    shuffle
    count() => items of the array
    sizeof()
    array_filter(array, callbackfunction)
    array_map
    array_pad => insert a specific number of items
    array_push
    array_search
    array_reverse
    array_slice
    array_unique
  }
 */




//  $names = ['osama', 'ali', 'mohamed', 'khalid'];
 // if i want to push an item at the end of the array
//  array_push($names, 'mohamed'); 
 // ['osama', 'ali', 'mohamed', 'khalid', 'mohamed]


 // remove item at the end of the array
// array_pop($arrayName);


// add item at the beginning of the array
// array_unshift(Arrayname, item);

// remove item at the beginning of the array
// array_shift(arrayName);

// sort the array
// sort(ArrayName);

//reverse array
// array_reverse(arrayName);


// get the unique elements from the array
// array_unique(arrayName);

// get the size of the array
// sizeof(ArrayName);


// loop over all elements in the array and perform a function on them
// array_map(array, function($e) {
//  echo $e
//}) // this code will iterate over the array and print its items


 // remove specific items from array
  // array_splice($names, 1, 2); => remove from array names start from index 1 and remove 2 items
  //['osama', 'ali', 'mohamed', 'khalid'] => ['osama', 'khalid']

