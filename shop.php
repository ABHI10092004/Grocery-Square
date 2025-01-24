<!DOCTYPE html>

<?php

include ("controllers/db.php");

$session_id = session_id();
if (isset($_SESSION['name'])) {
    $isLoggedIn = true;
    $session_id = $_SESSION['id'];
} else {
    $isLoggedIn = false;
}


if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
    $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `category`='$name'");

} else {
    $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE '1'");
    $name = "Products";
}
?>






<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Abhiram">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Square</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script>
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="elements/productcategory.css"> -->

</head>

<body>
    <?php require 'header.php' ?>

    <!-- This is body -->
    <div class="alert_addcart">
        <i class="fa-solid fa-circle-check"></i>
        <p>Your item has been added to cart</p>
    </div>




    <?php
    if ($name == "Products") {
        ?>
        <?php
        $rowss = mysqli_query($conn, "SELECT * FROM `categories` WHERE `status`='0'");
        ?>
        <?php foreach ($rowss as $ro):
            $name = $ro['name'];
            ?>




            <div class="body-">


                <div class="filter-opt">
                    <div class="product-cat"><?php echo $name ?></div>
                </div>




                <div class="cat-products">
                    <?php
                    $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `category`='$name'");
                    ?>

                    <?php foreach ($rows as $row):
                        $nameqty = $row['name']; ?>
                        <div class="card-prod">
                            <div class="img-hold">
                                <img src="assets/imgs/<?php echo $row['image'] ?>" alt="">
                                <span class="offer">
                                    <span><?php echo $row['offer'] ?>&#x25 Off</span>
                                </span>
                            </div>
                            <div class="card-content-">
                                <div class="img-info"><?php echo $row['name'] ?></div>
                                <div class="qty">
                                    <div>Per Qty /- 1Kg</div>
                                </div>
                                <div class="price-bar">
                                    <div class="disc-price">&#8377 <?php echo $row['discprice'] ?></div>
                                    <span class="org-price">&#8377 <?php echo $row['orgprice'] ?></span>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `name`='$nameqty' AND `purchase_id`='$session_id'");
                                    $data = mysqli_fetch_assoc($sql);
                                    $check = mysqli_num_rows($sql);
                                    if ($check == 1) {
                                        ?>
                                        <div class="no qty-<?php echo $row['id'] ?>">(<?php echo $data['qty'] ?> in cart)</div>
                                    <?php } else { ?>
                                        <div class="no qty-<?php echo $row['id'] ?>">(0 in cart)</div>
                                    <?php } ?>
                                </div>
                                <div class="sendmore">
                                    <button class="red-qty" onclick="red('qty-item-<?= $row['id'] ?>')">-</button>
                                    <div class="qty-no" id="qty-item-<?= $row['id'] ?>">1</div>
                                    <button class="inc-qty" onclick="inc('qty-item-<?= $row['id'] ?>')">+</button>
                                </div>
                                <div class="add-cart">
                                    <button class="add-btn"
                                        onclick="sendcart('<?php echo $row['name'] ?>',<?php echo $row['discprice'] ?>,'<?php echo $row['image'] ?>','<?php echo $session_id ?>','<?php echo $name ?>','qty-item-<?= $row['id'] ?>')">Add</button>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        <?php endforeach ?>


        <?php
    } else {
        ?>

        <div class="body-">


            <div class="filter-opt">
                <div class="product-cat"><?php echo $name ?></div>

                <div class="smart-filter">
                    <div class="filter">

                        <img src="assets/imgs/homepage imgs/Screenshot 2024-06-08 100826.png" alt="">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Filter <i class="fa-solid fa-arrow-down-short-wide"></i></button>
                        <div class="dropdown-content">
                            <a onclick="reloadthis()">Relevance</a>
                            <a onclick="loadProducts2('<?php echo $name ?>','<?php echo $session_id; ?>')">Low to High</a>
                            <a href="#" onclick="loadProducts('<?php echo $name ?>','<?php echo $session_id; ?>')">Rupee Saving</a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="cat-products">

                <?php
                $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `category`='$name' ORDER BY `id` DESC");
                ?>
                <?php foreach ($rows as $row):
                    $nameqty = $row['name']; ?>
                    <div class="card-prod">
                        <div class="img-hold">
                            <img src="assets/imgs/<?php echo $row['image'] ?>" alt="">
                            <span class="offer">
                                <span><?php echo $row['offer'] ?>&#x25 Off</span>
                            </span>
                        </div>
                        <div class="card-content-">
                            <div class="img-info"><?php echo $row['name'] ?></div>
                            <!-- <div class="qty"> -->
                            <div class="price-bar">
                                <div class="disc-price">&#8377 <?php echo $row['discprice'] ?></div>
                                <span class="org-price">&#8377 <?php echo $row['orgprice'] ?></span>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `name`='$nameqty' AND `purchase_id`='$session_id'");
                                $data = mysqli_fetch_assoc($sql);
                                $check = mysqli_num_rows($sql);
                                if ($check == 1) {
                                    ?>
                                    <div class="no qty-<?php echo $row['id'] ?>">(<?php echo $data['qty'] ?> in cart)</div>
                                <?php } else { ?>
                                    <div class="no qty-<?php echo $row['id'] ?>">(0 in cart)</div>
                                <?php } ?>
                            </div>

                            <div class="sendmore">
                                <button class="red-qty" onclick="red('qty-item-<?= $row['id'] ?>')">-</button>
                                <div id="qty-item-<?= $row['id'] ?>">1</div>
                                <button class="inc-qty" onclick="inc('qty-item-<?= $row['id'] ?>')">+</button>
                            </div>

                            <!-- </div> -->
                            <div class="add-cart">
                                <button class="add-btn"
                                    onclick="sendcart('<?php echo $row['name'] ?>',<?php echo $row['discprice'] ?>,'<?php echo $row['image'] ?>','<?php echo $session_id ?>','<?php echo $name ?>','qty-item-<?= $row['id'] ?>')">Add</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <?php
    }
    ?>


    <!-- This is body  -->



    <?php
    require "footer.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>