<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];
$oldid = $_POST['id'];

$sel = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$run = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($run);
$name = strtoupper($data['username']);
$id = $data['id'];
$email = $data['email'];
$phone = $data['phone'];
$check = mysqli_num_rows($run);
if ($check == 1) {
    $sql = "UPDATE `add_to_cart` SET `purchase_id`='$id' WHERE `purchase_id`='$oldid'";
    $run = mysqli_query($conn, $sql);
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    echo "success";
} else {
    echo "failed";
}



