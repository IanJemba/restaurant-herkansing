<!DOCTYPE html>
<html>

<head>
    <title>Menu Card</title>
    <style>
        .menu-card {
            display: flex;
            flex-wrap: wrap;
        }

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

        .dish img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="menu-card">
        <h2>Dishes</h2>
        <div class="section">
            <?php
            require 'database.php';
            // Fetch dishes
            $dishSql = "SELECT * FROM dishes";
            $dishResult = mysqli_query($conn, $dishSql);
            $dishes = mysqli_fetch_all($dishResult, MYSQLI_ASSOC);

            // Display dishes
            foreach ($dishes as $dish) {
                $id = $dish['id'];
                $title = $dish['title'];
                $description = $dish['description'];
                $image = $dish['image'];
                $price = $dish['price'];

                echo '
                <div class="dish">
                    <img src="images/' . $image . '" alt="' . $title . '">
                    <h3>' . $title . '</h3>
                    <p>' . $description . '</p>
                    <p>Price: $' . $price . '</p>
                </div>';
            }
            ?>
        </div>
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
    </div>

    <?php include 'footer.php' ?>
</body>

</html>