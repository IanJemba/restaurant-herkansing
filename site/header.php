<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        header {
            background-image: url(images/journal-and-coffee-at-table.jpg);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .logo a {
            text-decoration: none;
            color: black;
        }

        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navigation li {
            display: inline-block;
            margin-left: 10px;
        }

        .navigation li:first-child {
            margin-left: 0;
        }

        .navigation li a {
            text-decoration: none;
            color: whitesmoke;
        }

        .navigation li a:hover {
            color: #ff0000;
        }

        .search-box {
            text-align: center;
        }

        .search-box input[type="text"] {
            width: 400px;
            padding: 10px;
            font-size: 18px;
        }

        .search-box button {
            padding: 10px 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="homepage.php">Lalo Passimi <span style="color: darkgrey;">El Eceite </span> </a>
        </div>


        <nav>

            <ul class="navigation">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="menukaart.php">Menu</a></li>
                <li><a href="gerecht.php">Our dishes</a></li>

            </ul>
        </nav>
    </header>
</body>

</html>