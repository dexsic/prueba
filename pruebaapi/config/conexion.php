<?php
  include("config.php");
//Conexión con PHP Data Objects
    try {
      $conn = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE, USER_NAME, PASS);
      // set the PDO error mode to exception
      $conn -> exec("set names utf8");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
?>