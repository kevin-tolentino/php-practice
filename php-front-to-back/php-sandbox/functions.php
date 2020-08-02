<?php
  //function - block of code that can be repeatedly called

  // How to format variable, classes, functions, etc.
    // Camel Clase - myFunction()
    //Lower Case - my_function()
    //Pascal Case - MyFunction() // used for classes

    //Defining the function
  function simpleFunction(){
    echo 'Hello World';
  }
  //Calling the function
  // simpleFunction();

  //Function with a param
  function sayHello($name = 'world'){ // we set a default value to the param
    echo "Hello $name<br>";
  }

  // sayHello('Joe');

  // sayHello('Tim');

  function addNumber($num1, $num2){
    return $num1 + $num2;

  }

  //echo addNumber(1,2); // echo what is returned from the function


  // Passing args by ref

  $myNum = 10;

  function addFive($num){ // passed by value
    $num = $num + 5;
  }

    function addTen(&$num){ // passed by reference
    $num = $num + 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>"
?>
