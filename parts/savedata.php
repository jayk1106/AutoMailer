<?php

$name = $_POST['name'];
$email = $_POST['email'];

require 'config.php';

$sql = "INSERT INTO userdetails (userName,userEmail) VALUES ('{$name}','{$email}')";
$result = mysqli_query($conn,$sql) or die("Insert Query Failed");

header('location: /');

?>