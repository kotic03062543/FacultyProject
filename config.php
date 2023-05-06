<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mydb";

try {
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล: " . $e->getMessage();
}


// function connectDatabase() {
//     $host = "localhost";
//     $dbname = "mydb";
//     $username = "root";
//     $password = "";

//     try {
//         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         return $pdo;
//     } catch(PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//     }
// }

?>
