<?php
// Configuration variables
$host = "localhost";        
$username_db = "root";      // Standard XAMPP/Localhost username
$password_db = "";          // Standard XAMPP/Localhost password (often empty)

// STEP 1: DEFINE THE VARIABLE WITH YOUR ACTUAL DATABASE NAME
$db_website = "db_website"; // <-- REPLACE 'garage_db' with the real name of your database!

// STEP 2: Make sure the connection uses all 4 variables (especially $db_website)
// This line should be around line 9 (where your error occurs)
$conn = new mysqli($host, $username_db, $password_db, $db_website);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>