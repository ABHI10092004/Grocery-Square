<!DOCTYPE html>
<?php
include ("controllers/db.php");
session_start();
$id = $_SESSION['id'];
if (isset($_SESSION['name'])) {
    $isLoggedIn = true;

} else {
    $isLoggedIn = false;
    header("Location: index.php");
    exit();
}
?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="paymentstyle.css">
</head>

<body>
    <header>
        <div class="logo">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <a href="">GrocerySquare</a>
        </div>
        <a class="return" href="index.php">Return to cart</a>
    </header>
    <div class="body">
        <div class="body1">
            <div class="pay-body">
                <div class="heading">Getting your order</div>
            </div>
            <div class="infobox">
                <div class="hed">Shippment Information</div>
                <div class="inputhed">Name</div>
                <input type="text" class="inputs" id="pay-name" placeholder="Enter Your Firstname..."
                    value="<?php echo $_SESSION['name'] ?>">
                <div class="inputhed">Address</div>
                <input type="text" class="inputs" id="pay-address" placeholder="Address">
                <div class="inputhed">Landmark</div>
                <input type="text" class="inputs" id="pay-landmark" placeholder="Enter Your Landmark...">
                <div class="inputhed">City</div>
                <input type="text" class="inputs" id="pay-city" placeholder="City Name">

                <div class="specialbox">
                    <div class="inputhed">State</div>
                    <input type="text" class="inputs-sp" id="pay-state" placeholder="State">
                    <div class="inputhed">ZIP Code</div>
                    <input type="text" class="inputs-sp">
                </div>
            </div>
            <div class="contact_info">
                <div class="hed">Contact Information</div>
                <div class="inputhed">Email Addresss</div>
                <input type="text" class="inputs" id="pay-email" placeholder="Email"
                    value="<?php echo $_SESSION['email'] ?>">
                <div class="inputhed">Phone Number</div>
                <input type="text" class="inputs" id="pay-phone" placeholder="Phone Number"
                    value="<?php echo $_SESSION['phone'] ?>">
                <label class="container">Send me updates about my order
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <div class="paymentbtn">
                    <button id="pay" onclick="pay(<?php echo $id; ?>)">Continue to Payment Information</button>
                </div>
            </div>
        </div>
        <div class="cartlst">
            <div class="main">Cart Items</div>
            <div class="prodclm">

                <?php
                $i = 1;
                $total = [];

                $rows = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `purchase_id`='$id'");
                ?>
                <?php foreach ($rows as $row): ?>

                    <div class="clmcard">
                        <img src="assets\imgs\<?php echo $row['image'] ?>" alt="">
                        <div class="nameclm"><?php echo $row['name'] ?></div>
                        <div class="costinfo">
                            <div class="item-qty">Per Qty /- <span><b><?php echo $row['qty'] ?></b></span> </div>
                            <div class="disc-price-">&#8377 <?php echo $row['final_price'] ?></div>
                        </div>
                    </div>
                    <?php
                    array_push($total, $row['final_price']);

                endforeach ?>
            </div>

            <div class="money">
                <div class="itemsub">
                    <span>Item Subtotal</span>
                    <div id="sub-tot">&#8377 200</div>
                </div>
                <div class="ship">
                    <span>Shippment</span>
                    <div>Free</div>
                </div>
                <div class="coupon">
                    <span>Have a Coupon?</span>
                    <input type="text" placeholder="coupon" id="couponid">
                </div>
                <div class="apply-btn">
                    <?php $couponarray = [];
                    $rows = mysqli_query($conn, "SELECT * FROM `user_coupons` WHERE `user_id`='$id'");
                    foreach ($rows as $row):
                    array_push($couponarray, $row['coupons']);
                    endforeach;
                    ?>
                    <button onclick="couponspply()">Apply</button>
                </div>
                <div class="Total">Total: &#8377 254</div>
            </div>
        </div>
    </div>





    <?php require 'footer.php' ?>


    <script>
        var totprice = <?php echo json_encode($total); ?>;
        var couponarray = <?php echo json_encode($couponarray); ?>;
        var coupon = "";
    </script>
    <script src="assets/script.js"></script>
</body>

</html>