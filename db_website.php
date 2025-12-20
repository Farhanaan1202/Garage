<?php
// db_koneksi.php

$host = "localhost";
$user = "root";
$pass = "";
$db_website = "db_website"; // <-- ADD THIS LINE

// Line 8:
$koneksi = new mysqli($host, $user, $pass, $db_website); 

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>