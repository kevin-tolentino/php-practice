<?php
	//single line comment
	# single line comment

	/*

	Multi-line
	comment
	*/

	//Variable Rules
	/*
		- Prefix with the $, or it will be read as a constant
		- The variable starts with a letter or an underscore
				-- Only letters, numbers and underscores
				-- case-sensitive
  */

  //Data Types

  /*
      String
        -- can be in double or single quotes
      Integers
        -- positive or negative
      floats
      Booleans
      Arrays
      Objects
      NULL
      Resource
  */


  $output = 'Hello World!';
  $numb1 = 4;
  $numb2 = 10;
	$sum = $numb1 + $numb2;

	$string1 = 'Hello';
	$string2 = 'world!';
	//$greeting = $string1 . ' ' . $string2. '!'; // this is concatenation; easier way is using double quotes
	//$greeting2 = "$string1 $string2"; // single quotes will print exactly what you put in, it wont parse the variable

	//echo $greeting2;
		// in concatenation in php, you use a dot '.'

		//escape characters
//	$string3 = 'They\'re Here'; // escape only if it matches single quotes
	$string3 = "They're Here"; // if double quotes, it's the same thing

//	echo $string3;


  $float1 = 4.4;
  $bool1 = true;

	//echo $sum;

	//constants are values that you don't want to change, like a server name

	define('GREETING', 'Hello Everyone', true); // you need to use the define function and
		// add the third parameter allows it to be case insensitive

	echo greeting;

	?>
