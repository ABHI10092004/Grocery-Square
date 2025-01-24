<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$oldid = $_POST['oldid'];

//incert into table
$sql = "INSERT INTO `users`(`username`, `phone`, `email`, `password`) VALUES ('$username','$phone','$email','$password')";
$run = mysqli_query($conn, $sql);


//retrieve that user values
$sel = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$run = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($run);
$name = strtoupper($data['username']);
$id = $data["id"];
$email = $data['email'];
$phone = $data['phone'];


//check if there are values inside addtocart
$check1 = "SELECT * FROM `add_to_cart` WHERE `purchase_id` = '$oldid'";
$check12 = mysqli_query($conn, $check1);
$check13 = mysqli_num_rows($check12);

//update add to cart items to new user account
if ($check13 > 0) {
    $sql = "UPDATE `add_to_cart` SET `purchase_id`='$id' WHERE `purchase_id`='$oldid'";
    $run = mysqli_query($conn, $sql);
}


//add coupons to that account
$sel11 = "SELECT * FROM `coupon` WHERE `price_range` = 0";
$run1 = mysqli_query($conn, $sel11);

foreach ($run1 as $run11):
    $coupon = $run11["coupon"];
    $image = $run11["image"];
    $sql12 = "INSERT INTO `user_coupons`(`user_id`, `coupons`, `coupon_img`) VALUES ('$id','$coupon','$image')";
    $run12 = mysqli_query($conn, $sql12);
endforeach;


//session start
session_start();
$_SESSION['name'] = $name;
$_SESSION['id'] = $id;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
echo "success";


