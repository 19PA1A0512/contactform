
<!html>
<head>
	<meta charset="utf-8">
	<title>login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
     <form id="one" method="POST" action="submit.php">
     <label><b>Registration form</b></label><br><br>
     username:<input type="text"  id="userid" name="name" required><br><br>
	 Email id:<input type="email"  id="mailid" name="email"><br><br>
     password:<input type="password" id="pass" name="pass" required><br><br>
     phone no:<input type="tel" id="phone" name="phonenum" pattern="[0-9]{10}" required><br><br>

     <button id="signin">
					SignUp
				</button>
			</form>
			<p style="margin-left: 40px;font-size: 15px;">
				Already have an account <a style="color:blue;text-decoration: none;" href="login.html">Login</a>
			</p>
    
</body>
</html>