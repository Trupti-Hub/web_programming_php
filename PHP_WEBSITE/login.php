<?php
session_start();

if (isset($_SESSION['logged_in_user'])) {
    header("location: home.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nm'];
    $password = $_POST['pwd'];

    $is_valid_user = false;
    foreach ($_SESSION['users'] as $user) {
        if ($user['name'] === $name && $user['password'] === $password) {
            $_SESSION['logged_in_user'] = $user;
            $is_valid_user = true;
            break;
        }
    }

    if ($is_valid_user) {
        header("location: home.php");
        exit();
    } else {
        $error = "Invalid name or password";
    }
}
?>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h2>Login Form</h2>
<form method="POST" action="">
    <table>
        <tr><td>Name</td><td>:</td><td><input type="text" name="nm" required></td></tr>
        <tr><td>Password</td><td>:</td><td><input type="password" name="pwd" required></td></tr>
        <tr><td><input type="submit" name="submit" value="Login"></td></tr>
    </table>
</form>
<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
</body>
</html>
