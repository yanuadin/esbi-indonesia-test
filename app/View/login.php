<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v4 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?php __DIR__ ?>/css/style.css">
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="images/registration-form-4.jpg" alt="">
        </div>
        <form action="/login" method="POST">
            <h3>Log In</h3>
            <div class="form-holder active">
                <input type="email" placeholder="e-mail" class="form-control" name="email">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;" name="password">
            </div>
<!--            <div class="checkbox">-->
<!--                <label>-->
<!--                    <input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>-->
<!--                    <span class="checkmark"></span>-->
<!--                </label>-->
<!--            </div>-->
            <div class="form-login">
                <button>Log In</button>
                <p>Dont have account? <a href="/register">Sign Up</a></p>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>