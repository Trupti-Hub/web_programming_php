<html>  
<body>  
    <form method="POST">  
        Enter First Value:<input type="text" name="n1"> <br><br> 
		Enter Second Value:<input type="text" name="n2"> <br><br>
		Enter Third Value:<input type="text" name="n3"> <br><br>
        <input type="submit" name="submit" value="submit">  
    </form>  
</body>  
</html>

<?php

if(isset($_POST["submit"]))
{
	$num1=$_POST["n1"];
	$num2=$_POST["n2"];
	$num3=$_POST["n3"];
	
	if($num1>$num2)
	{
		echo $num1;
	}
	else if($num2>$num3)
	{
		echo $num2;
	}
	else
	{
		echo $num3;
	}
}
?>
