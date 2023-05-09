<?php

include_once "../../config.php";

$id = $_REQUEST['id'];

$stmt = $conn->prepare("SELECT * FROM indicator WHERE id = ?");
$stmt->execute([$id]);
$indicator = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array("success" => true, "message" => $indicator));


?>