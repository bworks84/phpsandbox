<?php
# FUNCTIONS

/* 
Camel Case - myFunction()
Lower Case - my_function()
Pascal Case - MyFunction()
*/

# Define function
function simpleFunction()
{
  echo 'Hello Rob';
}
#call function
#simpleFunction();

function sayHello($name)
{
  echo "Hey $name<br>";
}

#sayHello('Mowglie')

#***echo is like print or console.log****
#if you echo in function block, then you only need to call func with params
#if you return in func block, then you need to echo function call with values
function addNumbers($num1, $num2)
{
  echo $num1 + $num2;
}
#addNumbers(5, 10)

// Pass value by reference using &$myVar
$myNum = 15;
function addFive($num)
{
  $num += 5;
}
function addTen(&$num)
{
  $num += 10;
}
addFive($myNum);
echo "Value: $myNum<br>";
echo "Value doesn't change<br>";

addTen($myNum);

echo "Value: $myNum<br>";
echo "value changes because the value is passed into the argument param by reference"


  ?>