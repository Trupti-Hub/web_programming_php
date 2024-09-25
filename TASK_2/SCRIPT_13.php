<body>
  <form method=POST>

    Enter Temp : <input type=text name=temp><br>

    <input type="submit" name="sub">

  </form>
</body>

<?php

if (isset($_POST['sub'])) {

  $temp = $_POST['temp'];

  echo "Answer ---> " . ($temp * 9 / 5) + 32;
}
