<body>
  <form method=POST>

    Enter String1 : <input type=text name=str1><br>
    Enter String2 : <input type=text name=str2><br>

    <input type="submit" name="sub">

  </form>
</body>

<?php

if (isset($_POST['sub'])) {

  $str1 = $_POST['str1'];
  $str2 = $_POST['str2'];

  echo $str1 . " " . $str2;
}
