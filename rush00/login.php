<?PHP
session_start();

include 'auth.php';

if (auth($_POST['login'], $_POST['passwd']) === TRUE)
{
	$_SESSION['user'] = $_POST['login'];
}
else
{
	$_SESSION['user'] = "";
}
echo "Welcome". $_SESSION['user'];
header("Location: index.php");

?>
