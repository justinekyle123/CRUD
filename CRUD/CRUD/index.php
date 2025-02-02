<?php include("includes/header.php"); ?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect to login page
    header('Location: login.php');
    exit();
}

echo "Welcome, " . $_SESSION['email'];
?>




 <?php include("includes/footer.php"); ?>
