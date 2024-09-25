<html>  
<body>  
    <form method="POST">  
        Enter the radius: <input type="text" name="radius"> <br> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>


<?php

if(isset($_POST["submit"]))
{
	$radius = $_POST["radius"];
	
	$area = 3.14 * $radius * $radius;
	echo "Area is : ".$area;
}
?>