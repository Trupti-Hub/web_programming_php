<html>  
<body>  
    <form method="POST">  
        Enter the number: <input type="text" name="number"> <br> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>


<?php  

if(isset($_POST["submit"]))
{
	$number=$_POST["number"];
	$reverse=strrev($number);
	
	if($number == $reverse)
	{
		echo "number is palindrome";
	}
	else
	{
		echo "number is not palindrome";
	}
}
?>