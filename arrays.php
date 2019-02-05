<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    "Burger",
    "Sandwich",
    "Noodles",
    "Soup"];

/*
Print every array element in a new line.
*/

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";



// task separator

echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
        <li>$food[0]</li>
        <li>$food[1]</li>
        <li>$food[2]</li>
        <li>$food[3]</li>
    </ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = array("Burger"=>"Main Course", "Soup"=>"Starters", "Noodles"=>"Main Course", "Sandwich"=>"Main Course");
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $food[0] . " | " . $food_assoc['Burger'] . "<br>";
echo $food[1] . " | " . $food_assoc['Sandwich'] . "<br>";
echo $food[2] . " | " . $food_assoc['Noodles'] . "<br>";
echo $food[3] . " | " . $food_assoc['Soup'] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = array(array("Burger","Main Course","America"), array("Sandwich","Main Course","England"), array("Noodles","Main Course","China"), array("Soup","Starter","Italy"));
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food_assoc[0][0] . " | " . $food_assoc[0][1] . " | " . $food_assoc[0][2] ."<br>";
echo $food_assoc[1][0] . " | " . $food_assoc[1][1] . " | " . $food_assoc[1][2] ."<br>";
echo $food_assoc[2][0] . " | " . $food_assoc[2][1] . " | " . $food_assoc[2][2] ."<br>";
echo $food_assoc[3][0] . " | " . $food_assoc[3][1] . " | " . $food_assoc[3][2] ."<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>{$food[0]}</td>
    <td>{$food_assoc[0][1]}</td>
    <td>{$food_assoc[0][2]}</td>
  </tr>
  <tr>
    <td>{$food[1]}</td>
    <td>{$food_assoc[1][1]}</td>
    <td>{$food_assoc[1][2]}</td>
  </tr>
  <tr>
    <td>{$food[2]}</td>
    <td>{$food_assoc[2][1]}</td>
    <td>{$food_assoc[2][2]}</td>
  </tr>
  <tr>
    <td>{$food[3]}</td>
    <td>{$food_assoc[3][1]}</td>
    <td>{$food_assoc[3][2]}</td>
  </tr>
</table>"
?>