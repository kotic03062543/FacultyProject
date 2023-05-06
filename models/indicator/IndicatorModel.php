<?php

require_once "../../config.php";

$stmt = $conn->prepare("SELECT * FROM user");
$stmt->execute();
$indicators = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($indicators);

?>