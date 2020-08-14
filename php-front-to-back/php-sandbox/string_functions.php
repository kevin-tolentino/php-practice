<?php
// substr()
// returns a portion of a string

// $output = substr('Hello', -2);
// $output = substr('Hello', 1, 3);

// echo $output;

// strlen() - returns length of a string
//

// $output = strlen("hello world");

// echo $output;

//strpos() - finds the position of the first occurence of a substring

// $output = strpos('Hello World', 'o');
// echo $output;

// $output = strrpos('Hello World', 'o'); // finds last occurrence
// echo $output;

//trim() - trims whitespace

// $text = 'Hello World                ';
// var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed); // using for form input

//strtoupper = Make everything to uppercase

// $output = strtoupper('hello world');
// echo $output;

// $output = strtolower('Hello world');
// echo $output;

//ucwords() - Captialize Every Word;

// $output = ucwords('hello world');
// echo $output;

//str_replace() - replace all occurences of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

//is_string()
//Check if string

// $val = '22';
// $output = is_string($val);

// echo $output;

// $values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];

// foreach($values as $value){
//   if(is_string($value)){
//     echo "{$value} is a string<br>";
//   }
// }

//gzcompress() - Compress a string

$string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae magni deleniti minima temporibus illo natus facere numquam. Voluptatum, corrupti.';

$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress($compressed);

echo $original;
