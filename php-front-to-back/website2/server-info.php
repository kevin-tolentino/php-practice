<?php // create an associative array to hold server info
  //$_SERVER SUPERGLOBAL
  //Superglobals documentation: https://www.php.net/manual/en/language.variables.superglobals.php

  //Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST']
  ];
  echo $server['Host Header'];

  // Create Client Array



?>
