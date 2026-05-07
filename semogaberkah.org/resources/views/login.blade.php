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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <form id="formLogin">
        <input type="text" id="usernameEmailLogin" placeholder="Username / Email Address" required>
        <input type="password" id="passwordLogin" placeholder="Password" required>
        <button type="button" class="btn" id="btnLogin">Sign In</button>
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
        <input id="fullNameRegist" type="text" placeholder="Full Name" required>
        <input id="usernameRegist" type="text" placeholder="UserName" required>
        <input id="emailRegist" type="email" placeholder="Email" required>
        <input id='passwordRegist' type="password" placeholder="Password" required>
        <input id='passwordConfirmRegist' type="password" placeholder="Confirm Password" required>
        <button class="btn" id="btnRegist">Create Account</button>
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

// Login
$('#btnLogin').click(function (e) { 
    let userInfo = $('#usernameEmailLogin').val();
    let password = $('#passwordLogin').val();
    let form     = document.getElementById('formLogin');

    if (!form.checkValidity()) {
        form.reportValidity();
        return; 
    }

    $.ajax({
        type: "POST",
        url: "/login-page/login",
        data: {
            'login_data'  : userInfo,
            'password'    : password
        },
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            if(response.status){

            }
        }
    });
});

// Regist
$('#btnRegist').click(function(){
    let fullName    = $("#fullNameRegist").val();
    let userName    = $('#usernameRegist').val();
    let password    = $('#passwordRegist').val();
    let passwordConf= $('#passwordConfirmRegist').val();
    let email       = $('#emailRegist').val();

    if(password === passwordConf){
        $.ajax({
            type: "POST",
            url: "/login-page/regist",
            data: {
                'username': userName;
                'fullName': fullName;
                'email'   : email;
                'password': password;
            },
            headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                
            }
        });
    }
});
</script>

</body>
</html>