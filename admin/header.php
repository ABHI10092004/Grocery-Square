<!DOCTYPE html>
<html lang="en">
<?php
require ("controllers/itemconnection.php");

// @session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        html {
            font-size: 64%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 7rem;
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
            outline: none;
            text-decoration: none;
            transition: all .2s linear;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        .main-part {
            display: flex;
        }

        /* navbar */



        .navbar {

            background-color: black;
            color: white;
            width: 20vw;
            padding: 82px 0px;
        }

        .navbar a {
            display: block;
            font-size: 2.5rem;
            padding: 15px 9px;
            border-top: 1px solid rgb(105, 105, 105);
            border-bottom: 1px solid rgb(105, 105, 105);
            color: white;
        }

        .navbar a:hover{
            text-decoration: underline;
        }





        /* navbar */


        header {
            display: flex;
            justify-content: space-between;
            /* padding: 12px; */
            align-items: center;
            box-shadow: 0 .1rem .6rem rgba(0, 0, 0.1);
        }

        .rightpart {
            width: 80vw;
        }

        .logo {
            font-size: 2rem;
            color: #130f40;
        }

        .logo i {
            color: green;
            margin-right: 4px;
            margin-left: 2rem;
        }

        .user-icons {
            display: flex;
            align-items: center;
            font-size: 2rem;
            color: #130f40;
            background-color: rgb(205, 205, 205);
            padding: 12px;
            border-radius: 8px;
            margin: 9px;
            /* width: 165px; */
        }

        .user-icons a {
            margin: 0 20px;
        }

        .user-icons .admin-profile {
            height: 3.9rem;
            width: 3.9rem;
            line-height: 3.9rem;
            border-radius: 25px;
            background: #eee;
            color: #130f40;
            font-size: 1.2rem;
            margin-right: .8rem;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>


        <div class="logo">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <a href="">GrocerySquare</a>
        </div>


        <div class="user-icons">
            <div class="fa-regular fa-user admin-profile"></div>
            <div class="admin"> <?php echo $_SESSION['name'] ?></div>
            <a class="fa-solid fa-right-from-bracket" href="controllers/adminlogout.php" style="color: #000000;"></a>
        </div>

    </header>
</body>

</html>