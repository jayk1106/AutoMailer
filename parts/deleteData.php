<?php

if(isset($_GET['id'])){
    require 'config.php';

    $sql = "DELETE FROM userDetails WHERE userId={$_GET['id']}";
    $result = mysqli_query($conn,$sql) or die("Delete Query Failed");

header('location: /');
}else{
    echo "<h1>Somthing Wrong</h1>";
}

?>