<?PHP
session_start();
?>
<html>
<head>
	<title>User : Online Shop</title>
	<link rel="stylesheet" href="page.css">
</head>
<body>
	<ul id="top">
		<li> <a href= "index.php">
			<img class="icon" src="img/home.png" alt="home">
		</a> </li>
		<li style="float:right"> <a href= "user.php">
			<img class="icon" src="img/user.png" alt="cart">
		</a> </li>
		<li style="float:right"> <a href= "cart.php">
			<img class="icon" src="img/cart.png" alt="cart">
		</a> </li>
	</ul>
<form action="login.php" method="post">
	Username: <input type="text" name="login" />
	<br />
	Current Password: <input type="text" name="passwd" />
	<input type="submit" name="submit" value="OK" />
</form>
	<ul id="bottom">
		<li><a href= "user.php">Login</a></li>
		<li><a href= "create.php">Create an account</a></li>
		<li><a href= "modif.php">Modify the password</a></li>
	</ul>
</body>
</html>
