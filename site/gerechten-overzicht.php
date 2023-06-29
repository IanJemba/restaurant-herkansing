<?php require 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM dishes WHERE id = $id";
$result = mysqli_query($conn, $sql);
$dishes= mysqli_fetch_assoc($result);

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
    <div>
        
            <div class="container">
                
                <h3><?php echo $dishes['title'] ?></h3>
                <img src="images/<?php echo $dishes['image'] ?>">
                <p> &euro; <?php echo $dishes['price'] ?> </p>
                <p><?php echo $dishes['description'] ?> </p>

                </a>

            </div>
       
        <?php include 'footer.php' ?>
</body>

</html>