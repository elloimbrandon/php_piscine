<?PHP
session_start();
?>
<html>
<head>
	<title>Home : Online Shop</title>
	<link rel="stylesheet" href="page.css">
</head>
<body>
<ul id="top">
	<li> <a href= "index.php">
		<img class="icon" src="img/home.png" alt="home">
	</a> </li>
	<li style="float:right"> <a href="
	<?PHP if ($_SESSION['user']) echo "user_info.php"; else echo "user.php"; ?>">
		<img class="icon" src="img/user.png" alt="user">
	</a> </li>
	<li style="float:right"> <a href= "cart.php">
		<img class="icon" src="img/cart.png" alt="cart">
	</a> </li>
</ul>
<div class="category">
	<>
</div>
<ul id="bottom">
	<li><a href= "user.php">Login</a></li>
	<li><a href= "create.php">Create an account</a></li>
	<li><a href= "modif.php">Modify your password</a></li>
</ul>
</body>
</html>
