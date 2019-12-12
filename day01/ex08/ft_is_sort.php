<?php
	function ft_is_sort($array)
	{
		$sort = $array;
		sort($sort);
		foreach($sort as $tmp)
		{
			if($sort !== $array)
			{
				return(false);
			}
			$array++;
		}
		return(true);
	}
?>