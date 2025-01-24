<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: adminlogin.php");
    exit();
}

require ("controllers/itemconnection.php");
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/adminitem.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');






        .main-component {
            /* display: flex;
            flex-wrap: wrap;
            justify-content: space-between; */
            padding: 20px 20px;
        }

        .btns {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 9px;


        }

        .btns button {
            font-size: 18px;
            padding: 8px;
            border-radius: 9px;
            border: 2px solid green;
            background: white;
            color: green;

        }

        .btns button:hover {
            background: green;
            color: white;
        }

        .table {
            height: 100vh;
            overflow-y: auto;
            width: 100%;
            background-color: #666;
        }


        .tablecover{
            width: 100%;
            padding: 0;
            margin: 0;
            height: 100vh;
            box-sizing: border-box;
            overflow-y: auto;
            overflow-y: auto;
        }

        #items {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            overflow-y: auto;
        }

        #items td,
        #items th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #items tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #items tr:hover {
            background-color: #ddd;
        }

        #items th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        td button {
            padding: 6px 10px;
            font-size: 14px;
            background: none;
            border: 2px solid green;
            border-radius: 9px;
            color: green;
        }

        td button:hover {
            background: green;
            color: white;
        }



        /* item add form */
        .overlay {
            width: 100vw;
            height: 113vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            position: absolute;
            z-index: 1000;
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

        .itemimg {
            width: 120px;
        }

        /* item add form */





        /* item del frm */
        .overlay1 {
            width: 100vw;
            height: 113vh !important;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            position: absolute;
        }

        .close-inputfrm {
            margin: 10px 0 !important;
        }


        .item-del-frm {
            padding: 24px;
            font-size: 18px;
            /* border: 2px solid black; */
            background-color: white;
            position: absolute;
            right: 20%;
            top: 14%;
            color: black;
            border-radius: 14px;
            display: none;
        }

        .heading {
            font-size: 24px;
            margin: 24px;
            text-align: center;
        }

        .item-delbtn {
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .item-delbtn a {
            text-decoration: none;
            border: 2px solid green;
            background: none;
            font-size: 12px;
            padding: 8px;
            border-radius: 9px;
            color: green;
        }

        .item-delbtn a:hover {
            background: green;
            color: white;
        }

        /* item del frm */






        /* item update form */
        .overlay1 {
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            position: absolute;
            z-index: 1000;
        }


        .close-inputfrm {
            margin: 10px 0 !important;
        }


        .item-frm1 {
            z-index: 1001;
            padding: 24px;
            font-size: 18px;
            /* border: 2px solid black; */
            background-color: white;
            position: absolute;
            right: 1rem;
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
        
        .frm-labels1 {
            font-size: 14px;
            margin-bottom: 10px;
            display: block;

        }

        .item-frm1 input {
            border: 1px solid black;
            padding: 10px;
            font-size: 14px;
            color: black;
            background: white;
            border-radius: 8px;
            margin-bottom: 10px;
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

        #itemimages {
            display: block;
        }


        .frm-labels1 img {
            width: 90px;
        }

        /* item update form */



        .items{
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



            <div class="overlay"></div>
            <div class="item-frm">
                <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login"
                        onclick="closelogin()"></i></div>
                <div class="heading">Add Input Form</div>
                <label class="frm-labels" for="images">Upload Image</label>
                <input name="images" id="images" type="file">
                <div class="item-name frm-labels">Enter your Item Name</div>
                <input type="text" id="name" placeholder="Item name">
                <div class="item-name frm-labels">Enter your Item Category</div>
                <input type="text" id="category" placeholder="Item category">
                <div class="item-org frm-labels">Enter items original Price</div>
                <input type="text" id="orgprice" placeholder="Item Original Price">
                <div class="final-prg frm-labels">Enter The Final Price</div>
                <input type="text" id="finalprice" placeholder="Item Final Price">
                <div class="item-submitbtn">
                    <button class="item-submit" onclick="submititem()">Add Product</button>
                </div>
            </div>



            <div class="overlay1"></div>
            <div class="item-frm1">
                <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login"
                        onclick="closelogin1()"></i></div>
                <div class="heading">Update Form</div>
                <label class="frm-labels1" for="images"><img src="" alt="" id="up-img"></label>
                <input name="images" id="itemimages" type="file" />
                <div class="item-name frm-labels1">Enter your Item Name</div>
                <input type="text" id="itemname" placeholder="Item name">
                <div class="item-name frm-labels1">Enter your Item category</div>
                <input type="text" id="itemcategory" placeholder="Item ">
                <div class="item-org frm-labels1">Enter items original Price</div>
                <input type="text" id="itemorgprice" placeholder="Item Original Price"
                    value="<?php echo $row['orgprice'] ?>">
                <div class="final-prg frm-labels1">Enter The Final Price</div>
                <input type="text" id="itemfinalprice" placeholder="Item Final Price"
                    value="<?php echo $row['discprice'] ?>">
                <div class="item-submitbtn">
                    <button class="item-update" onclick="update()">Update Product</button>
                </div>
            </div>

            <div class="main-component">
                <div class="btns">
                    <button id="add-new-item" onclick="additem()">Add Item</button>
                </div>
                <div class="tablecover">
                    <table id="items">
                        <tr>
                            <th>Item Name</th>
                            <th>category</th>
                            <th>Item Original Price</th>
                            <th>Item Final Price</th>
                            <th>Image</th>
                            <th>Offer Rainge</th>
                            <th>Edit Option</th>
                            <th>Delete Option</th>
                        </tr>
                        <?php
                        $rows = mysqli_query($conn, "SELECT * FROM `products` WHERE 1 ");
                        ?>
                        <?php foreach ($rows as $row): ?>
                            <tr> 
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['orgprice'] ?></td>
                                <td><?php echo $row['discprice'] ?></td>
                                <td><img src="../assets/imgs/<?php echo $row['image'] ?>" alt="" class="itemimg"></td>
                                <td><?php echo $row['offer'] . "%" ?></td>
                                <td><button id="edit-item"
                                        onclick="updateitem('<?php echo $row['name'] ?>','<?php echo $row['category'] ?>','<?php echo $row['orgprice'] ?>','<?php echo $row['discprice'] ?>','<?php echo $row['image'] ?>','<?php echo $row['id']; ?>') ">Edit</button>
                                </td>
 

                                <td>
                                    <div class="item-delbtn"><a
                                            href="controllers/delete_product.php?id=<?php echo $row['id']; ?>"
                                            class="item-del" onclick="return confirmDelete();">Remove</a></div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
        <!--This is Header section-->
    </div>
</body>

</html>