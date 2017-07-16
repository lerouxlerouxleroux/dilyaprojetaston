<?php

function connect () {
  $db = new PDO('mysql:host=localhost;dbname=poec', 'root', '');
  return $db; 
}

?>