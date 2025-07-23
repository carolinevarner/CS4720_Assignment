<!doctype html>
<html>
<head>
    <link rel='stylesheet' href='page_css.css'>
    <link rel='stylesheet' href='devtalk_ui.css'>
    <link href="https://fonts.googleapis.com/css?family=Ovo" rel="stylesheet">
    <title>DevTalk - Login</title>
    <style>
        .login-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background: white;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .login-btn:hover {
            background-color: #777;
        }
        
        .login-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script type='text/javascript'>
        function sec() {
            var email=document.f1.e1.value;
            var password=document.f1.p1.value;
            
            if(email.length==0||password.length==0) {
                if(email.length==0) {
                    s1.innerHTML="<font color='red'>Field is Required</font>";
                }
                
                if(password.length==0) {
                    s2.innerHTML="<font color='red'>Field is Required</font>";
                }
            }
            else if (email.length>50||password.length>50) {
                if(email.length>50) {
                    s3.innerHTML="<font color='red'>Characters should be less than 50 </font>";
                }
                
                if(password.length>50) {
                    s4.innerHTML="<font color='red'>Characters should be less than 50 </font>";
                }
            }
            else {
                document.f1.submit();
            }
        }
    </script>
</head>
<body>
<div class="fixed-logo"><strong>DevTalk</strong></div>

<nav>
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="secure_signup.php">Sign-Up</a></li>
    <li><a href="contact-us.html">Contact</a></li>
    <li><a href="about-us.html">About Us</a></li>
  </ul>
</nav>

<div class="login-container">
    <div class="login-header">
        <h2>Welcome back!</h2>
        <h1 style="text-align: center; font-size: 50px;">Login</h1>
    </div>
    
    <form method='POST' name='f1' action='user_page.php'>
        <div class="form-group">
            <label for="e1">Email address</label>
            <input type='email' name='e1' id="e1" maxlength='50'>
            <span id='s1'></span>
            <span id='s3'></span>
        </div>
        
        <div class="form-group">
            <label for="p1">Password</label>
            <input type='password' name='p1' id="p1" maxlength='50'>
            <span id='s2'></span>
            <span id='s4'></span>
        </div>
        
        <input type='hidden' name='h1' value='holla'>
        
        <button type='button' class="login-btn" onclick='sec()'>Login</button>
        
        <div class="login-footer">
            Don't have an account? <a href='secure_signup.php'>Sign up</a>
        </div>
    </form>
</div>

<footer align='center'>
    &copy; All Rights Reserved.    
</footer>
</body>
</html>
<!-- 
Original source: https://github.com/abhn/simple-php-mysql-project 
Licensed under the MIT License
-->
</html>




