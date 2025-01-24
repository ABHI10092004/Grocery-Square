<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);



if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Perform deletion query
    $sql = "UPDATE `coupon` SET `status`='1' WHERE `id` = '$id'";
    $run = mysqli_query($conn, $sql) or die("bad query");
    header("Location: ../coupons.php");
    exit();
} else {
    echo "Product ID not provided";
}