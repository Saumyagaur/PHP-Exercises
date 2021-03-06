<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$x = 1; 

while($x <= 10) {
    echo "$x <br>";
    $x++;
} 




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
foreach (range(5, 100, 5) as $y) {
    echo "$y, ";
}

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

for ($z = 0; $z >= 100; $z++) {
    if ("$z % 2 = 1"){
    echo "$z, ";
    }
}




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$s = 0;
$food = array("Burrito", "Fries", "Pizza", "Burger");
/*
Use while-loop to print array elements (every food in a new row).
*/

while ($s < sizeof($food)) {
    echo "{$food[$s]}<br>";
    $s++;
    
}

/*
Use for-loop to print array elements (every food in a new row).
*/
for ($s = 0; $s < sizeof($food); $s++) {
    echo "{$food[$s]} <br> ";
}
/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($food as $item) {
    echo "$item <br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";
for ($s = 0; $s < sizeof($food); $s++) {
    echo "<li>{$food[$s]} <br></li>";
}
echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc = [
  "Burrito" => [
    "type" => "main course",
    "origin" => "Mexico"
  ],
  "Fries" => [
    "type" => "Entre",
    "origin" => "USA"
  ],
  "Pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
    
    "Burger" => [
    "type" => "main course",
    "origin" => "Canada"
  ]
];
/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
echo "<ul>";
foreach ($food_assoc as $g => $value) {
    echo "<li>$g</li><ul>";
    foreach ($food_assoc[$g] as $g => $value) {
        echo "<li>" . $g.': '. $value."</li>";
    }
    echo "</ul>";
}
echo "</ul>"
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
?>