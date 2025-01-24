<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-contact {
            height: 100vh;
            background-image: linear-gradient(#a2caa6, #b8e1ba);
        }
        .contact_submit{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact_submit button{
            padding: 10px 14px;
            font-size: 16px;
            color: white;
            background: green;
            border-radius: 10px;
        }
        .contact_submit button:hover{
            background: white;
            border: 2px solid green;
            color: green;
        }
    </style>
</head>

<body>
    <?php require "header.php" ?>
    <div class="body_contact">

        <div class="contact_frm">
            <div class="contact_hed">Contact Us</div>
            <div class="contact-cover">
                <div class="lets_chat">
                    <p>If taking to a human is more of your thing</p>
                    <p>then you can reach out(Here)</p>
                    <img src="https://img.freepik.com/premium-vector/pattern-green-leaves-natural-branches-isolated-white-background-design-set-leaf-use-environmental-health-logos-elements-eco-bio-logos_735449-47.jpg?w=360" alt="">
                </div>
                <div class="frm_content">
                    <div class="content_name">Name</div>
                    <input type="text" class="frm_input" placeholder="Your Name">
                    <div class="content_name">Email</div>
                    <input type="text" class="frm_input" placeholder="Your Email">
                    <div class="content_name">Phone</div>
                    <input type="text" class="frm_input" placeholder="Your Phone">
                    <div class="content_name">Your Message</div>
                    <textarea class="frm_input message_box" placeholder="Type Your Message"></textarea>
                    <div class="contact_submit">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require "footer.php" ?>
</body>

</html>