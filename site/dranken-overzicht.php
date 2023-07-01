<?php require 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .section {
            width: 100%;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .section h2 {
            margin-bottom: 10px;
        }

        .dish {
            width: 300px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .section img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php  include 'header.php';?>
    <h2>Drinks</h2>
    <div class="section">
        <?php
        // Fetch drinks
        $drinkSql = "SELECT * FROM drinks";
        $drinkResult = mysqli_query($conn, $drinkSql);
        $drinks = mysqli_fetch_all($drinkResult, MYSQLI_ASSOC);

        // Display drinks
        foreach ($drinks as $drink) {
            $id = $drink['id'];
            $name = $drink['name'];
            $description = $drink['description'];
            $image = $drink['image'];
            $price = $drink['price'];

            echo '
                <div class="dish">
                    <img src="images/' . $image . '" alt="' . $name . '">
                    <h3>' . $name . '</h3>
                    <p>' . $description . '</p>
                    <p>Price: $' . $price . '</p>
                </div>';
        }
        ?>
    </div>

    <?php  include 'footer.php';?>
</body>

</html>