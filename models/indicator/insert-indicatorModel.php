<?php

require_once "../../config.php";

header('Content-Type: application/json');

$name = $_POST['name'];
$unit = $_POST['unit'];
$description = $_POST['description'];

$stmt = $conn->prepare("INSERT INTO indicator (name, unit, description) VALUES (:name, :unit, :description)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':unit', $unit);
$stmt->bindParam(':description', $description);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false, 'message' => 'ไม่สามารถบันทึกข้อมูลได้'));
}



?>