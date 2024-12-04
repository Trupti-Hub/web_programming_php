<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nm'];
    $password = $_POST['pwd'];
    $email = $_POST['enm'];
    $phone = $_POST['phn'];

    // Store user information in session (for simplicity, not recommended for production).
    $_SESSION['users'][] = [
        'name' => $name,
        'password' => $password,
        'email' => $email,
        'phone' => $phone
    ];

    header("location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<h2>Register Form</h2>
<form method="POST" action="">
    <table>
        <tr><td>Name</td><td>:</td><td><input type="text" name="nm" required></td></tr>
        <tr><td>Password</td><td>:</td><td><input type="password" name="pwd" required></td></tr>
        <tr><td>Email</td><td>:</td><td><input type="email" name="enm" required></td></tr>
        <tr><td>Phone No</td><td>:</td><td><input type="number" name="phn" required></td></tr>
        <tr><td><input type="submit" name="submit" value="Register"></td></tr>
    </table>
</form>
</body>
</html>
