<?php

//Conditionals
/*
          ==
          ===
          <
          >
          <=
          >=
          !=
          !==


    */

// $num = 6;

// if ($num >= 6){
//   echo "5 passed";
// } else if ($num === 6){
//   echo '6 passed';
// } else {
//   echo 'did not passed';
// }

// $num = 5;
//   if ($num > 4 && $num < 10){ // XOR is when one has to be true but not both
//     echo "$num passed";
//   }

$favColor = 'indigo';

switch ($favColor) {
  case 'red':
    echo 'your favorite color is red';
    break;
  case 'blue':
    echo 'your favorite color is blue';
    break;
  case 'green':
    echo 'your favorite color is green';
    break;
  default:
    echo 'your favorite color is something else';
}
