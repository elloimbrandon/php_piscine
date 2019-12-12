<head>
<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<?PHP

session_start();
date_default_timezone_set('America/Los_Angeles');

echo '<form action="speak.php" method="post">
	Message: <input type="text" name="msg" />
	<input type="submit" name="submit" value="OK" />
</form>';

if ($_POST && $_POST['msg'])
{
	if (file_exists("private/chat")) 
		$array = unserialize(file_get_contents("private/chat"));
	$array[] =
		['login' => $_SESSION['loggued_on_user'],
		'time' => time(), 'msg' => $_POST['msg']];
	$output = serialize($array);
	file_put_contents("private/chat", $output);
}

?>
