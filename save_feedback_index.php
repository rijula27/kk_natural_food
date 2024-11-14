<?php
// save_feedback.php
require('dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

       // Prepare the SQL query
       $stmt = $conn->prepare("INSERT INTO customer_feedback (customer_name, review_description, rating) VALUES (?, ?, ?)");
       $stmt->bind_param("ssi", $name, $feedback, $rating);
   

       if ($stmt->execute()) {
        header("Location: index.php?message=".urlencode("Slider image has been uploaded successfully"));
    } else {
        // Handle any errors here
        echo json_encode(['error' => 'Failed to save feedback']);
    }

    $stmt->close();
    $conn->close();

}
?>
