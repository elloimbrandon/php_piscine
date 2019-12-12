<?PHP
if ($_POST['submit'] == 'OK' && $_POST['oldpw'] && $_POST['newpw'])
{
	$pass = hash("whirlpool", $_POST['oldpw']);
	$newpass = hash("whirlpool", $_POST['newpw']);

	$file = unserialize(file_get_contents("private/passwd"));
	foreach($file as $key => $line)
		if ($line['login'] === $_POST['login'])
		{
			if ($line['passwd'] === $pass)
				$file[$key]['passwd'] = $newpass;
			else
				exit("ERROR\n");

		}
	$output = serialize($file);
	file_put_contents("private/passwd", $output);
}
else
	exit ("ERROR\n");
echo "OK\n";
header('Location: index.html');
?>
