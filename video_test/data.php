<?php

// Connecting With Data Base With PDO Method
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=hire_web", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Your Code


    



} catch(PDOException $e) {
    // For Bring Error Messege
  echo "Connection failed: " . $e->getMessage();
}


?>



<?php // Made By Adel31_dz  ?>