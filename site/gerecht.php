<?php
require 'database.php';

$sql = "SELECT * FROM dishes";

$result = mysqli_query($conn, $sql);
$all_dishes = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerechten</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div>
        <?php foreach ($all_dishes as $dishes) : ?>
            <div class="container2">
                <a href="gerechten-overzicht.php?id=<?php echo $dishes["id"] ?>">
                    <h3><?php echo $dishes['title'] ?></h3>
                    <img src="images/<?php echo $dishes['image'] ?>">
                    <p> &euro; <?php echo $dishes['price'] ?> </p>
                    <p><?php echo $dishes['description'] ?> </p>

                </a>

            </div>
        <?php endforeach; ?>
        <?php include 'footer.php' ?>
</body>

</html>