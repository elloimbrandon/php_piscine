<?PHP

session_start();
date_default_timezone_set('America/Los_Angeles');

if (file_exists("private/chat"))
{
	$file = unserialize(file_get_contents("private/chat"));
	foreach($file as $line)
	{
		print ("[".date('H:i', $line['time'])."] <b>".$line['login']."</b>: ");
		print ($line['msg']."<br />\n");
	}
}

?>
