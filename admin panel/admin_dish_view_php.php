<?php
require('session_check.php');
require('../dbconnection.php');

$stmt = $conn->prepare('SELECT * FROM food_dish');
$stmt->execute();
$result = $stmt->get_result();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];

    // Step 1: Fetch the image filename from the database
    $stmt = $conn->prepare("SELECT dish_image FROM food_dish WHERE dish_id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $stmt->bind_result($image_name);
    $stmt->fetch();
    $stmt->close();

    // Step 2: Construct the full path to the image
    $image_path = '../database_dish_image/' . $image_name; 

    // Debugging: Output the full image path
    echo "Full image path: " . $image_path . "<br>";

    // Step 3: Delete the image file from the server
    if ($image_name && file_exists($image_path)) {
        unlink($image_path);
        echo "Image deleted.<br>";
    } else {
        echo "File does not exist or path is incorrect.<br>";
    }

    // Step 4: Delete the record from the database
    $stmt = $conn->prepare("DELETE FROM food_dish WHERE dish_id = ?");
    $stmt->bind_param("i", $item_id);

    if ($stmt->execute()) {
        header("Location: admin_dish_view.php?status=deleted");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
