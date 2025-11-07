<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; text-align: center; }
        .success { color: green; padding: 20px; }
        a { color: blue; }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
   
    <?php if (isset($_SESSION['success'])): ?>
        <div class="success">
            <h3><?php echo $_SESSION['success']; ?></h3>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif ?>
   
    <p><a href="login.php?logout=1">Logout</a></p>
</body>
</html>
