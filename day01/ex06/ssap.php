#!/usr/bin/php
<?php
	$array = array();
	unset($argv[0]);
	foreach($argv as $value)
	{
		$temp = array_filter(explode(" " , $value));
		foreach($temp as $value2)
			$array[] = $value2;
	}
	sort($array);
	foreach($array as $value)
	{
		echo "$value\n";
	}
?>