<html>  
<body>  
    <form method="POST">  
        Enter the Year: <input type="text" name="year"> <br> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>
  
<?php   
    if(isset($_POST["submit"]))  
    {     

        $year = $_POST['year'];   
		
        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
        {  
            echo "$year is a Leap Year";    
        }  
        else  
        {  
            echo "$year is not a Leap Year";    
        }  
    }   
?> 