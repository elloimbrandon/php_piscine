<?php
	function	ft_split($string)
	{
		$result = array_filter(explode(" " , $string));
		sort($result);
		return($result);
	}
?>
