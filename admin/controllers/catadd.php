<?php
$username = "root";
$password = "";
$dbname = "grocery_store";
$conn = new mysqli("localhost", $username, $password, $dbname);


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE `categories` SET `status`='1' WHERE id = '$id'";
    $run = mysqli_query($conn, $sql);
    echo"success";
} else {
    $name = $_POST['name'];
    $offer = $_POST['offer'];


    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];

        $exp = explode('.', $image_name);
        $ext = end($exp);

        $image_path = '../adminimg/';
        if (!is_dir($image_path)) {
            mkdir($image_path, 0755, true);
        }


        $image_path = $image_path . $image_name;




        $sql = "INSERT INTO `categories`(`image`, `name`, `offer`) VALUES ('$image_name','$name','$offer')";
        $run = mysqli_query($conn, $sql);



        if (move_uploaded_file($image_tmp_name, $image_path)) {
            echo "success";
        } else {
            echo "failed";
        }
    }

}
?>