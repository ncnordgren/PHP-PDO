<?php
  //remove error reporting before production
ini_set('display_errors', 'On');

try {
  $db = new PDO('sqlite:/home/treehouse/workspace/database.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo $e->getMessage();
  die();   
} 
?>