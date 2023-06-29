<?php
require 'database.php';

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the login form values
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare the SQL query with an inner join on the roles table
  $sql = "SELECT u.id, u.first_name, u.last_name, u.email, r.name AS role_name
          FROM users u
          INNER JOIN roles r ON u.role_id = r.id
          WHERE u.email = '$email' AND u.password = '$password'";

  // Execute the query
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  // Check if the user exists in the database
  if ($row) {
    $user_id = $row['id'];
    $role_name = $row['role_name'];

    // Redirect the user based on their role
    switch ($role_name) {
      case 'Director':
        // Redirect to the director's dashboard
        header("Location: director_dashboard.php");
        exit();
      case 'Manager':
        // Redirect to the manager's dashboard
        header("Location: manager_dashboard.php");
        exit();
      case 'Employee':
        // Redirect to the employee's dashboard
        header("Location: employee_dashboard.php");
        exit();
      case 'Customer':
        // Redirect to the customer's dashboard
        header("Location: customer_dashboard.php");
        exit();
      default:
        // Invalid role
        echo "Invalid role.";
        break;
    }
  } else {
    // Invalid login
    echo "Invalid email or password. Please try again.";
  }
}
?>
