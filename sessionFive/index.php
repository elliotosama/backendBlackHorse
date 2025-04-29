<?php








class Animal {
  private $color;

  public function setColor($c) {
    $this->color = $c;
  }

  public function getColor() {
    return $this->color;
  }
}



$a1 = new Animal();


$a1->setColor('green');
echo "the color is " . $a1->getColor();













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

