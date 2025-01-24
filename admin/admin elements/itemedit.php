<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        /* item update form */
    </style>


</head>

<body>
    <div class="overlay1"></div>
    <div class="item-frm1">
        <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login" onclick="closelogin()"></i></div>
        <div class="heading">Update Form</div>
        <label class="frm-labels1" for="images">Upload Image</label>
        <input name="images" id="images" type="file">
        <div class="item-name frm-labels1">Enter your Item Name</div>
        <input type="text" id="name" placeholder="Item name">
        <div class="item-org frm-labels1">Enter items original Price</div>
        <input type="text" id="orgprice" placeholder="Item Original Price">
        <div class="final-prg frm-labels1">Enter The Final Price</div>
        <input type="text" id="finalprice" placeholder="Item Final Price">
        <div class="item-submitbtn">
            <button class="item-submit" onclick="submititem()">Add Product</button>
        </div>
    </div>
</body>

</html>