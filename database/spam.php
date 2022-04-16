<?php
include_once "database.php";

$email = $_POST['email'];

$sql = ("INSERT INTO spam VALUES ('$email')");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Added';
} else {
    header('Location: ../index.html');
    exit;
}
?>