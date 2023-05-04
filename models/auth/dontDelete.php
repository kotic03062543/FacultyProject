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
        // รหัสผ่านไม่ถูกต้อง
        echo json_encode(array('success' => false, 'message' => 'รหัสผ่านไม่ถูกต้อง'));
    };
  }
} catch(PDOException $e) {
    // แสดงข้อผิดพลาด
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}

?>


<!-- ////ได้//// -->

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

    // ตรวจสอบค่าว่างของ $fname และ $lname
    if(empty($fname) || empty($lname)) {
        echo json_encode(array('success' => false, 'message' => 'กรุณากรอกข้อมูลให้ครบทุกช่อง'));
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
    if ($user) {
        // ตรวจสอบรหัสผ่าน
        if($user['lname'] == $lname) {
          // เข้าสู่ระบบสำเร็จ
          echo json_encode(array('success' => true));
        }
        else {
            // รหัสผ่านไม่ถูกต้อง
            echo json_encode(array('success' => false, 'message' => 'รหัสผ่านไม่ถูกต้อง'));
        };
    } else {
        // ไม่พบผู้ใช้
        echo json_encode(array('success' => false, 'message' => 'ไม่พบผู้ใช้'));
    }
  }
} catch(PDOException $e) {
    // แสดงข้อผิดพลาด
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}

?>