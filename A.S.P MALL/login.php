<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to A.S.P Mall</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="main">
        <div class="form-box">
            <div class="button-box">
                <div id="btn1"></div>
                <button type="button" class="btn" onclick="login()">Log In</button>
                <button type="button" class="btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="fb.png">
                <img src="twitter.gif">
                <img src="google.png">
            </div>
            <form id="login" class="input" action="authentication.php" method="POST" >
                <input type="user" name="username" class="input-f" placeholder="User Id" required>
                <input type="password" name="password" class="input-f" placeholder="Enter Password" required>
                <input type="checkbox" class="check-b"><span>Remember Password</span>
                <button type="submit" class="submit-b" value="login" name="submit" >Log In</button>                
            </form>
            <form id="register" class="input" action="registration.php" method="POST"> 
                <input type="text" class="input-f" name="username" placeholder="User Id" required>
                <input type="email" class="input-f" name="email" placeholder="Email Id" required>
                <input type="password" class="input-f" name="password" placeholder="Enter Password" required>
                <input type="password" class="input-f" name="cpassword" placeholder="Confirm Password" required>
                <input type="checkbox" class="check-b"><span>I agree to terms & conditions</span>
                <button type="submit" class="submit-b">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x =document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn1");
        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0"
        }
    </script>
</body>
</html>