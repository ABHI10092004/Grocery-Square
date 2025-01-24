<!DOCTYPE html>


<?php
@session_start();
include ("controllers/db.php");
$session_id = session_id();
if (isset($_SESSION['name'])) {
    $isLoggedIn = true;
    $session_id = $_SESSION['id'];
} else {
    $isLoggedIn = false;
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .addcart {
            /* width: 300px; */
            position: absolute;
            top: 10rem;
            right: 4rem;
            background-color: white;
            padding: 9px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 .1rem .5rem rgba(0, 0, 0.1);
            display: none;
            z-index: 900;
        }

        .addcart img {
            width: 90px;
        }

        .add-prods {
            display: flex;
            padding: 3px;
            padding-bottom: 6px;
            border: 1px solid black;
            border-style: dashed;
            border-top: none;
            border-left: none;
            border-right: none;

            /* flex-wrap: wrap; */
        }

        .add-imgdata {
            display: flex;
            flex-direction: column;
            /* flex-wrap: wrap; */
            align-items: center;
            justify-content: center;
            width: 150px;
        }

        .add-imgdata div {

            font-size: 16px;
            margin: 2px;
        }

        .item-qty {
            font-size: 12px !important;
            color: #808080;
        }

        .disc-price- {
            font-weight: bold;
            font-size: 15px;
        }

        .org-price- {
            margin-left: 4px;
            text-decoration: line-through;
            color: #808080;
            font-size: 13px;
            padding: 3px 0;
        }

        .remove-btn1 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            /* border: 1px solid black; */
        }

        .remove-btn1 a {
            padding: 7px;
            font-size: 9px;
            border-radius: 5px;
            background-color: white;
            border: 2px solid red;
            color: red;
            display: block;
        }

        .remove-btn1 a:hover {
            background-color: red;
            color: white;
        }


        .purchase-btn {
            padding: 8px 3px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .purchase-btn button {
            border: 2px solid #130f40;
            background: white;
            color: #130f40;
            padding: 8px;
            font-size: 14px;
            font-weight: 400;
            border-radius: 9px;
        }

        .purchase-btn button:hover {
            background: #130f40;
            color: white;

        }

        .total {
            font-size: 18px;
            font-weight: 400;
            color: black;
            margin: 6px 10px;
        }

        #price {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <!-- This is loginform -->
    <div class="overlay"></div>



    <div class="login-form">
        <div class="logins">
            <i class="fa-regular fa-circle-xmark close-login"></i>

            <div class="toppart h1">

                <div class="login-h1 h1">Login</div>
                <img src="assets\imgs\homepage imgs\grocery-square-high-resolution-logo.png" alt="">
            </div>
            <div class="username">Username</div>
            <input type="text" class="login-username" id="login-username" placeholder="Type your username...">
            <div class="pass username">Password</div>
            <input type="text" class="login-password" id="login-password" placeholder="Type your password">

            <div class="login-line">
                <a href="#" class="signup signup-frm">Signup</a>
            </div>
            <div class="login-btn">
                <button class="login-valid" data-id="<?php echo $session_id ?>">Login</button>
            </div>

        </div>





        <div class="signin">
            <i class="fa-regular fa-circle-xmark close-login"></i>

            <div class="toppart h1">

                <div class="login-h1 h1">Signup</div>
                <img src="assets\imgs\homepage imgs\grocery-square-high-resolution-logo.png" alt="">
            </div>
            <div>
                <div class="username">Email</div>
                <input type="text" id="signup-email" placeholder="Type your Email" maxlength="50">
                <div class="username">Username</div>
                <input type="text" id="signup-username" class="signup-username" placeholder="Type your Username"
                    maxlength="30">
                <div class="pass username">phone-number</div>
                <input type="text" id="signup-phone" placeholder="Type your pone number" maxlength="10">
                <div class="repeat-pass username">Password</div>
                <input type="text" id="signup-password" placeholder="Type your password" maxlength="10">
                <div class="login-line">
                    <a href="#" class="signup login-frm">Login</a>
                </div>
                <div class="signup-btn login-btn">
                    <button class="signup-valid" onclick="SigninForm('<?php echo $session_id ?>')">Signup</button>
                </div>
            </div>
        </div>






        <!-- <div class="password-forgot">
            <i class="fa-regular fa-circle-xmark close-login"></i>

            <div class="toppart h1">

                <div class="login-h1 h1">Chainge Password</div>
                <img src="assets\imgs\homepage imgs\grocery-square-high-resolution-logo.png" alt="">
            </div>
            <div class="username">Username</div>
            <input type="text" placeholder="Type your Username...">
            <div class="username">Email</div>
            <input type="text" placeholder="Type your email...">
            <div class="login-line">
                <a href="#" class="login-frm-pass">Try with password</a>
            </div>
            <div class="login-btn">
                <button>Send Mail</button>
            </div>

        </div> -->

    </div>
    <!-- This is loginform -->










    <!--This is Header section-->
    <header>


        <div class="logo">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <a href="">GrocerySquare</a>
        </div>


        <nav class="navbar">
            <a href="index.php">Home</a>
            <a onclick="categorydrop()">Catagories <i class="fa-solid fa-angle-down" id="icon_cat"></i></a>
            <a href="shop.php">Products</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>

        <div class="dropdown_content1">
            <a href="shop.php?name=Fruits">Fruits</a>
            <a href="shop.php?name=Vegetables">Vegetables</a>
            <a href="shop.php?name=Meat">Meats</a>
            <a href="shop.php?name=Dairy products">Dairy products</a>
            <a href="shop.php?name=Daily Staples">Daily Staples</a>
            <a href="shop.php?name=Hygiene">Hygiene</a>
            <a href="shop.php?name=Snacks">Snacks</a>
            <a href="shop.php?name=Household">Household</a>
        </div>

        <div class="icons">
            <div class="fa-solid fa-bars" id="menu-btn"></div>
            <div class="fa-solid fa-magnifying-glass" id="search-icon"></div>
            <div class="fa-solid fa-cart-shopping cart" onclick="cart()"></div>
            <div class="fa-solid fa-user login-logo replace"></div>
        </div>


        <!-- <form class="searchbox">
            <input type="search" id="searchbox" placeholder="Search Here.....">
            <label for="searchbox" class="fa-solid fa-magnifying-glass"></label>
        </form> -->


        <!-- this is profile box -->


        <div class="profile-box">
            <div class="user-box">
                <i class="fa-regular fa-user" style="color: #000000;"></i>
                <a class="u-name" href="profilepage.php"> <?php echo $_SESSION['name'] ?></a>
            </div>
            <div class="user-box">
                <i class="fa-regular fa-credit-card"></i>
                <a class="u-name" href="usercoupns.php">
                    Coupons
                </a>
            </div>
            <div class="user-box">
                <a class="fa-solid fa-right-from-bracket" href="controllers/logout.php" style="color: #000000;"></a>
                <a class="u-name" href="controllers/logout.php">
                    Logout
                </a>
            </div>

        </div>


        <!-- this is profile box -->


        <div class="addcart">
            <?php
            $i = 1;
            $total = [];
            $rows = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `purchase_id`='$session_id'");
            ?>
            <?php foreach ($rows as $row): ?>
                <div class="add-prods">
                    <img src="assets\imgs\<?php echo $row['image'] ?>" alt="">
                    <div class="add-imgdata">
                        <div><?php echo $row['name'] ?></div>
                        <div class="item-qty">Per Qty /- <span><b><?php echo $row['qty'] ?></b></span> </div>
                        <div class="price-bar">
                            <div class="disc-price-">&#8377 <?php echo $row['final_price'] ?></div>
                            <!-- <span class="org-price-">&#8377 45</span> -->
                        </div>
                    </div>
                    <div class="remove-btn1">
                        <a onclick="removecart('<?php echo $row['name'] ?>',<?php echo $row['id'] ?>)">Remove</a>
                    </div>
                </div>
                <?php
                array_push($total, $row['final_price']);
            endforeach ?>


            <div class="purchase-btn">
                <div class="total">Your Total = &#8377<span id="price">empty</span></div>
                <button onclick="purchase()">Purchase</button>
            </div>
        </div>

    </header>
    <!--This is Header section-->


    <script>
        var totprice = <?php echo json_encode($total); ?>;
    </script>
    <script src="assets/script.js"></script>

</body>

</html>