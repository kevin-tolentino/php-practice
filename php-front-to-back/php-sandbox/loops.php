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

  $i = 0;
  while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
  }
