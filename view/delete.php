<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET' && empty($_GET['ID'])) {
    http_response_code(400);
    die("Invalid Request");
}

include_once '../model/database.php';

$sql = "DELETE FROM books WHERE ID=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['ID']);
$stmt->execute();

header("Location: ".$_SERVER['HTTP_REFERER']);
exit;

?>