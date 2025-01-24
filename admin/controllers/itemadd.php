<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);



$name = $_POST['name'];
$category= $_POST['category'];
$orgprice = $_POST['orgprice'];
$discprice = $_POST['discprice'];
$offer = (($orgprice - $discprice) / $orgprice) * 100;


if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];

    $exp = explode('.', $image_name);
    $ext = end($exp);

    $image_path = '../../assets/imgs/';
    if (!is_dir($image_path)) {
        mkdir($image_path, 0755, true);
    }


    $image_path = $image_path . $image_name;



    $sql="INSERT INTO `products`(`image`, `name`, `category` , `orgprice`, `discprice`, `offer`) VALUES ('$image_name','$name', '$category' ,'$orgprice','$discprice','$offer')";
    $run = mysqli_query($conn, $sql);



    if (move_uploaded_file($image_tmp_name, $image_path)) {
        echo "success";
    } else {
        echo "failed";
    }
}


?>