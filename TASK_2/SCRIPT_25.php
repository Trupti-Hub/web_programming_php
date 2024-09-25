<html>

<body>
	<form method="POST">
		Enter the number:<input type="text" name="n1"><br><br>
		Enter the number:<input type="text" name="n2"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
	$num1 = $_POST["n1"];
	$num2 = $_POST["n2"];

	echo "Before Swapping " . $num1 . $num2 . "<br>";

	$num1 = $num1 + $num2;
	$num2 = $num1 - $num2;
	$num1 = $num1 - $num2;

	echo "After Swapping " . $num1 . $num2;
}
?>