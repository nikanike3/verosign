<?php
include_once "database.php";

$email = $_POST['email'];
$category = $_POST['category'];
$price = $_POST['price'];
$plan = $_POST['plan'];

$sql = ("INSERT INTO work VALUES ('$email', '$category', '$price', '$plan')");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Added';
} else {
    header('Location: ../index.html');
    exit;
}
?>