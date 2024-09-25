<?php
	
	$s = "hello how are you!";
	$vowel=0;
	
	for($i = 0; $i < strlen($s); $i++)
	{
		if($s[$i]=='a' || $s[$i]=='e' ||  $s[$i]=='i' || $s[$i]=='o' ||  $s[$i]=='i')
		{
			$vowel++;
		}
	}
	
	echo $vowel;
	
?>