#!/usr/bin/php
<?php
	function to_upper($array)
	{
		$array[0] = strtoupper($array[0]);
		return($array[0]);
	}
	function replace($array)
	{
		$array = preg_replace_callback("/(=\")(.*?)(\")/iU", "to_upper", $array);
		$array = preg_replace_callback("/(>)(.*)(<)/iU", "to_upper", $array);
		return $array[0];
	}
	if($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		$file = preg_replace_callback("/<a(?:.|\n)+<\/a>/iU", "replace", $file);
		print($file."\n");
	}
?>