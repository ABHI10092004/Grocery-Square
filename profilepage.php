<!DOCTYPE html>
<?php

include ("controllers/db.php");
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}
?>
<?php require 'header.php' ?>





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
    <link rel="stylesheet" href="elements/productcategory.css">

    <style>
        body {
            padding: 0 !important;
            /* height: 100vh; */
        }

        .body- {
            background-color: #dddddd;
            /* height: 100%; */
            margin: 0;
            padding: 16px;
        }

        .profilepg {
            height: 100px;
            width: 100px;
            line-height: 100px !important;
            border-radius: 50px;
            background: #eee;
            color: #130f40;
            font-size: 20px;
            margin-right: .8rem;
            text-align: center;
            cursor: pointer;
            font-weight: 800 !important;
        }

        .main-profile {
            width: 100%;

            background-color: white;

            display: flex;
            flex-direction: column;
            border: 2px solid #e0e0e0;
            border-top: none;
            border-left: none;
            border-right: none;
        }

        .profie-cover {
            margin-top: 80px;

            background-color: white;
            border-radius: 10px;
            padding: 55px;

        }

        .profile {
            display: flex;
            font-size: 26px;
            font-weight: 400;
            padding: 12px 0;
            margin: 10px 0;
            color: black;
            align-items: center;
        }

        .profile button {
            padding: 8px;
            margin-left: 24px;
            border-radius: 8px;
            background: blue;
            color: white;
            font-size: 14px;
            width: 100px;
        }

        .hed {
            font-size: 15px;
            color: #666;

        }

        .ansbox {
            font-size: 17px;
            font-weight: 600;
            color: black;
            margin-bottom: 20px;
        }

        .chainge-pass button {
            padding: 10px 13px;
            font-size: 14px;
            background: blue;
            color: white;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .profile-pghd{
            display: block;
            font-size: 29px;
            font-weight: 300;
            margin-bottom: 34px;
            color: #666;
            /* text-decoration: underline; */
        }











        .overlay11 {
            width: 100vw;
            height: 120vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            position: absolute;
            z-index: 1000;
        }


        .close-editfrm {
            margin: 10px 0 !important;
        }


        .item-frm11 {
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

        .item-frm11 input {
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

        .itemimg {
            width: 120px;
        }







    
        .overlay12 {
            width: 100vw;
            height: 120vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            position: absolute;
            z-index: 1000;
        }


        .close-editfrm {
            margin: 10px 0 !important;
        }


        .item-frm12 {
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

        .item-frm12 input {
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

        .itemimg {
            width: 120px;
        }
    </style>
</head>

<body>
    
    <div class="overlay11"></div>
    <div class="item-frm11">
        <div class="close-editfrm"><i class="fa-regular fa-circle-xmark close-login" onclick="closelogin()"></i>
        </div>
        <div class="heading">Edit Profile Form</div>
        <div class=" frm-labels">Enter your Username</div>
        <input type="text" id="name" placeholder="username" value="<?php echo  $_SESSION['name']; ?>">
        <div class=" frm-labels">Enter your Email</div>
        <input type="text" id="email-pg" placeholder="Email" value="<?php echo  $_SESSION['email']; ?>">
        <div class="item-org frm-labels">Enter items Phone Number</div>
        <input type="text" id="ph-pg" placeholder="Phone Number" value="<?php echo  $_SESSION['phone']; ?>">
        <div class="item-submitbtn">
            <button class="edit-submit" onclick="updateprof1(<?php echo  $_SESSION['id']; ?>)">Edit Profile</button>
        </div>
    </div>


    <div class="overlay12"></div>
    <div class="item-frm12">
        <div class="close-editfrm"><i class="fa-regular fa-circle-xmark close-login" onclick="closepass()"></i>
        </div>
        <div class="heading">Chainge Password Form</div>
        <div class=" frm-labels">Enter your Old Password</div>
        <input type="text" id="old-pass" placeholder="Old Password">
        <div class=" frm-labels">Enter your New Password</div>
        <input type="text" id="new-pass" placeholder="New Password">
        <div class="item-submitbtn">
            <button class="edit-submit" onclick="submitpass(<?php echo  $_SESSION['id']; ?>)">Update Password</button>
        </div>
    </div>


    <div class="body-">

        
        <div class="profie-cover">
            <div class="profile-pghd">Profile Details</div>
            <div class="main-profile">
                <div class="fa-regular fa-user profilepg"></div>
                <div class="profile">
                    <div class="profilepg-name"><?php echo  $_SESSION['name']; ?></div>
                    <button onclick="updateprof()">Edit</button>
                </div>
                <div class="profile-name hed">Email</div>
                <div class="ansbox"><?php echo  $_SESSION['email']; ?></div>
                <div class="profile-name hed">Phone</div>
                <div class="ansbox"><?php echo  $_SESSION['phone']; ?></div>
                <div class="chainge-pass"><button onclick="updatepass()">Change Password</button></div>
            </div>

        </div>
    </div>
    <?php require "footer.php" ?>
</body>

</html>