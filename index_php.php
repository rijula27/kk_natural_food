<?php
session_start();

require('dbconnection.php');

$stmt1 = $conn->prepare('SELECT * FROM slider');
$stmt1->execute();
$stmt1_result = $stmt1->get_result();


$stmt2 = $conn->prepare('SELECT * FROM food_dish');
$stmt2->execute();
$stmt2_result = $stmt2->get_result();


$stmt3 = $conn->prepare('SELECT * FROM customer_feedback ORDER BY customer_id DESC LIMIT 1');
$stmt3->execute();
$stmt3_result = $stmt3->get_result();
$mostRecentData = mysqli_fetch_assoc($stmt3_result);

if ($mostRecentData) {
    $mostRecentId = $mostRecentData['customer_id'];
} else {
    $mostRecentId = 0; // Default value if no feedback is present
}

// Fetch all feedback entries except the most recent one
$stmt4 = $conn->prepare('SELECT * FROM customer_feedback WHERE customer_id <> ? ORDER BY customer_id DESC');
$stmt4->bind_param('i', $mostRecentId);
$stmt4->execute();
$stmt4_result = $stmt4->get_result();


$stmt5 = $conn->prepare('SELECT * FROM customer_feedback ORDER BY customer_id DESC LIMIT 1');
$stmt5->execute();
$stmt5_result = $stmt5->get_result();

?>