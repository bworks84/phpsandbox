<?php

# LOOPS - Executes code set number of times

/* 
for
while
do...while
for each
*/

# For loop
# @params - init, condition, inc
// for ($i = 0; $i < 10; $i++) {
//   echo $i;
//   echo '<br>';
// }

# while loop - used over for loop if set condition is unknown
# @params - condition

// $i = 0;
// while ($i < 15) {
//   echo $i;
//   echo '<br>';
//   $i++;
// }

# For each loop - for arrays
$people = array('Brad', 'Jose', 'William');

foreach ($people as $person) {
  echo $person;
  echo '<br>';
}

$people1 = array('Brad' => 35, 'Jose' => 28, 'Will' => 17);

foreach ($people1 as $person => $age) {
  echo $person . ': ' . $age;
  echo '<br>';
}
?>