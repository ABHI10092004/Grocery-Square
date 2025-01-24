<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $sqlcart = mysqli_query($conn, "SELECT * FROM `products` WHERE `name`= '$name'");
    $data = mysqli_fetch_assoc($sqlcart);
    $ids = $data["id"];
    $sql = "DELETE FROM `add_to_cart` WHERE `id`='$id'";
    $result = $conn->query($sql);
    echo $ids . ",";

    echo "(0 in cart)";
} else {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price1 = $_POST['discprice'];
    $category = $_POST['category'];
    $purchase_id = $_POST['purchase_id'];
    $qty1 = $_POST['qty'];
    $price = (int) $price1;
    $qty = (int) $qty1;
    $final_price = $price * $qty;
   

    $sqlcart = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `price`= '$price' AND `purchase_id`='$purchase_id'");
    $data = mysqli_fetch_assoc($sqlcart);
    $check = mysqli_num_rows($sqlcart);

    if ($check == 0) {

        $sql = "INSERT INTO `add_to_cart`(`name`, `category`, `price`, `image`, `purchase_id`,`qty`,`final_price`) VALUES ('$name','$category','$price','$image','$purchase_id','$qty','$final_price')";
        $run = mysqli_query($conn, $sql) or die("bad query");
        $sqlcart1 = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `price`= '$price'");
        $data = mysqli_fetch_assoc($sqlcart1);


        $sqlcart11 = mysqli_query($conn, "SELECT * FROM `products` WHERE `name`= '$name'");
        $data11 = mysqli_fetch_assoc($sqlcart11);
        $ids = $data11["id"];

        echo $ids;
        echo ",";
        echo "(" . $qty . " in cart)";

        
    } else {
        $itsid = $data['id'];
        $newqty = $qty + $data['qty'];
        $final_price = $price * $newqty;

        $sql = "UPDATE `add_to_cart` SET `qty`='$newqty',`final_price`='$final_price' WHERE `id`= '$itsid'";
        $run = mysqli_query($conn, $sql);


        $sqlcart11 = mysqli_query($conn, "SELECT * FROM `products` WHERE `name`= '$name'");
        $data11 = mysqli_fetch_assoc($sqlcart11);
        $idss = $data11["id"];
        echo $idss.",";
        echo "(" . $newqty . " in cart)";
    }
}