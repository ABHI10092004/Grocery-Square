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

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
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
    // if ($id == 30) {
    ?>

    <?php
    if ($id == 30) {
        $name = "Items under &#8377 30";
    } else if ($id == 'max') {
        $name = 'Big Packs Bigger Discount';
    } else if ($id == 'user') {
        $name = 'your orders';
    } else {
        $name = 'Our Top Discounts';
    }
    ?>




    <div class="body-">


        <div class="filter-opt">
            <div class="product-cat"><?php echo $name ?></div>
        </div>




        <div class="cat-products">


            <?php if ($id == '30') {
                $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `discprice`<$id");
                foreach ($rows as $row): ?>
                    <?php $nameqty = $row['name']; ?>
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
                <?php endforeach;
            } else if ($id == 'max') { ?>
                <?php $rowss = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `products`.`discprice` DESC LIMIT 20");
                foreach ($rowss as $row):
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
                <?php endforeach;
            } else if ($id == 'user') { ?>
                <?php
                $user = [];
                $rowss1 = mysqli_query($conn, "SELECT * FROM `orders` WHERE `userid`= '$session_id' ORDER BY `id` DESC");
                foreach ($rowss1 as $roww):
                    $prices = $roww["prodname"];
                    if (!in_array($prices, $user)) {
                        array_push($user, $roww['prodname']);
                        $rowss = mysqli_query($conn, "SELECT * FROM `products` WHERE `name`='$prices' ORDER BY `products`.`discprice` DESC LIMIT 20");
                        // foreach ($rowss as $row):
                        $row = mysqli_fetch_assoc($rowss);
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
                    <?php }
                endforeach;

            } else { ?>
                <?php $rows = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `products`.`offer` DESC LIMIT 20");
                foreach ($rows as $row):
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
                <?php endforeach;
            }
            ?>


        </div>
    </div>


    <?php
    // } 
    ?>

    <!-- This is body  -->



    <?php
    require "footer.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>