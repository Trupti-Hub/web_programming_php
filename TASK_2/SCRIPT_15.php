<html>
<form method="POST">

  Number 1 <input type="text" name="num1">
  Number 2 <input type="text" name="num2">
  Number 3 <input type="text" name="num3">

  <input type="submit" name="sub">

</form>

</html>
<?php


if (isset($_POST['sub'])) {

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];


  if ($num1 > $num2) {
    echo $num1;
  } else if ($num2 > $mum3) {
    echo $num2;
  } else {
    echo $num3;
  }
}
