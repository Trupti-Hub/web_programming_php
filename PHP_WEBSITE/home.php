<?php
session_start();

// Ensure only logged-in users can access this page.
if (!isset($_SESSION['logged_in_user'])) {
    header("location: login.php");
    exit();
}

$user = $_SESSION['logged_in_user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to the Home Page</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Hello, <?php echo htmlspecialchars($user['name']); ?>!</h2>
        <p>Your Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <p>Your Phone: <?php echo htmlspecialchars($user['phone']); ?></p>
        <p>We're glad to have you here!</p>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Company. All Rights Reserved.</p>
    </footer>
</body>
</html>
