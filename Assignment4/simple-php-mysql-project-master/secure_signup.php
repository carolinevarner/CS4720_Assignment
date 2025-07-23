<!doctype html>
<html>
<head>
    <link rel='stylesheet' href='devtalk_ui.css'>
    <link href="https://fonts.googleapis.com/css?family=Ovo" rel="stylesheet">
    <title>DevTalk - Sign Up</title>
    <style>
        .signup-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background: white;
        }
        
        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .signup-header h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .form-group {
            flex: 1;
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
        
        .checkbox-group {
            margin-bottom: 20px;
        }
        
        .signup-btn {
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
        
        .signup-btn:hover {
            background-color: #777;
        }
        
        .signup-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script type='text/javascript'>
        function sec() {
            var name=document.f1.n1.value;
            var email=document.f1.e1.value;
            var password=document.f1.p1.value;
            
            if(name.length==0||email.length==0||password.length==0) {
                if(name.length==0) {
                    s1.innerHTML="<font color='red'>Field is Required</font>";
                }
                
                if(email.length==0) {
                    s2.innerHTML="<font color='red'>Field is Required</font>";
                }
                
                if(password.length==0) {
                    s4.innerHTML="<font color='red'>Field is Required</font>";
                }
            }
            else if (name.length>50||email.length>50||password.length>50) {
                if(name.length>50) {
                    s5.innerHTML="<font color='red'>Characters should be less than 50 </font>";
                }
                
                if(email.length>50) {
                    s6.innerHTML="<font color='red'>Characters should be less than 50 </font>";
                }
                
                if(password.length>50) {
                    s7.innerHTML="<font color='red'>Characters should be less than 50 </font>";
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

<div class="signup-container">
    <div class="signup-header">
        <h2>Connect with other developers today!</h2>
        <h1 style="text-align: center; font-size: 50px;">Sign Up</h1>
    </div>
    
    <form method='POST' name='f1' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        <div class="form-row">
            <div class="form-group">
                <label for="n1">First name</label>
                <input type='text' name='n1' id="n1" maxlength='50'>
                <span id='s1'></span>
                <span id='s5'></span>
            </div>
        </div>
        
        <div class="form-group">
            <label for="e1">Email address</label>
            <input type='email' name='e1' id="e1" maxlength='50'>
            <span id='s2'></span>
            <span id='s6'></span>
        </div>
        
        <div class="form-group">
            <label for="p1">Create password</label>
            <input type='password' name='p1' id="p1" maxlength='50'>
            <span id='s4'></span>
            <span id='s7'></span>
        </div>
        
        <div class="checkbox-group">
            <input type="checkbox" id="notifications" name="notifications">
            <label for="notifications">Receive Notifications</label>
        </div>
        
        <button type='button' class="signup-btn" onclick='sec()'>Register</button>
        
        <div class="signup-footer">
            Already have an account? <a href='login.php'>Login</a>
        </div>
    </form>
</div>
	<?php
	
	$name=$email=$age=$gender=$password=$count=$count_id="";
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		function sec($data) {
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
			$name=sec($_POST["n1"]);
			$email=sec($_POST["e1"]);
			$age=sec($_POST["a1"]);
			$gender=sec($_POST["g1"]);
			$password=sec($_POST["p1"]);
	
			//$query="INSERT INTO studs VALUES('$name','$email',$age);";
		//MySQL Magic :D
			//Getting Resource ID
			//$resid=MySQLi_Connect('localhost','root','@connectme','shangout');
			$resid = mysqli_connect("localhost", "cvarner5", "cvarner5", "cvarner5");

			if(MySQLi_Connect_Errno()) {
				echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
			}
			else {
			$check_email=MySQLi_Query($resid,"select name from students where email='".$email."'");
			$r_email=MySQLi_Fetch_Row($check_email);
			
			if($r_email) {
				echo "<tr align='center'> <td colspan='5'> <font color='red'> Email already Registered, Registration Failed!  </font>  </td> </tr>";
			}
			
			else {
			$count=MySQLi_Query($resid,"select (max(id)+1) as count  from students");
			$count_id=MySQLi_Fetch_Assoc($count);
			if($count_id["count"]) {
				$query="insert into students values (".$count_id["count"].",'$name','$email',$age,'$gender','$password')";
			}
			else {
				$query="insert into students values (1,'$name','$email',$age,'$gender','$password')";
			}
			$res=MySQLi_Query($resid,$query);
			if($res) {
			echo "<tr align='center'> <td colspan='5'> <font color='green'> Registration Successful! </font> You may login now from here:- <a href='login.php'>Login</a></td> </tr>";
			}
			else {
				echo "<tr align='center'> <td colspan='5'> <font color='red'> Registration Failed! </font> </td> </tr>";
			}
			}
			MySQLi_Close($resid);
			}
			
			
	
	}
	?> 			
		</table>
			<footer align='center'>
			&copy; All Rights Reserved.	
			</footer>
</body>
<!-- 
Original source: https://github.com/abhn/simple-php-mysql-project 
Licensed under the MIT License
-->
</html>





















