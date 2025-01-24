<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: adminlogin.php");
    exit();
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        
        .overlay{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: rgba(0, 0, 0, .4);
            border-radius: 27px;

        }
        .flex{
            z-index: 101;
        }
        .active-cat {
            background-image: url("https://miro.medium.com/v2/resize:fit:1200/1*mo0myR6C7krWTipKq_rJ4A.jpeg");
        }

        .active-products {
            background: rgba(0, 0, 0, .7) url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsJMRGFeHE0comSsYcs5EtdBj8e5RHWfIhVA&s");
            /* background-blend-mode: difference; */

        }

        .notifications {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp19cNnNjW3FXEa2PY0tjWqBeoPariOUatdQ&s");
        }
        .inactive-cat{
            background-image: url("https://miro.medium.com/v2/resize:fit:1200/1*mo0myR6C7krWTipKq_rJ4A.jpeg");

        }
        .inactive-products{
            background: rgba(0, 0, 0, .7) url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsJMRGFeHE0comSsYcs5EtdBj8e5RHWfIhVA&s");
        }
        .orders{
            background: rgba(0, 0, 0, .7) url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQecdlCUeQHuxkKFTBhhDPmMsBhz7XauQw3NQ&s");
        }

        .main-component {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 40px;
        }

        .dashboard-comp {
            position: relative;
            width: 250px;
            height: 250px;
            border: 1.5px solid black;
            margin: 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            background-color: rgb(255 87, 0);
            color: white;
            border-radius: 34px;
            box-shadow: 0 .1rem .5rem rgba(0, 0, 0.1);
        }

        .no-ofcomp {
            /* width: 183px; */
            margin-bottom: 19px;
        }

        .dash-head {
            font-size: 30px;
            font-weight: 500;
            margin: 24px;
            text-align: center;
            text-decoration: underline;

        }
        .dashboard{
            text-decoration: underline;
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

            <p class="dash-head">Dashboard</p>

            <div class="main-component">
                <div class="active-cat dashboard-comp">
                    <div class="overlay"></div>
                    <?php
                        $rows = mysqli_query($conn, "SELECT * FROM `categories` WHERE `status`='0' ");
                        $check = mysqli_num_rows($rows);
                    ?>
                    <div class="no-ofcomp flex"><?php echo $check; ?></div>
                    <div class="names flex">Active Categories</div>
                </div>
                <div class="active-products dashboard-comp">
                    <div class="overlay"></div>
                    <?php
                        $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE 1 ");
                        $check = mysqli_num_rows($rows);
                    ?>
                    <div class="no-ofcomp flex"><?php echo $check; ?></div>
                    <div class="names flex">Active Products</div>
                </div>
                <div class="notifications dashboard-comp">
                    <div class="overlay"></div>
                    <div class="no-ofcomp flex">24</div>
                    <div class="names flex">Notifications</div>
                </div>
                <div class="inactive-cat dashboard-comp">
                    <div class="overlay"></div>
                    <div class="no-ofcomp flex">2</div>
                    <div class="names flex">Inactive Categories</div>
                </div>
                <div class="inactive-products dashboard-comp">
                    <div class="overlay"></div>

                    <div class="no-ofcomp flex">33</div>
                    <div class="names flex">Inactive Products</div>
                </div>
                <div class="orders dashboard-comp">
                    <div class="overlay"></div>
                    <div class="no-ofcomp flex">88</div>
                    <div class="names flex">Orders</div>
                </div>
            </div>
        </div>
        <!--This is Header section-->
    </div>
</body>

</html>