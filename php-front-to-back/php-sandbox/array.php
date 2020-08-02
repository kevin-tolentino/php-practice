<?php
  //Array - variable that holds multiple values
   // There are three types
    // -Indexed
    // -Associative
    // -Multi-Dimenstional

  //Indexed Arrayed
  $people = array('Kevin', 'Jeremy', 'Sara');

 // echo $people[0];

 $ids = array(23, 44, 12);
//  echo $ids[1];

$cars = ['Honda', 'Toyota', 'Ford'];
// echo $cars[2];

$cars[] = 'chevy';

// echo $cars[3];

  // print_r($cars);

  // var_dump($cars);

  // Associative Arrays
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);

  // echo $people['Brad'];

  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

  // echo $ids[22];

  //adding to an associative array

  $people['Jill'] = 42;
// echo $people['Jill']

// print_r($people);
// var_dump($people);

//Multi-Dimensional Array

$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 20),
  array('Ford', 23, 12)
);

echo $cars[1][2];



  ?>
