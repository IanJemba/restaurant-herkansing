<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <h2>Add a New Dish</h2>
    <form action="verwerk-toevoegen.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required></textarea><br>

        <label for="image">Image:</label>
        <input type="text" name="image" id="image" required><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required><br>

        <input type="submit" value="Add Dish">
    </form>
    <?php include 'footer.php' ?>
</body>

</html>