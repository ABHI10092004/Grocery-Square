<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);


$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
if (!isset($_POST['coupon'])) {
    $rows = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `purchase_id`='$id'");
    foreach ($rows as $row):
        $phone = $_POST['phone'];
        $prodname = $row['name'];
        $price = $row['final_price'];
        $sql = "INSERT INTO `orders`(`name`, `email`, `phone`, `Address`, `userid`, `prodname`, `item_price`) VALUES ('$name','$email','$phone','$address','$id','$prodname','$price')";
        $run = mysqli_query($conn, $sql);
        // echo "success";
    endforeach;

    $rows = mysqli_query($conn, "SELECT * FROM `orders` WHERE `userid`='$id'");
    $sum = 0;
    foreach ($rows as $row):
        $sum = $sum + $row["item_price"];
    endforeach;
    $rows1 = mysqli_query($conn, "SELECT * FROM `user_coupons` WHERE `user_id`='$id'");
    $check = mysqli_num_rows($rows1);


    if ($sum > 2000 &&  $check<4) {
        $sqlu = mysqli_query($conn, "SELECT * FROM `coupon` WHERE `price_range`=2000");
        foreach ($sqlu as $row):
            $coupons = $row['coupon'];
            $image = $row['image'];
            $sqlu1 = mysqli_query($conn, "INSERT INTO `user_coupons`(`user_id`, `coupons`, `coupon_img`) VALUES ('$id','$coupons','$image')");
        endforeach;
    }

    $sqlu1 = mysqli_query($conn, "DELETE FROM `add_to_cart` WHERE `purchase_id`='$id'");

    echo "success";


} else {
    $coupon = $_POST['coupon'];
    $rows = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `purchase_id`='$id'");
    foreach ($rows as $row):
        $phone = $_POST['phone'];
        $prodname = $row['name'];
        $price = $row['final_price'];
        $sql = "INSERT INTO `orders`(`name`, `email`, `phone`, `Address`, `userid`, `prodname`, `item_price`) VALUES ('$name','$email','$phone','$address','$id','$prodname','$price')";
        $run = mysqli_query($conn, $sql);
        // echo "success";
    endforeach;

    $sqlupd = mysqli_query($conn, "UPDATE `user_coupons` SET `status`= 1 WHERE `coupons`='$coupon' AND `user_id`='$id'");

    $rows = mysqli_query($conn, "SELECT * FROM `orders` WHERE `userid`='$id'");
    $sum = 0;
    foreach ($rows as $row):
        $sum = $sum + $row["item_price"];
    endforeach;
    $rows1 = mysqli_query($conn, "SELECT * FROM `user_coupons` WHERE `user_id`='$id'");
    $check = mysqli_num_rows($rows1);

    if ($sum > 2000 && $check<4) {
        $sqlu = mysqli_query($conn, "SELECT * FROM `coupon` WHERE `price_range`=2000");
        foreach ($sqlu as $row):
            $coupons = $row['coupon'];
            $image = $row['image'];
            $sqlu1 = mysqli_query($conn, "INSERT INTO `user_coupons`(`user_id`, `coupons`, `coupon_img`) VALUES ('$id','$coupons','$image')");
        endforeach;
    }


    $sqlu1 = mysqli_query($conn, "DELETE FROM `add_to_cart` WHERE `purchase_id`='$id'");
    echo "success";
}