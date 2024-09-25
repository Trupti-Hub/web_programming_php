<body>
  <form method=POST>

    Enter Length : <input type=text name=len>
    Enter Width : <input type=text name=wid>

    <input type="submit" name="sub">

  </form>
</body>
<?php
if (isset($_POST['sub'])) {
  $length = $_POST['len'];
  $width = $_POST['wid'];

  echo "Area of Rectangle --> " . $length * $width;
}
