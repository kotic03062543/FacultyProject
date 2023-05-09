<?php

require_once "../../config.php";

$stmt = $conn->prepare("SELECT * FROM indicator");
$stmt->execute();
$indicators = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($indicators);

?>