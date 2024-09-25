<html>  
<body>  
    <form method="POST">  
        Enter the number: <input type="text" name="number"><br> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>

<?php

if(isset($_POST["submit"]))
{
	$number=$_POST["number"];
	
	if($number < 0)
	{
		echo "factorial is not for negative";
	}
	else
	{
		$factorial = 1;
		for($i=2; $i<=$number; $i++)
		{
			$factorial = $factorial * $i;
		}
	}
	
	echo $factorial;
}
?>