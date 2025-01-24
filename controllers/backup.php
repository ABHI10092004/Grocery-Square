<?php
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli("localhost", $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];




$sel = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$run = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($run);
$name = strtoupper($data['username']); 
$check = mysqli_num_rows($run);
if ($check == 1) {
    session_start();
    $_SESSION['name'] = $name; 
    
    echo "success";
} else {
    echo "failed";
}
