<?php
//   echo date('d').'<br>'; // Day
//   echo date( 'm').'<br>'; // Month
// echo date('Y').'<br>'; // Year

//   echo date('Y/m/d');

//time

// echo date('h');// hour
// echo date('i'); // min
// echo date('s'); // sec
// echo date('a'); // AM or PM

  //set time zone
  // date_default_timezone_set('America/Los_Angeles');


// echo date('h:i:sa');

  $timestamp = mktime(10, 14, 54, 9, 10, 1981);

  //echo $timestamp;// must be changed to a readable date


  // echo date('m/d/Y h:i:sa', $timestamp);

  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');

  // echo $timestamp2;

  echo date('m/d/Y h:i:sa', $timestamp3);

?>
