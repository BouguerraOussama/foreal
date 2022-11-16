<?php

$dsn = "mysql:host=localhost;dbname=onlytrades";

try {
  $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
  echo $e->getMessage();
}
