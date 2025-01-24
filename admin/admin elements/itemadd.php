<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            width: 100wh;
            height: 100vh;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .overlay{
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            
            position: absolute;
        }


        .close-inputfrm{
            margin: 10px 0 !important;
        }


        .item-frm{
            padding: 24px;
            font-size: 18px;
            /* border: 2px solid black; */
            background-color: white;
            position: absolute;
            right: 4rem;
            top: 4rem;
            color: black;
            border-radius: 14px;
            display: none;
        }
        .heading{
            font-size: 24px;
            margin: 24px;
            text-align: center;
        }
        .frm-labels{
            font-size: 18px;
            margin-bottom: 12px;
            display: block;

        }
        .item-frm input{
            border: 1px solid black;
            padding: 10px;
            font-size: 18px;
            color: black;
            background: white;
            border-radius: 8px;
            margin-bottom: 12px;
        }
        .item-submitbtn{
            display: flex;
            justify-content: center;
            padding: 10px;
        }
        .item-submitbtn button{
            border: 2px solid black;
            background: white;
            font-size: 14px;
            padding: 10px;
            border-radius: 9px;
            color: black;
        }
        .item-submitbtn button:hover{
            background: black;
            color: white;
        }

    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="item-frm">
       <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login"></i></div>

        <div class="heading">Add Input Form</div>
        <label class="frm-labels" for="images">Upload Image</label>
        <input name="images" id="images" type="file">
        <div class="item-name frm-labels">Enter your Item Name</div>
        <input type="text" id="item-name" placeholder="Item name">
        <div class="item-org frm-labels">Enter items original Price</div>
        <input type="text" id="org-price" placeholder="Item Original Price" >
        <div class="final-prg frm-labels">Enter The Final Price</div>
        <input type="text" id="final-price" placeholder="Item Final Price" >
        <div class="item-submitbtn">
            <button id="item-submit" >Add Product</button>
        </div>
    </div>
</body>
</html>