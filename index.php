<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include ("controllers/db.php");
// if (isset($_SESSION['name'])) {
//     $isLoggedIn = true;
// } else {
//     $isLoggedIn = false;
// }
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Abhiram">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Square</title>
    <!-- <script>
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/style.css"> -->
    <link rel="stylesheet" href="assets/mediaqueries.css">
</head>

<body>

    <?php require 'header.php' ?>


    <div class="alert_addcart">
        <i class="fa-solid fa-circle-check"></i>
        <p>Your item has been added to cart</p>
    </div>

    <!--This is the body-->
    <div class="body">

        <div class="imgslider">

            <div class="image-sliderfade fade">
                <img src="assets/imgs/homepage imgs/B2C051810583-19877-4june24.webp" class="img-slider"
                    style="width: 100%" onclick="window.location.href='shop.php?name=Household'" />
                <!-- <div class="text">Image caption 1</div> -->
            </div>

            <div class="image-sliderfade fade">
                <img src="assets/imgs/homepage imgs/B2C051810583-19878-6june24.webp" class="img-slider"
                    style="width: 100%" onclick="window.location.href='shop.php?name=Snacks'" />
                <!-- <div class="text">Image caption 2</div> -->
            </div>

            <div class="image-sliderfade fade">
                <img src="assets/imgs/homepage imgs/B2C051810583-19879-1june24.webp" class="img-slider"
                    style="width: 100%" onclick="window.location.href='shop.php?name=Hygiene'" />
                <!-- <div class="text">Image caption 3</div> -->
            </div>

        </div>
        <br />

        <div style="text-align: center" class="ind">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="banner">
            <img src="assets/imgs/homepage imgs/Screenshot 2024-06-07 121540.png" alt="">
        </div>






        <!-- cardslider -->
        <?php
        $ros = mysqli_query($conn, "SELECT * FROM `orders` WHERE `userid`='$session_id'");
        $check = mysqli_num_rows($ros);
        ?>
        <?php
        if ($check >= 11) {
            ?>
            <div class="card-slider">
                <div class="info-bar">
                    <span onclick="window.location.href='discountstore.php?id=user';">My Smart Basket</span>
                    <a href="discountstore.php?id=user">View All</a>
                    <div class="btns">
                        <div class="fa-solid fa-angle-left" id="left-btn"></div>
                        <div class="fa-solid fa-angle-right" id="right-btn"></div>
                    </div>
                </div>
                <div class="cardwrapper">
                    <div class="card-list">
                        <?php
                        $ross = mysqli_query($conn, "SELECT * FROM `orders` WHERE `userid`='$session_id' LIMIT 11");
                        foreach ($ross as $row11):
                            $prodname = $row11['prodname'];
                            $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `name`='$prodname'");
                            $row = mysqli_fetch_assoc($rows);
                            ?>
                            <?php
                            $nameqty = $row['name']; ?>
                            <div class="card">
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
                                            onclick="sendcart('<?php echo $row['name'] ?>',<?php echo $row['discprice'] ?>,'<?php echo $row['image'] ?>','<?php echo $session_id ?>','<?php echo $row['category'] ?>','qty-item-<?= $row['id'] ?>')">Add</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>


                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- cardslider -->



        <div class="coupon-box">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM `user_coupons` WHERE `user_id`='$session_id' AND `status`='0 '");
                $check= mysqli_num_rows($rows);
                if ($check >= 1) {
                ?>
            <p>Try Out Our Coupons</p>
            <div class="coupons">
                <?php foreach ($rows as $row): ?>
                    <img src="assets/imgs/<?php echo $row['coupon_img']; ?>" alt="">
                <?php endforeach ?>
            </div>
            <?php }?>
        </div>



        <!-- Best Sellers card slider -->

        <div class="card-slider">
            <div class="info-bar">
                <span onclick="window.location.href='discountstore.php?id=offer';">Our Top Offers</span>
                <a href="discountstore.php?id=offer">View All</a>
                <div class="btns">
                    <div class="fa-solid fa-angle-left" id="left-btn"></div>
                    <div class="fa-solid fa-angle-right" id="right-btn"></div>
                </div>
            </div>
            <div class="cardwrapper">
                <div class="card-list">


                    <?php
                    $rows = mysqli_query($conn, "SELECT * FROM `products` ORDER BY offer desc LIMIT 11");
                    ?>
                    <?php foreach ($rows as $row):
                        $nameqty = $row['name']; ?>
                        <div class="card">
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
                                        onclick="sendcart('<?php echo $row['name'] ?>',<?php echo $row['discprice'] ?>,'<?php echo $row['image'] ?>','<?php echo $session_id ?>','<?php echo $row['category'] ?>','qty-item-<?= $row['id'] ?>')">Add</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>


                </div>
            </div>
        </div>

        <!-- Best Sellers card slider -->




        <div class="offer-box">
            <p>Top Offers</p>
            <div class="offers">
                <img src="assets/imgs/homepage imgs/hp_30-corner-topoffersStorefront_m_480_250723_04.webp" alt="" onclick="window.location.href = 'discountstore.php?id=30'">

                <img src="assets/imgs/homepage imgs/hp_big-packs-topoffersStorefront_m_480_250723_02.webp" alt="" onclick="window.location.href = 'discountstore.php?id=max'">

                <img src="assets/imgs/homepage imgs/hp_combos-topoffersStorefront_m_480_250723_03.webp" alt="" id="st3" onclick="window.location.href = 'discountstore.php?id=offer'">

                <img src="assets/imgs/homepage imgs/hp_dow-topoffersStorefront_m_480_250723_01 (1).webp" alt="" id="st4" onclick="window.location.href = 'discountstore.php?id=offer'">

            </div>
        </div>


        <!-- category box -->
        <p class="catbef">Categories</p>
        <div class="categories">
            <?php
            $i = 1;
            $rows = mysqli_query($conn, "SELECT * FROM `categories` WHERE `status`='0'");
            ?>
            <?php foreach ($rows as $row): ?>
                <div class="categories-card">
                    <div class="catcover">
                        <img src="assets/imgs/<?php echo $row['image'] ?>" alt="">
                        <div class="cat-name"><?php echo $row['name'] ?></div>
                        <div class="cat-offer"><?php echo "Upto " . $row['offer'] . " Off" ?></div>
                        <div class="cat-btn">
                            <a href="shop.php?name=<?php echo $row['name']; ?>">Shop Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>


        <!-- category box -->
        <div class="last-info">

            <div class="last-hed">GrocerySquare - online grocery store</div>
            <div class="last-div">Did you ever imagine that the freshest of fruits and vegetables, top-quality pulses
                and food grains, dairy products, and hundreds of branded items could be handpicked and delivered to your
                home, all at the click of a button? In today's fast-paced world, bigbasket.com, India's pioneering
                online grocery store, continues to bring a staggering array of over 40,000 products from more than 1,000
                brands to the doorsteps of over 10 million satisfied customers. From essential household cleaning
                products to the latest beauty and makeup trends, bigbasket remains your one-stop shop for daily needs.
            </div>
            <div class="last-div">In these times, we've eliminated the stress associated with shopping for daily
                essentials. You can now effortlessly order all your household products and groceries online. Plus, the
                added convenience of finding all your requirements at a single source, coupled with substantial savings,
                demonstrates that bigbasket, India's largest online supermarket, has transformed the way we shop for
                groceries. Online grocery shopping has become second nature. And when it comes to freshness, whether
                it's fruits and vegetables or dairy and meat, we've got you covered! Easily obtain fresh eggs, meat,
                fish, and more with just a few clicks.</div>
            <div class="last-div">We now serve 300+ cities and towns across India and ensure swift delivery times,
                guaranteeing that all your groceries, snacks and branded foods reach you on time.</div>
            <div class="last-div">Slotted Delivery: Choose the most convenient delivery slot to receive your groceries,
                ranging from early morning delivery for early birds to late-night delivery for those on the night shift.
                bigbasket caters to every schedule.</div>
            <div class="last-div">Instant delivery from bbnow: In response to the ever-increasing demand for
                convenience, bbnow by bigbasket offers lightning-fast grocery delivery, ensuring that your essentials
                are at your doorstep within 15-30 minutes. Our quick delivery service has revolutionized the way you
                shop for groceries. Choose from 5000+ grocery essentials. bbnow is available only in select cities.
            </div>
            <div class="last-div">Whether it's a last-minute dinner party or you simply need something urgently, we've
                got you covered. This service exemplifies our commitment to providing you with not just the widest range
                of products but also the fastest and most efficient shopping experience, making bigbasket.com the go-to
                destination for all your immediate grocery needs.</div>
        </div>

    </div>








    <!--This is the body-->



<?php require "footer.php"?>
    <!-- this is footer -->




    <!-- this is footer -->










    <!--Javascript-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="assets/script.js"></script> -->
    <!--Javascript-->
    <script>
        showSlides();
    </script>
</body>

</html>