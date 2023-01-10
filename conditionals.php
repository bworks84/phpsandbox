<?php

/*
== equal to
=== identical to
!= not equal to
!== not identical to
------------------------------
if (condition) {
//code to be executed if condition is true
}
*/

// $age = 20;

// if ($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry, you are not old enough to vote';
// }
// ;


$posts = ['FIRST POST'];

$firstPost = $posts[0] ?? null;
echo $firstPost

  //echo !empty($posts) ? $posts[0] : 'No Posts';
  ?>