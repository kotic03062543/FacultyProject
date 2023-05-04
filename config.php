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
?>
