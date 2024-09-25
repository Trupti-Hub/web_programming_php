<body>
  <form method=POST>

    Enter Number : <input type=text name=num>

    <input type="submit" name="sub">

  </form>
</body>

<?php

if (isset($_POST['sub'])) {

  $num = $_POST['num'];

  if ($num % 2 == 0) {
    echo "The number is even.";
  } else {
    echo "The number is odd.";
  }
}
