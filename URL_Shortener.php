<?php	
	$url = "www.theappstuff.com";
	$spUrl = str_split($url);

	$string = file_get_contents("url.json");
	$json_a = json_decode($string, true);

	foreach ($json_a as $title => $tabNames) 
	{    		
		foreach ($tabNames[0] as $label => $value)
		{
			$char_num[$value] = $label;			
		}
	}

	//print_r($char_num);


	foreach ($spUrl as $char)
	{
		if (ctype_alpha($char))
		{
			echo $char . "<br>";
		}		
	}
?>