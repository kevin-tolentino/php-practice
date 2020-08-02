<?php

#Loops - Execute code set number of times

//For, While, Do-while, Foreach

//For loop
//params - init, condition, incrementor

// for ($i=0; $i < 10; $i++){
//   echo 'Number '.$i;
//   echo '<br>';
// }

//while loop - usually when you don't know when the loop will stop
//params - condition

// $i = 0;
// while($i < 10){
//   echo $i;
//   echo '<br>';
//   $i++;
// }

//Do..While
// params - condition

// $i = 0;

// do{
//   echo 'number '. $i;
//   echo '<br>';
//   $i++;
// }

// while ($i < 10);

//Foreach loop - for arrays

// $people = array ('brad', 'jose', 'william');

// foreach($people as $person){
//   echo $person;
//   echo '<br>';
// }


//for each with an associative array
$people = array('brad' => 'brad@gmail.com', 'jose' => 'jose@gmail.com', 'william' => 'will@gmail.com');

foreach ($people as $person => $email) {
  echo $person. ': ' . $email;
  echo '<br>';
}
