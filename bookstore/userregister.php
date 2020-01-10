<?php
$title="register";
 require_once "./template/header1.php";
?>
<html>
<head>
	<style>

}
 #divv{
 	height: 600px;
 	text-align: center;
 }
#main{
	background-color: #f0f8f8;
	width:100%;


}
	#div1 {
		background-color: #f0f8f8;
		text-align: center;
	}
	#login{
		text-align: center;
		background-color:#f0f8f8;
		align-self: center; 
	}
	a{
		text-decoration: none;
	}
	
	input[type=text],input[type=password]{
		width:100%;
		padding:15px 22px;
		margin:8px 0;
		box-sizing: border-box;
		background: #f1f1f1;
		border:none;
	}
	input[type=text]:focus,input[type=password]:focus{
		background-color:#ddd;
		outline: none;
	}
	body{
		width:50%;
		background-color: #f0f8f8;
	}
	
</style>
	</head>
<div id="divv">
<body>

	<p id="p1"><h3 align="center">register</h3></p>
<p id="p2" ><h4 align="center">please enter your personal details</h4><br>
<form name="register" method="POST" action="register.php">
email:<input type="text" name="email" required><BR>
password:<input type="password" name="password" required><BR>
firstname:<input type="text" name="firstname" required><br>
lastname:<input type="text" name="lastname" required><br>
address:<input type="text" name="address" required><br>
</p>

<font>select your gender</font><br>
	
	male:<input type="checkbox" name="country"><br>
	female:<input type="checkbox" name="country"><br><br>
	By clicking register you agree to our <a href="">terms and conditions</a><br><br>
<input type="submit" name="submit" class="btn btn-primary">
<input type="reset" value="reset"><br>
|already registered?| <a href="userlogin.php">login</a>
</form>

</body>
</div>
</html>
