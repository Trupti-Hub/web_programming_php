<html>  
<body>  
    <form method="POST">  
        Enter the number:<input type="text" name="n1"><br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>


<?php
if(isset($_POST["submit"]))
{
	$number=$_POST["n1"];
	
	if($number < 2)
	{
		echo "not prime";
	}
	else
	{
		$isprime = true;
		
		for($i=2; $i<$number; $i++)
		{
			if($number%$i==0)
			{
				$isprime = false;
				break;
			}
		}
	
		if($isprime)
		{
			echo "prime number";
		}
		else
		{
			echo "not prime";
		}
	}
}
?>