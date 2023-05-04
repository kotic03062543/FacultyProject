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

    // เช็คค่าว่าง
    if(empty($fname)) {
      echo json_encode(array('success' => false, 'message' => 'กรุณากรอกชื่อผู้ใช้งาน'));
        exit();
    }else if(empty($lname)){
        echo json_encode(array('success' => false, 'message' => 'กรุณากรอกรหัสผ่าน'));
        exit();
    }

    // ค้นหาผู้ใช้จากฐานข้อมูล
    $query = "SELECT * FROM user WHERE lname = :lname AND fname = :fname";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':fname', $fname);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // ตรวจสอบรหัสผ่าน
    if($user) {
      // เข้าสู่ระบบสำเร็จ
      if($user['lname'] == $lname) {
        // เข้าสู่ระบบสำเร็จ
        echo json_encode(array('success' => true));
      } 
    } else{
      // ไม่พบผู้ใช้ในฐานข้อมูล
      echo json_encode(array('success' => false, 'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
    }
  }
} catch(PDOException $e) {
    // แสดงข้อผิดพลาด
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));

}

?>