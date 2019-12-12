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
		<li style="float:right"> <a href= "user.php">
			<img class="icon" src="img/user.png" alt="cart">
		</a> </li>
		<li style="float:right"> <a href= "cart.php">
			<img class="icon" src="img/cart.png" alt="cart">
		</a> </li>
	</ul>
<form action="create.php" method="post">
	Username: <input type="text" name="login" />
	<br />
	Password: <input type="text" name="passwd" />
	<input type="submit" name="submit" value="OK" />
</form>
<?PHP
if ($_POST['submit'] == 'OK' && $_POST['passwd'])
{
	$_POST['passwd'] = hash("whirlpool", $_POST['passwd']);

	if (!file_exists("private"))
		mkdir("private");

	if (file_exists("private/passwd"))
	{
		$file = unserialize(file_get_contents("private/passwd"));
		foreach($file as $line)
			if ($line['login'] === $_POST['login'])
			{
				echo "Account already exists\n";
				header('Location: create.php');
			}
		$file[] = ['login' => $_POST['login'], 'passwd' => $_POST['passwd']];
		$output = serialize($file);
		file_put_contents("private/passwd", $output);
	}
	else
	{
		$array[] = ['login' => $_POST['login'], 'passwd' => $_POST['passwd']];
		$output = serialize($array);
		file_put_contents("private/passwd", $output);
	}
}
else
	exit ("ERROR\n");
echo "OK\n";
header('Location: index.php');
?>
	<ul id="bottom">
		<li><a href= "user.php">Login</a></li>
		<li><a href= "create.php">Create an account</a></li>
		<li><a href= "modif.php">Modify the password</a></li>
	</ul>
</body>
</html>
