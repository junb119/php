<?php

  $hostname = 'localhost';
  $dbuserid = 'abcweb';
  $dbpasswd = '1234';
  $dbname = 'abcweb';
  
  $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd ,$dbname);
  if ($mysqli->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $mysqli->connect_error);
    
  } 
  ini_set('display_errors', '1');

  
?>