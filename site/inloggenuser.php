<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <h2>Login</h2>
        <form action="verwerk-inloggen.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>