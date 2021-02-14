<?php

$server = 'bvzfdz5taplutsnlnhgi-mysql.services.clever-cloud.com';
$username = 'uiainuzv9ehedcyc';
$password = 'DCQYtst3hIHvKENPh1B2';
$database = 'bvzfdz5taplutsnlnhgi';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
