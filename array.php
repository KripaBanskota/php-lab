<?php
// Sample array
$array = ["Apple", "Banana", "Cherry"];
$assocArray = ["first" => "John", "second" => "Jane", "third" => "Doe"];
$numbers = [4, 2, 8, 6];

// array_push()
array_push($array, "Date");
echo "After array_push: ";
print_r($array);

// array_shift()
$shifted = array_shift($array);
echo "\nAfter array_shift (removed $shifted): ";
print_r($array);

// array_search()
$search = array_search("Banana", $array);
echo "\narray_search('Banana'): $search";

// array_unshift()
array_unshift($array, "Elderberry");
echo "\nAfter array_unshift: ";
print_r($array);

// sort()
sort($numbers);
echo "\nAfter sort: ";
print_r($numbers);

// asort()
asort($assocArray);
echo "\nAfter asort: ";
print_r($assocArray);

// ksort()
ksort($assocArray);
echo "\nAfter ksort: ";
print_r($assocArray);

// rsort()
rsort($numbers);
echo "\nAfter rsort: ";
print_r($numbers);

// arsort()
arsort($assocArray);
echo "\nAfter arsort: ";
print_r($assocArray);

// krsort()
krsort($assocArray);
echo "\nAfter krsort: ";
print_r($assocArray);

// each()
echo "\nUsing each(): ";
while ($element = each($array)) {
    print_r($element);
}

// current(), reset(), end(), next(), pos(), prev()
echo "\nUsing current(): " . current($array);
echo "\nUsing next(): " . next($array);
echo "\nUsing end(): " . end($array);
echo "\nUsing prev(): " . prev($array);
echo "\nUsing reset(): " . reset($array);
echo "\nUsing pos(): " . pos($array);

// shuffle()
shuffle($array);
echo "\nAfter shuffle: ";
print_r($array);

// array_reverse()
$reversed = array_reverse($array);
echo "\nAfter array_reverse: ";
print_r($reversed);


echo "Lab 1 e <br>";
echo "kripa banskota<br>";
echo "BIT<br>";

?>