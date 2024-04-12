<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
 
    <title>Document</title>
</head>
<body>
    
<?php include'menu.php';?>
<br>
<br>
<section>
    <div class="container">
        <div class="row justify-content-center"> <!-- Centering the form -->
            <form action="login" method="post">
                <div class="wrapper">
                    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
                    <div class="form-box login">
                        <h1> Login</h1>
                        <form action="login" method="post">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                <input type="email"  required="required" name="em">
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password"  required="required" name="pwd">
                                <label>password</label>
                            </div>
                            <div class="remember-forgot">
                                <label><input type="checkbox">remember me</label>
                                <a href="#">forgot password?</a>
                            </div>
                            <button type="submit" class="btns"> Login</button>
                            <div class="login-register">
                                <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="form-box register">
                        <h1>Registration</h1>
                        <form action="register" method="post">
                        <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                    <input type="text"  required="required" name="na">
                    <label>Username</label>
                    
                </div>
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email"  required="required" name="em">
                    <label>Email</label>
                    
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"  ></ion-icon></span>
                    <input type="password"  required="required" name="pwd" value="" id="lock">
                    <label>password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">show password</label>
                 </div>
                <button type="submit" class="btns" value="register">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div> 
            </form>
        </div>
    </div>
</section>
<br>
<br>
<footer>
    <p class="p-3 bg-dark text-white text-center">@PHPDeveloper2024</p>
</footer>  
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
