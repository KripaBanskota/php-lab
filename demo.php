<?php

// Sample associative array
$students = array(
    "Ram" => 20,
    "shyam" => 21,
    "Sabina" => 21,
    "Sarita" => 21
);

// Using foreach loop to iterate through the array
echo "Using foreach loop:<br>\n";
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Demonstrating iterator functions properly
reset($students); // Reset internal pointer
echo "Using iterator functions:<br>\n";
echo "Current element: " . current($students) . "<br>\n"; // Get current element
echo "Next element: " . next($students) . "<br>\n"; // Move to next element
echo "Previous element: " . prev($students) . "<br>\n"; // Move back to previous element
end($students); // Move internal pointer to the last element
echo "End element: " . current($students) . "<br>\n"; // Get last element
reset($students); // Reset back to the beginning

// Shuffle the array and display shuffled elements
$keys = array_keys($students); // Get the keys of the array
shuffle($keys); // Shuffle the keys
$shuffled_students = array(); // Initialize shuffled array
foreach ($keys as $key) {
    $shuffled_students[$key] = $students[$key];
}

echo "Shuffled array (shuffle()):<br>\n";
foreach ($shuffled_students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Reverse the array and display reversed elements
$reversed_students = array_reverse($students);
echo "Reversed array (array_reverse()):<br>\n";
foreach ($reversed_students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Search for a specific value and display its key
$search_key = array_search(21, $students);
echo "Key of value 21: $search_key<br>\n\n";

// Sort the array by values and display sorted elements
asort($students);
echo "Sorted associative array by value (asort()):<br>\n";
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Sort the array in reverse order by values and display sorted elements
arsort($students);
echo "Sorted associative array by value in reverse order (arsort()):<br>\n";
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Sort the array by keys and display sorted elements
ksort($students);
echo "Sorted associative array by key (ksort()):<br>\n";
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

// Sort the array in reverse order by keys and display sorted elements
krsort($students);
echo "Sorted associative array by key in reverse order (krsort()):<br>\n";
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>\n";
}

echo"<br>";

echo "Lab 1e<br>";
echo "kripa banskota<br>";
echo "BIT<br>";

?>

