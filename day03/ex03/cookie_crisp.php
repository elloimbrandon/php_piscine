<?php
if (array_key_exists("action", $_GET))
{
	$cookie_array = $_GET;
	if (array_key_exists("name", $cookie_array))
	{
		if ($cookie_array['action'] == "set" && array_key_exists("value", $cookie_array))
			setcookie($cookie_array['name'], $cookie_array['value'], time() + 3600, '/');
		else if ($cookie_array['action'] == "get" && isset($_COOKIE[$cookie_array['name']]))
			echo ($_COOKIE[$cookie_array['name']])."\n";
		else if ($cookie_array['action'] == "del")
			setcookie($cookie_array['name'], "", time() - 3600);
	}
}
?>