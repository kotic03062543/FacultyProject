<?php
require_once '../../config.php';

if(isset($_POST['fname']) && isset($_POST['lname'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  if(empty($fname)) {
    echo json_encode(array('success' => false, 'message' => 'กรุณากรอกชื่อผู้ใช้งาน'));
    exit();
  } else if(empty($lname)){
    echo json_encode(array('success' => false, 'message' => 'กรุณากรอกรหัสผ่าน'));
    exit();
  }

  $query = "SELECT * FROM user WHERE lname = :lname AND fname = :fname";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':lname', $lname);
  $stmt->bindParam(':fname', $fname);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if($user) {
    if($user['lname'] == $lname) {
      echo json_encode(array('success' => true));
    } 
  } else {
    echo json_encode(array('success' => false, 'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
  }
}
?>
