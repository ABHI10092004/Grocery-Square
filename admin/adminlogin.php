<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <a href="">GrocerySquare</a>
        </div>
    </header>

    <div class="body">
        <div class="adminbox">
            <img src="/groceryproject/assets/imgs/adminimgs/adminlogo.jpg" alt="">
            <div class="admin-loginbox">
                <div class="admin-title">Admin</div>
                <div class="admin-namebox">

                    <div class="admin-lable">Username</div>
                    <input type="text" class="admin-input" id="admin-username" placeholder="Type in your username...">
                </div>
                <div class="admin-passbox">

                    <div class="admin-lable">Password</div>
                    <input type="text" class="admin-input" id="admin-password" placeholder="Type in your password...">
                </div>
                <div class="adminlogin-btn">
                    <button onclick="adminvarify()" id="admin-verify">Login</button>
                </div>
            </div>
        </div>
    </div>




</body>

</html>