<?php
require('session_check.php');
require('../dbconnection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Directory where you want to save the uploaded files
    $targetDir = "../database_image/";
    
    // Get the file information
    $fileName = basename($_FILES["food_image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $slider_name = $_POST['food_name'];
    $rating = $_POST['rating'];

    // Prepare the SQL statement for inserting the image path into the database
    $stmt = $conn->prepare('INSERT INTO slider (slider_image, slider_name,rating) VALUES (?,?,?)');
    $stmt->bind_param('ssi', $fileName, $slider_name, $rating);
    
    // Allow only specific file formats
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
    if(in_array(strtolower($fileType), $allowedTypes)){
        // Check if the file already exists
        if (!file_exists($targetFilePath)) {
            // Try to move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES["food_image"]["tmp_name"], $targetFilePath)){
                // Execute the statement to insert the file path into the database
                if($stmt->execute()){
                    // echo "The file ". htmlspecialchars($fileName). " has been uploaded successfully and recorded in the database.";
                    header("Location: upload_slider.php?message=".urlencode("Slider image has been uploaded successfully"));
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