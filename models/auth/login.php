<?php

// เชื่อมต่อกับฐานข้อมูล
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mydb";

try {
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
  // เซ็ตโหมด PDO เป็น Exception Mode เพื่อให้รับข้อผิดพลาดได้
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // ตรวจสอบการส่งค่าจากฟอร์ม
  if(isset($_POST['fname']) && isset($_POST['lname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    // ค้นหาผู้ใช้จากฐานข้อมูล
    $query = "SELECT * FROM user WHERE lname = :lname AND fname = :fname";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':fname', $fname);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // ตรวจสอบรหัสผ่าน
    if($user['lname'] == $lname) {
      // เข้าสู่ระบบสำเร็จ
      echo json_encode(array('success' => true));
    } else {
        $response = array('success' => false, 'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        echo json_encode($response);
    };
  }
} catch(PDOException $e) {
    // แสดงข้อผิดพลาด
    $response = array('success' => false, 'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage());
    // ส่งค่า JSON กลับไปยังไคลเอนต์
    // ส่งค่า JSON กลับไปยังไคลเอนต์
    header('Content-Type: application/json');
    echo json_encode($response);

}

?>