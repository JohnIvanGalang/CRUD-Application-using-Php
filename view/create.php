<?php 

if (!isset($_POST["submit"])) {
    header("Location: ../includes/main.php");
    exit;
}


// variables
$bookID = filter_input(INPUT_POST, "BOOKID", FILTER_SANITIZE_NUMBER_INT);
$bookName = filter_input(INPUT_POST, "BOOKNAME", FILTER_SANITIZE_SPECIAL_CHARS);

session_start();

if (empty($bookID) || empty($bookName)) {
    // echo "<script> alert("Input Something") </script>";
    header("Location: ./includes/add.php");
    exit;
}

include_once '../model/database.php';

$query = "INSERT INTO books (ID, BOOK) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("is", $bookID, $bookName);
$stmt->execute();

header("Location: ../includes/main.php");
?>
