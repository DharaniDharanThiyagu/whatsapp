<?php
session_start();
include("include/conn.php");
$user_id = $_SESSION['id'];

// Update the user's status to "offline" in the database
$sql = "UPDATE user SET login = 'offline' WHERE id = $user_id";
mysqli_query($conn, $sql);

// Destroy the session and redirect to the login page
session_destroy();
header("Location: index.php");
exit();
?>
