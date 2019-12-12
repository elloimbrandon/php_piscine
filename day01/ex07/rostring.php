#!/usr/bin/php
<?php

	if($argc == 1)
		exit(1);
	if($argv[1] != NULL)
	{
		$tmp = explode(" " , $argv[1]);
		foreach(array_slice($tmp, 1) as $array)
		{
			echo "$array"." ";
		}
		echo "$tmp[0]\n";
	}
	else 
	{
		exit(1);
	}
?>