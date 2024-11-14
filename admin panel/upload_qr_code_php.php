<?php
require('session_check.php');
require('../dbconnection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Directory where you want to save the uploaded files
    $targetDir = "../qr_image/";

    // Get the file information
    $fileName = basename($_FILES["qr_image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Prepare the SQL statement to retrieve the current file path
    $stmt = $conn->prepare('SELECT qr_path FROM qr_code WHERE qr_id = 1');
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $oldFilePath = $targetDir . $data['qr_path'];
    
    // Prepare the SQL statement for updating the image path into the database
    $stmt = $conn->prepare('UPDATE qr_code SET qr_path = ? WHERE qr_id = 1');
    $stmt->bind_param('s', $fileName);

    // Allow only specific file formats
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
    if(in_array(strtolower($fileType), $allowedTypes)){
        // Check if the file already exists
        if (!file_exists($targetFilePath)) {
            // Try to move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES["qr_image"]["tmp_name"], $targetFilePath)){
                // Execute the statement to update the file path in the database
                if($stmt->execute()){
                    // Delete the old file if it exists and is different from the new one
                    if (file_exists($oldFilePath) && $oldFilePath !== $targetFilePath) {
                        unlink($oldFilePath);
                    }
                    // Redirect with success message
                    header("Location: upload_qr_code.php?message=".urlencode("QR image has been uploaded successfully"));
                } else {
                    echo "Failed to update the file path in the database.";
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
