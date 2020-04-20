<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		
		*{
	margin: 0;
	padding: 0;
	font-family: sans-serif
}
.hero{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0.9,0.2,0.2,0.4),rgba(0,0,0,0.3)),url(venus.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
	padding-top: 50px;
}
.form-box{
	width: 380px;
	height: 480px;
	position: relative;
	margin: 6% auto;
	background: transparent	;
	padding: 5px;
	overflow: hidden;
}
.button-box{
	width: 220px;
	margin: 35px auto;
	position: relative;
	box-shadow: 10px 10px 20px 9px #ff612f1f;
	border-radius: 30px;
}
.toggler-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;	
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right, #ff106f, #ffad06);
	border-radius: 30px;
	transition: .5s;
}
.input-group{
	top: 180px;
	position: absolute;
	width: 280px;
	transition: .5s;
}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-right: 0;
	border-top: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff106f, #ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;
	margin-top: 40px;
}
.checkbox{
	margin-top: 30px;
	margin-left: 10px;
	margin-right: 30px;
	margin-bottom: 0;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 68px;
	position: absolute;
}
#login{
	left: 50px;
}
#register{
	left: 450px;
	background-color:transparent;
}
.a{
	float:top
}
p{
	color:#FFFF00;
}

	</style>
</head>
<body>

	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggler-btn" onclick="login()">Log In</button>
				<button type="button" class="toggler-btn" onclick="register()">Register</button>
			</div>
				<form id="login" class="input-group" method="post" action="proses_login.php"></p>
				<input type="text" name="username" class="input-field" placeholder="Username" required>
				<input type="Password" name="password" class="input-field" placeholder="Enter Password" required>
				<button type="submit" class="submit-btn">Log In</button>
			</form>

			<form id="register" class="input-group" method="post" action="proses_register.php">
				<input type="text" name="username"class="input-field" placeholder="Username" required>
				<input type="email" name="email" class="input-field" placeholder="Email" required>
				<input type="Password" name="password" style: class="input-field" placeholder="Password" required>
				<button type="submit" class="submit-btn">Register</button>
			</form>
			
			

		</div>
	</div>

	<script>

		var x = document.getElementById("login")
		var y = document.getElementById("register")
		var z = document.getElementById("btn")

		function register(){
			x.style.left="-400px"
			y.style.left="50px"
			z.style.left="110px"
		}
		function login(){
			x.style.left="50px"
			y.style.left="400px"
			z.style.left="0"
		}

	</script>

</body>
</html>