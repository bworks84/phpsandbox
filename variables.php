#localhost/path/to/file

hello
<h1>uses html syntax as well</h1>


<?php

# COMMENTS
//  echo is faster than print in php
#   also works for single line comments
/*
  multi-line comments
*/

# GENERAL RULES
/* 
  - Lines end with ; 
*/

#VARIABLES
/*
  - Prefix with $
  - Start with a letter or an underscore
  - Case sensitive
  - Only letters, numbers and underscore
*/

#DATA TYPES
/* 
  - String
  - Integers
  - Floats 
  - Booleans
  - Arrays
  - Objects
  - NULL
  - Resource (not an actual data type)

*/

$output = "Hello Guam!";
#echo $output;

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
#echo $sum;

$string1 = "Mowglie";
$string2 = "Bear";
$string3 = "What's up yall"; # only need to escape if using the same quotations marks
$string4 = 'What\'s up yall';

echo $string3;
$my_dog = $string1 . ' ' . $string2;
$my_dog2 = "$string1 $string2";
#echo $my_dog;
#echo $my_dog2;

$float1 = 4.4;
$bool1 = true;

#Only use CONSTANTS when you know the value will remain CONSTANT
define('GREETING', 'Hello Everyone');
echo GREETING;
?>