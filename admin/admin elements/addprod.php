<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .overlay{
            position: absolute;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            /* display: none; */
        }
        .prodform{
            padding: 24px;
            position: absolute;
            right: 2rem;
            top: 2rem;
        }
        .prodhead{
            font-size: 24px;
            font-weight: 600;
            color: black;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="prodform">
        <div class="prodhead">Product Form</div>
        <div class="prodlable">Upload Image</div>
        <input type="file" id="prod-imginput">
        <div class="prodlable">Upload Name</div>
        <input type="text" id="prod-name" placeholder="Product Name">
        <div class="prodlable">Original Price</div>
        <input type="text" id="prod-orgprice" placeholder="Original Price">
        <div class="prodlable">Discount Price</div>
        <input type="text" id="prod-discprice" placeholder="Discount Price">
    </div>
</body>
</html>