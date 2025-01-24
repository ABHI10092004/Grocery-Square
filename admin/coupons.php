<!DOCTYPE html>
<?php
require ("controllers/itemconnection.php");
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: adminlogin.php");
    exit();
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/coupon.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');





        .main-component {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 40px;
            /* height: 100vh; */
        }

        .main-component .imagecover {
            width: 264px;
            height: 198px;
            box-shadow: 0 .1rem .8rem rgb(113 205 45);
            margin: 27px;
            border-radius: 9px;
            position: relative;
        }


        #coupon-del{
            position: absolute;
            font-size: 10px;
            right: 0;
            top: 0;
            height: 25px;
            width: 35px;
            line-height: 25px;
            text-align: center;
            background: green;
            color: white;
            border-top-right-radius: 8px;
            border-bottom-left-radius: 6px;
        }

        #coupon-del:hover {
            background: red;
        }

        .imagecover img {
            width: 264px;
            height: 198px;
            /* box-shadow: 0 .1rem .5rem rgb(126, 126, 126); */
            /* margin: 27px; */
            border-radius: 9px;
        }



        .coupon-btn {
            display: flex;
            justify-content: center;
            margin: 18px 30px;
            padding: 20px 12px;
            border: 1px solid green;
            border-style: dashed;
            border-top: none;
            border-right: none;
            border-left: none;
        }

        .coupon-btn button {
            padding: 10px;
            font-size: 16px;
            border: 2px solid green;
            border-radius: 8px;
            background: none;
            color: green;
        }

        .coupon-btn button:hover {
            background: green;
            color: white;
        }






        .overlay- {
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            z-index: 1000;
            position: absolute;
        }


        .close-inputfrm {
            margin: 10px 0 !important;
        }


        .item-frm {
            z-index: 1001;
            padding: 24px;
            font-size: 18px;
            /* border: 2px solid black; */
            background-color: white;
            position: absolute;
            right: 4rem;
            top: 10rem;
            color: black;
            border-radius: 14px;
            display: none;
        }

        .heading {
            font-size: 24px;
            margin: 24px;
            text-align: center;
        }

        .frm-labels {
            font-size: 18px;
            margin-bottom: 12px;
            display: block;

        }

        .item-frm input {
            border: 1px solid black;
            padding: 10px;
            font-size: 18px;
            color: black;
            background: white;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .item-submitbtn {
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .item-submitbtn button {
            border: 2px solid black;
            background: white;
            font-size: 14px;
            padding: 10px;
            border-radius: 9px;
            color: black;
        }

        .item-submitbtn button:hover {
            background: black;
            color: white;
        }

        .coupons{
            text-decoration: underline !important;
        }
    </style>
</head>

<body>
    <div class="main-part">
    <div class="navbar">
            <a class="dashboard" href="admin.php">Dashboard</a>
            <a class="Orders" href="orders.php">Orders</a>
            <a class="categories" href="admincat.php">Categories</a>
            <a class="items" href="adminitem.php">Items</a>
            <a class="coupons" href="coupons.php">Coupns</a>
        </div>




        <!--This is Header section-->
        <div class="rightpart">

        <?php require 'header.php' ?>


            <div class="overlay-"></div>
            <div class="item-frm">
                <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login"
                        onclick="closecouponfrm()"></i></div>

                <div class="heading">Add Coupon Form</div>
                <label class="frm-labels" for="images">Upload Image</label>
                <input name="images" id="coupon-images" type="file">
                <div class="item-name frm-labels">Enter your Coupon</div>
                <input type="text" id="coupon" placeholder="Coupon name">
                <div class="item-submitbtn">
                    <button id="item-submit" onclick="submitcoupon()">Add Coupon</button>
                </div>
            </div>



            <div class="coupon-btn">
                <button class="add" onclick="addcoupon()">Add Coupons</button>
            </div>


            <div class="main-component">

                <?php
                $rows = mysqli_query($conn, "SELECT * FROM `coupon` WHERE `status`='0'");
                ?>
                <?php foreach ($rows as $row): ?>

                    <div class="imagecover">
                        <img src="adminimg/<?php echo $row['image'] ?>" alt="">
    
                        <a class="fa-solid fa-trash" id="coupon-del" onclick="return confirmDelete();" href="controllers/coupondel.php?id=<?php echo $row['id']; ?>" ></a>
                    </div>
                <?php endforeach ?>



            </div>
        </div>
    </div>






</body>

</html>