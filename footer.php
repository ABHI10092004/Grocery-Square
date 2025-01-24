<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        /* this is footer */
footer {
    background-color: white;
    width: 100%;
}

.quicklnk a{
    color: #DDDDDD;
}

.main-ftr {
    background-color: #101010;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    padding: 40px 0;
    color: #DDDDDD;
}


.small-info {
    width: 208px;
}

.small-info .ftr-logo {
    display: flex;
    margin-bottom: 18px;
}

.ftr-logo i {
    margin: 3px;
    font-size: 24px;
    color: #ffffff;
}

.ftr-logo div {
    font-size: 26px;
    color: #ffffff;
}

.ftr-content {
    color: #DDDDDD;
    font-size: 16px;
    margin-bottom: 11px;
    margin-left: 4px;
    text-transform: capitalize;
}

.social-logo {
    font-size: 18px;
    /* margin-left: px; */
}

.social-logo div {
    margin: 0 4px;
}



.contact-info {
    width: 208px;
}

.contact-info .contac {
    color: #ffffff;
    font-size: 26px;
    margin: 0 6px 18px 0
}

.contact-info .contact {
    display: flex;
    margin: 6px 6px;
}

.contact div {
    margin-left: 10px;
}



.quick-links {
    width: 208px;
}

.quick-links .quick {
    color: #ffffff;
    font-size: 26px;
    margin-bottom: 17px;
}

.quick-links .quicklnk {
    display: flex;
    margin: 12px 6px;
    font-size: 18px;
    font-weight: 400;
}

.quicklnk div {
    margin-left: 6px;
}



.newsletter {
    width: 208px;
    font-size: 16px;
}

.newsletter .news {
    color: #ffffff;
    font-size: 26px;
    margin-bottom: 18px;
}

.newsletter input {
    font-size: 12px;
    padding: 3px;
    padding-left: 6px;
    width: 100%;
    border-radius: 5px;
}

.news-cont {
    margin-bottom: 11px;
}

.sub-btn {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 11px;
}

.sub-btn button {
    background: #ffffff;
    border-radius: 6px;
    font-size: 15px;
    padding: 5px;
}




.sub-ftr {
    height: 70px;
    display: flex;
    width: 100%;
    color: #DDDDDD;
    background-color: #101010;
    justify-content: center;
}

.sub-ftr .creator {
    font-size: 24px;
    height: 100%;
    font-weight: 200;
    width: 85%;
    border-top: 1px solid #DDDDDD;
    text-align: center;
    padding-top: 24px;
}

.creator span {
    color: #ffffff;
}

/* this is footer */



    </style>
</head>
<body>
    
    <!-- this is footer -->


    <footer>
        <div class="main-ftr">

            <div class="small-info">
                <div class="ftr-logo">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <div>GrocerySquare</div>
                </div>
                <div class="ftr-content">
                    Feel free to follow us on social media handles all the links are given below
                </div>
                <div class="social-logo">
                    <div class="fa-brands fa-facebook"></div>
                    <div class="fa-brands fa-square-x-twitter"></div>
                    <div class="fa-brands fa-square-instagram"></div>
                    <div class="fa-brands fa-linkedin"></div>
                </div>
            </div>




            <div class="contact-info">
                <div class="contac">Contact-info</div>
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <div>+123-456-7890</div>
                </div>
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <div>+11-222-3333</div>
                </div>
                <div class="contact">
                    <i class="fa-solid fa-envelope"></i>
                    <div>demo1@gmail.com</div>
                </div>
                <div class="contact">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>Pune, India-400104</div>
                </div>
            </div>




            <div class="quick-links">
                <div class="quick">Quick Links</div>
                <div class="quicklnk">
                    <i class="fa-solid fa-right-long"></i>
                    <a href="index.php">Home</a>
                </div>
                <div class="quicklnk">
                    <i class="fa-solid fa-right-long"></i>
                    <a href="aboutus.php">About Us</a>
                </div>
                <div class="quicklnk">
                    <i class="fa-solid fa-right-long"></i>
                    <a href="shop.php">Products</a>
                </div>
                <div class="quicklnk">
                    <i class="fa-solid fa-right-long"></i>
                    <a href="contact.php">Contact</a>
                </div>
            </div>



            <div class="newsletter">
                <div class="news">Newsletter</div>
                <div class="news-cont">Subscribe for latest updates</div>
                <input type="text" placeholder="Your Email">
                <div class="sub-btn">

                    <button>Subscribe</button>
                </div>
            </div>
        </div>







        <div class="sub-ftr">
            <div class="creator">Created By <span>Shiftwave Technologies</span> | All Rights Reserved</div>
        </div>
    </footer>


    <!-- this is footer -->
</body>
</html>