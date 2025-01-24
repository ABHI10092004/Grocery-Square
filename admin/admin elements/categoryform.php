<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100%;
            background-color: #fff;
        }

        .overlay {
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            
            position: relative;
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
        }

        .catform div {
            font-size: 20px;
            margin: 20px 0;
            display: block;
            color: black;

        }

        .catform input {
            margin-bottom: 20px;
            padding: 14px;
            font-size: 15px;
            background: white;
            border: 2px solid black;
        }
        .cathead-input{
            font-size: 26px;
            font-weight: 600;
            margin: 40px 0 !important;
            text-align: center;
        }
        .close-inputfrm{
            margin: 10px 0 !important;
        }
        
    </style>
</head>

<body>
    <div class="overlay">


        <div class="catform">
            <div class="close-inputfrm"><i class="fa-regular fa-circle-xmark close-login"></i></div>
            <div class="cathead-input">Input New Category</div>
            <div class="catinput">Upload Img</div>
            <input type="file" class="cat-inputimg" >
            <div class="catinput">Category Name</div>
            <input type="text" class="cat-nameinput" placeholder="category name...">
            <div class="catinput">Category Offer Rainge</div>
            <input type="text" class="cat-inputoffer" placeholder="category offer...">

        </div>
    </div>
</body>

</html>