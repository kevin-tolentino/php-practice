<?php // create an associative array to hold server info
  //$_SERVER SUPERGLOBAL
  //Superglobals documentation: https://www.php.net/manual/en/language.variables.superglobals.php

  //Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],// shows the server host the script is executing in
    'Host Header' => $_SERVER['HTTP_HOST'], // shows the headers of current http request
    'Server Software' => $_SERVER['SERVER_SOFTWARE'], // shows what server you're running
    'Document Root' => $_SERVER['DOCUMENT_ROOT'], // shows you the document root
    'Current Page' => $_SERVER['PHP_SELF'], //shows the filename of the executed script
    'Script Name' => $_SERVER['SCRIPT_NAME'], //the current script's path
    'Script Name' => $_SERVER['SCRIPT_FILENAME'] //gives you the absolute path

  ];
  // print_r($server);

  // Create Client Array



?>
