<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <form action="verwerk-inloggen.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Login</button>
    </form>

    
    <?php include 'footer.php'; ?>