<?php

#Array - holds multiple values
/* 

  - Indexed
  - Associative
  - Multi-dimensional 

*/

// Indexed
$people = array('Kevin', 'Sarah', 'Joey');
#echo $people[1];

$ids = array(23, 44, 38, 16, 2);
#echo $ids[2];

$cars = ['Honda', 'Ford', 'Toyota', 'Hyundai'];
#echo $cars[3]
$cars[3] = 'BMW'; # changes value at index of 3
$cars[] = 'Chevrelot'; #adds value to end of array

#find number of elements in array
#echo count($cars);

#print element and index of each element
#print_r($cars);

# prints array, count of elements, types of values, and element with index
#var_dump($cars)


// Associative Array

$people = array('Brad' => 35, 'Jose' => 28, 'Will' => 17);
#echo $people['Brad']; #input the key and print the value (key/value pair)
$ages = [22 => 'Cooper', 25 => 'Riley', 64 => 'Harry'];
#echo $ages[22];

#add to array
$people['Jill'] = 30;

#print_r($people);


# Multi-dimensional 

$cars = array(
  array('Honda', 20, 15),
  array('Toyota', 30, 25),
  array('Ford', 42, 7)
);

echo $cars[1][2]; #Toyota array, 3rd element (25)
echo $cars[2][1]; #Ford array, 2nd element (42)
?>