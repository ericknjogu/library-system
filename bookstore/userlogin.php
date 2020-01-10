<?php
$title="login";
 require_once "./template/header1.php";
?>
<html>
<head><title>log in form</title>
	<style>
#main{
	background-color: #f0f8f8;;
}
	#div1 {
		background-color: #f0f8f8;
		text-align: center;
	}
	#login{
		text-align: center;
		background-color:#f0f8f8;; 
	}
	a{
		text-decoration: none;
	}
	a:hover{
		background-color: #f0f8f8;
	}
	body{
		background-color: #f0f8f8;
	}
</head>
</style>
<body>
	<div id="main">

	<div id="div1">
		<h3>WELCOME TO ERICK'S BOOKSTORE</h3>
		<h6>LOGIN TO YOUR ACCOUNT</h6>
	</div>
	<div id="login">
		please login using your personal details.<br><bR>
		<form class="form-horizontal" method="POST" action="login.php">
		<div class="form-group">
			<label for="email" class="control-label col-md-4">email</label>
			<div class="col-md-4">
				<input type="text" name="email" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="password" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form>
	
</div>
</div>
</body>
</html>


