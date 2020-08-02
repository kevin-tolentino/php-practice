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
?>
