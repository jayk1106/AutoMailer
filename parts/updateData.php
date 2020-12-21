<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

require 'config.php';

$sql = "UPDATE userDetails SET username='{$name}', userEmail ='{$email}' WHERE userId = {$id}";
$result = mysqli_query($conn,$sql) or die("Update Query Failed");

header('location: /');
?>