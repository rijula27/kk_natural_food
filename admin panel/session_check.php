<?php
session_start();

// $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] :'';

if (!isset($_SESSION['user_id'])) {
  // If not, redirect to the login page
  header("Location: admin.php?message=" . urlencode("Please log in to access this page."));
  exit();
}
?>