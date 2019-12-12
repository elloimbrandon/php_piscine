#!/usr/bin/php
<?php
	$string = $argv[1];
	$string = preg_replace('/\s+/', ' ', $string);
	$string = trim($string);
	echo("$string\n");
?>