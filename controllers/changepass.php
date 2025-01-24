<?php 
include ("db.php");

$oldpass = $_POST['oldpass'];
$id = $_POST['id'];
$newpass = $_POST['newpass'];

$sql = "UPDATE `users` SET `password`='$newpass' WHERE `password` = '$oldpass' AND `id`='$id'";
$run = mysqli_query($conn, $sql) or die("bad query");
echo"success";