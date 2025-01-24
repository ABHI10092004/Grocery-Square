<!DOCTYPE html>
<?php
// require ("controllers/itemconnection.php");
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
    <script src="assets/admincat.js"></script>

    <style>
        


        .categories {
            /* height: 100vh; */
            /* padding: 80px; */
            display: flex;
            align-items: center;
            justify-content: center;
            /* padding: 20px 87px; */
            flex-wrap: wrap;
        }

        .categories-card {
            /* width: 24%; */
            /* height: 210px; */
            outline: green 2px solid;
            /* box-shadow: 0 .1rem 1rem green; */

            padding: 18px;
            border-radius: 5px;
            margin: 25px 25px;
        }

        .categories-card:hover {
            box-shadow: 0 .1rem 1rem red;
            outline: red 1px solid;
            transition: 0.4s;
        }

        .catcover div {
            margin: 8px 0;
        }
        .catcover img{
            height: 195px;
            width: 190px;
        }

        .cat-name {
            font-size: 18px;
            font-weight: 800;
            text-align: center;
        }

        .cat-offer {
            text-align: center;
            font-size: 16px;
            color: #424242;
        }

        .cat-btn {
            display: flex;
            justify-content: center;
        }

        .cat-btn button {
            width: 70%;
            border-radius: 4px;
            border: 2px solid black;
            background: none;
            font-size: 1.2rem;
            padding: 5px;
        }

        .cat-btn button:hover {
            border: 2px solid red;
            background: red;
            color: white;
        }

        .categories-card .catcover {
            outline: rgb(88, 171, 88) solid 1px;
            border-radius: 5px;
            padding: 20px;
            display: flex;
            flex-direction: column;

        }



        /* addcatbtn */

        .add-catbtn {
            padding: 14px;
            background-color: #fff;
            margin: 4px;
            font-size: 20px;
            display: flex;
            justify-content: center;

        }

        #addbtn {
            color: black;
            background: white;
            border: 2px solid black;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 .1rem .4rem black;

        }

        #addbtn:hover {
            background: black;
            color: white;
        }

        /* addcatbtn */




        /* addcatfrm */
        .overlay {
            width: 100%;
            height: 180%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            z-index: 1000;

            position: absolute;
        }

        .catform {
            background-color: white;
            border: 2px solid black;
            padding: 38px 48px;
            position: absolute;
            border-radius: 16px;
            right: 2rem;
            top: 2rem;
            display: none;
            z-index: 1001;
        }

        .catform div {
            font-size: 20px;
            margin: 16px 0;
            display: block;
            color: black;
        }
        .catform .special{
            font-size: 20px;
            margin: 16px 0;
            display: block;
            color: black;
        }

        .catform input {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 13px;
            background: white;
            border: 2px solid black;
            border-radius: 5px;
        }

        .cathead-input {
            font-size: 26px;
            font-weight: 600;
            margin: 31px 0 !important;
            text-align: center;
        }

        .close-inputfrm {
            margin: 10px 0 !important;
        }

        .submit {
            margin: 20px;
            display: flex !important;
            justify-content: center;
            padding: 5px;
            width: 100%;
        }

        .submit button {
            padding: 12px;
            font-size: 14px;
            font-weight: 300;
            color: black;
            background: white;
            border: 2px solid black;
            border-radius: 5px;
        }

        .submit button:hover {
            background: black;
            color: white;
        }

        /* addcatfrm */


        .categories1{
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- addcat -->
    <div class="overlay">


        <div class="catform">
            <div class="close-inputfrm">
                <i class="fa-regular fa-circle-xmark close-login" onclick="closelogin()"></i>
            </div>
            <div class="cathead-input">Input New Category</div>

            <label class="catinput special" for="images">Upload Img</label>
            <input type="file" name="images" id="images" required />
            <div class="catinput">Category Name</div>
            <input type="text" id="imagename" placeholder="Category Name" required />
            <div class="catinput">Maximum Discount</div>
            <input type="text" id="offer" placeholder="Maximum discount" required />
            <div class="submit"><button id="submitit" onclick="sendit()">Submit</button></div>

        </div>
    </div>
    <!-- addcat -->

    <div class="main-part right">
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


            <div class="add-catbtn">
                <button id="addbtn" onclick="catfrm()">Add Category</button>
            </div>

            <div class="categories">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM `categories` WHERE `status`='0'");
                ?>
                <?php foreach ($rows as $row): ?>
                    <div class="categories-card">
                        <div class="catcover">
                            <!-- <input type = "hidden" id="id" value=""> -->
                            <img src="../admin/adminimg/<?php echo $row['image'] ?>" alt="">
                            <div class="cat-name"><?php echo $row['name'] ?></div>
                            <div class="cat-offer"><?php echo "Upto " . $row['offer'] . " Off" ?></div>
                            <div class="cat-btn">
                                <button class="deactivate-cat" data-id="<?php echo $row['id'] ?>">Deactivate</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>









            </div>


        </div>
        <!--This is Header section-->
    </div>
</body>

</html>