<?php
require('session_check.php');
require('../dbconnection.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $dishName = $_POST['dish_name'];
    $dishDescription = $_POST['dish_description'];
    $dishPrice = $_POST['dish_price'];


    $targetDir = "../database_dish_image/";

    $fileName = basename($_FILES["dish_image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $stmt = $conn->prepare('INSERT INTO food_dish(dish_name, dish_description, dish_price, dish_image) VALUES (?,?,?,?)');
    $stmt->bind_param('ssis', $dishName,$dishDescription, $dishPrice, $fileName);

    
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
    if(in_array(strtolower($fileType), $allowedTypes)){
        // Check if the file already exists
        if (!file_exists($targetFilePath)) {
            // Try to move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES["dish_image"]["tmp_name"], $targetFilePath)){
                // Execute the statement to insert the file path into the database
                if($stmt->execute()){
                    // echo "The file ". htmlspecialchars($fileName). " has been uploaded successfully and recorded in the database.";
                    header("Location: upload_dish.php?message=".urlencode("Slider image has been uploaded successfully"));
                } else {
                    echo "Failed to insert the file path into the database.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File already exists. Please rename the file and try again.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, GIF, & WEBP files are allowed to upload.";
    }
    
    // Close the statement and the connection
    $stmt->close();
    $conn->close();
} else {
    echo "No file uploaded.";
}

?>