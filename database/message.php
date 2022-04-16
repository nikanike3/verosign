<?php
include_once "database.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];

$sql = ("INSERT INTO messages VALUES ('$firstname', '$lastname', '$email', '$topic', '$message')");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Added';
} else {
    header('Location: ../index.html');
    exit;
}
?>