<?php
session_start();
require('dbconnection.php'); // Make sure this file correctly sets up the $conn variable

if (isset($_GET['dish_id'])) {
    $dishId = $_GET['dish_id'];

    // Prepare and execute the query
    $stmt = $conn->prepare('SELECT * FROM food_dish WHERE dish_id = ?');
    if ($stmt) {
        $stmt->bind_param('i', $dishId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Store dish details in variables
            $dishImage = $row['dish_image'];
            $dishPrice = $row['dish_price'];
            $dishName = $row['dish_name'];
            $dishDescription = $row['dish_description'];

            // Optionally store dish details in session
            $_SESSION['dish_id'] = $dishId;
            $_SESSION['dish_image'] = $dishImage;
            $_SESSION['dish_price'] = $dishPrice;
            $_SESSION['dish_name'] = $dishName;
            $_SESSION['dish_description'] = $dishDescription;

            // Perform any necessary actions with the database result
            // For example, redirect to an order confirmation page
            // header('Location: orderConfirmation.php');
            // exit();
        } else {
            echo "No dish found with the provided ID.";
        }

        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }
} else {
    header('Location: index.php');
}
?>
