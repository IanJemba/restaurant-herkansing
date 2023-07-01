<?php
require 'database.php';

$id = $_GET['id'] ?? '';

if (!empty($id)) {
    // Fetch the dish from the database based on the id
    $sql = "SELECT * FROM dishes WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $dish = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerechten overzicht</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <nav>
        <form action="gerechten-overzicht.php" method="GET">
            <input type="hidden" name="id" value="1">
            <input type="submit" value="Search">
        </form>
        <ul class="dashboard-nav">
            <li><a href="product-toevoegen.php">Add a Dish</a></li>
            <li><a href="medewerks-overzicht.php">View all employees</a></li>
            <li><a href="gerecht.php">View Dishes</a></li>
            <li><a href="dranken-overzicht.php">View Drinks</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>

    <section>
        <?php if (!empty($dish)) : ?>
            <h2><?php echo $dish['title'] ?></h2>
            <div class="dish">
                <img src="images/<?php echo $dish['image'] ?>" alt="<?php echo $dish['title'] ?>">
                <p>&euro; <?php echo $dish['price'] ?></p>
                <p><?php echo $dish['description'] ?></p>
            </div>
        <?php else : ?>
            <p>No dish found with the specified id.</p>
        <?php endif; ?>
    </section>

    <?php include 'footer.php' ?>
</body>

</html>
