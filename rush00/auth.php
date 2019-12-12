<?PHP

function auth($login, $passwd)
{
	$hashed = hash("whirlpool", $passwd);
	if (file_exists("private/passwd"))
	{
		$file = unserialize(file_get_contents("private/passwd"));
		foreach($file as $key => $line)
			if ($line['login'] === $login)
			{
				if ($line['passwd'] === $hashed)
					return (TRUE);
				else
					return (FALSE);
			}
	}
	return (FALSE);	
}

?>
