<?php
// simple handling (opsional)
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == "admin@gmail.com" && $password == "12345") {
        $msg = "Login berhasil!";
    } else {
        $msg = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="/lib/jquery.js"></script>
    <style>
        body {
            font-family: Arial;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #eee;
            padding: 30px;
            border-radius: 15px;
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .btn {
            background: #2eaadf;
            color: white;
            border: none;
            padding: 10px;
            width: 95%;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn:hover {
            background: #1c8fc2;
        }

        .msg {
            color: red;
            font-size: 14px;
        }

        .link {
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="container" id="sign-in">
    <h2>Sign In</h2>
    <p style="font-size:12px;">Enter your credentials</p>

    <form>
        <input type="email" placeholder="Email Address" required>
        <input type="password" placeholder="Password" required>
        <button class="btn">Sign In</button>
    </form>

    <div class="link">
        <a href="#" class="toForgot">Forgot Password?</a><br><br>
        Don't have account? <a href="#" class="toSignUp">Sign Up</a>
    </div>
</div>

<!-- SIGN UP -->
<div class="container" id="sign-up">
    <h2>Sign Up</h2>
    <p style="font-size:12px;">Create your account</p>

    <form>
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <input type="password" placeholder="Confirm Password" required>
        <button class="btn">Create Account</button>
    </form>

    <div class="link">
        Already have account? <a href="#" class="toSignIn">Sign In</a>
    </div>
</div>

<!-- FORGOT PASSWORD -->
<div class="container" id="forgot">
    <h2>Forgot Password?</h2>
    <p style="font-size:12px;">Reset your password</p>

    <form>
        <input type="email" placeholder="Enter your email" required>
        <input type="password" placeholder="New Password" required>
        <button class="btn">Confirm</button>
    </form>

    <div class="link">
        Remember password? <a href="#" class="toSignIn">Sign In</a>
    </div>
</div>

<script>
$(document).ready(function(){

    // default tampil
    $('#sign-in').show();
    $('#sign-up').hide();
    $('#forgot').hide();

    // ke SIGN UP
    $('.toSignUp').click(function(e){
        e.preventDefault();
        $('#sign-in').hide();
        $('#forgot').hide();
        $('#sign-up').show();
    });

    // ke SIGN IN
    $('.toSignIn').click(function(e){
        e.preventDefault();
        $('#sign-up').hide();
        $('#forgot').hide();
        $('#sign-in').show();
    });

    // ke FORGOT
    $('.toForgot').click(function(e){
        e.preventDefault();
        $('#sign-in').hide();
        $('#sign-up').hide();
        $('#forgot').show();
    });

});
</script>

</body>
</html>