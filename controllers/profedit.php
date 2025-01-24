<?php 
include ("db.php");
$username = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE `users` SET `email`='$email',`phone`='$phone',`username`='$username' WHERE `id` = '$id'";
$run = mysqli_query($conn, $sql) or die("bad query");
echo"success";
session_start();

$_SESSION["name"] = $username;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone; 
?>