<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Overview</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php include  'header.php'; ?>
    <h2>Employee Overview</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'database.php';

            // Fetch the employee data from the database
            $sql = "SELECT users.id, users.first_name, users.last_name, users.birthdate, users.email, roles.name AS role
            FROM users
            INNER JOIN roles ON users.role_id = roles.id
            WHERE roles.name != 'Customer'";
            $result = mysqli_query($conn, $sql);
            


            foreach ($result as $row) {
                $id = $row['id'];
                $firstName = $row['first_name'];
                $lastName = $row['last_name'];
                $birthdate = $row['birthdate'];
                $email = $row['email'];
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $firstName; ?></td>
                    <td><?php echo $lastName; ?></td>
                    <td><?php echo $birthdate; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
            <?php
            }



            ?>
        </tbody>
    </table>

    <?php include  'footer.php'; ?>
</body>

</html>